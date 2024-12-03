<section class="cust-form-sec relative shadow">
    <h3 class="text-center">Get a Quote</h3>
    <div class="cust-discount">
        <img src="{{ asset('assets/images/discount.png') }}" alt="cust-discount" class="cust-img">
    </div>
    <form id="product-form" method="POST">
        <div class="my-4">
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
                                <tr>
                                    <td>
                                        <input class="form-check-input" type="checkbox"
                                            id="part-{{ $part['code'] }}"
                                            data-part="{{ json_encode($part) }}" />
                                    </td>
                                    <td>
                                        <label for="part-{{ $part['code'] }}">{{ $part['name'] }}</label>
                                    </td>
                                    <td>
                                        <label
                                            for="part-{{ $part['code'] }}">${{ number_format($part['price'], 2) }}</label>
                                    </td>
                                    <td style="display: none;">
                                        <label>{{ $part['discount'] }}</label>
                                    </td>
                                    <td style="display: none;">
                                        <label id="main-product">{{ $part['product_name'] }}</label>
                                    </td>
                                    <td>
                                        <label id="discounted-price" for="discounted-price-{{ $part['code'] }}">
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
    </form>
</section>

@section('script')
    <script>
        // When a checkbox is changed (checked/unchecked)
        document.querySelectorAll('.form-check-input').forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                var partDetails = JSON.parse(this.getAttribute('data-part')); // Get part details
                var isChecked = this.checked;

                // Make an AJAX call to save the selected part in the cache
                $.ajax({
                    url: '/save-part-selection', // The route to handle AJAX in Laravel
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}', // CSRF token for security
                        part: partDetails, // Send part details
                        isChecked: isChecked, // Whether the part is selected
                    },
                    success: function(response) {
                        console.log('Part saved to cache:', response);
                        // You can update the UI or show a success message here
                    },
                    error: function(xhr, status, error) {
                        console.log('Error saving part to cache:', error);
                    }
                });
            });
        });
    </script>
@endsection
