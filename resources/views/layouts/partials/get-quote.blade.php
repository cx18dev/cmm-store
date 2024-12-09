<section class="cust-form-sec relative shadow">
    <h3 class="text-center">Get a Quote</h3>
    <div class="cust-discount">
        <img src="{{ asset('assets/images/discount.png') }}" alt="cust-discount" class="cust-img">
    </div>
    <div id="product-form">
        <div class="my-4 mb-2">
            <div class="select-product">
                <div class="table-responsive">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                @if (count($parts) > 0)
                                    <th class="fw-bold" style="width: 5%;"></th>
                                @endif
                                <th class="fw-bold" style="width: 30%;">Part Number</th>
                                <th class="fw-bold" style="width: 30%;">Renishaw List Price</th>
                                <th class="fw-bold" style="width: 30%;">Our Discounted Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($parts as $part)
                                @php
                                    $part['probe_id'] = $probe->id;
                                    $part['probe'] = $probe->name;
                                    $part['probe_img'] = asset('assets/admin/probes/' . $probe->image);
                                    $part['probe_link'] = route('probes', [
                                        'category' => $probe->category->slug,
                                        'probes' => $probe->slug,
                                    ]);
                                    $partDetails = json_encode($part->toArray());
                                    $id = 'part-' . $part['id'] . '-probe-' . $part['probe_id'];

                                    // Get cart items from cache
                                    $cartItems = Cache::get('cart', []);

                                    // Check if the current part is in the cart
                                    $isPartInCart = false;
                                    foreach ($cartItems as $cartItem) {
                                        foreach ($cartItem['parts'] as $cartPart) {
                                            if (
                                                $cartPart['name'] == $part['name'] &&
                                                $cartItem['name'] == $part['probe']
                                            ) {
                                                $isPartInCart = true;
                                                break 2;
                                            }
                                        }
                                    }
                                @endphp
                                <tr>
                                    <td>
                                        <input class="form-check-input mt-0" type="checkbox" id="{{ $id }}"
                                            data-part="{{ $partDetails }}" {{ $isPartInCart ? 'checked' : '' }} />
                                    </td>
                                    <td>
                                        <label for="{{ $id }}">{{ $part['name'] }}</label>
                                    </td>
                                    <td>
                                        <label for="{{ $id }}">${{ number_format($part['price'], 2) }}</label>
                                    </td>
                                    <td>
                                        <label id="discounted-price" for="discounted-price-{{ $id }}">
                                            ${{ number_format($part['price'] - ($part['price'] * $part['discount']) / 100, 2) }}
                                        </label>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">---- No parts are currently available ----</td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        @if (count($parts) > 0)
            <div class="text-center">
                <img id="AddToCart" src="{{ asset('assets/images/add-to-cart.png') }}" alt="Add to cart" style="width: 15%; cursor: pointer;">
            </div>
        @endif

        {{-- <div class="row">
            <div class="col-md-4 mb-3">
                <label for="name" class="form-label fw-bold">Name:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name"
                    required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="email" class="form-label fw-bold">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email"
                    required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="phone" class="form-label fw-bold">Phone:</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter Phone"
                    required>
            </div>
            <div class="col-12 mb-3">
                <label for="details" class="form-label fw-bold">Details:</label>
                <textarea class="form-control" id="details" name="details" placeholder="Enter Details" rows="3"></textarea>
            </div>
            <div class="col-12 mb-3">
                <button type="submit" class="btn btn-primary" id="submit-btn">
                    <span class="spinner-border spinner-border-sm me-2 d-none" id="spinner" role="status"
                        aria-hidden="true"></span>
                    Submit
                </button>
            </div>
        </div> --}}
    </div>
</section>

@section('script')
    <script>
        $(document).ready(function() {
            // Handle the Add to Cart button click
            $('#AddToCart').on('click', function() {
                let selectedParts = [];
                let removedParts = [];

                // Loop through all checked checkboxes and add to selectedParts
                $('input[type="checkbox"]:checked').each(function() {
                    let partData = $(this).data('part');
                    selectedParts.push({
                        probe: {
                            name: partData.probe,
                            probe_id: partData.probe_id,
                            probe_img: partData.probe_img,
                            probe_link: partData.probe_link,
                        },
                        part: {
                            id: partData.id,
                            name: partData.name,
                            price: partData.price,
                            discount: partData.discount,
                        },
                    });
                });

                // Loop through all unchecked checkboxes and add to removedParts
                $('input[type="checkbox"]:not(:checked)').each(function() {
                    let partData = $(this).data('part');
                    removedParts.push({
                        probe: {
                            name: partData.probe,
                            probe_id: partData.probe_id,
                            probe_img: partData.probe_img,
                            probe_link: partData.probe_link,
                        },
                        part: {
                            id: partData.id,
                            name: partData.name,
                            price: partData.price,
                            discount: partData.discount,
                        },
                    });
                });

                // Send the selected parts and removed parts to the backend
                $.ajax({
                    url: `{{ route('add.cart') }}`,
                    method: 'POST',
                    data: {
                        parts: selectedParts,
                        remove_parts: removedParts, // Send the removed parts
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        console.log(response);
                        if (response.status) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Cart updated successfully!',
                                confirmButtonText: 'OK'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.reload();
                                }
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'Failed to update the cart.',
                                confirmButtonText: 'OK'
                            });
                        }
                    },
                    error: function(error) {
                        console.error(error);
                        alert('Failed to update the cart.');
                    }
                });
            });
        });
    </script>
@endsection
