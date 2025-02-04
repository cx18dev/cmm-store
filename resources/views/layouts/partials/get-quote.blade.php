@if (isset($parts['original']))
    <section class="cust-form-sec relative shadow">
        <h3 class="text-center">Get a Quote</h3>
        <div class="cust-discount">
            @if ($category->slug == 'RBE-repair-by-exchange')
                <img src="{{ asset('assets/images/10-discount.png') }}" alt="cust-discount" class="cust-img">
            @else
                <img src="{{ asset('assets/images/20-discount.png') }}" alt="cust-discount" class="cust-img">
            @endif
        </div>
        <div id="product-form">
            <div class="my-4 mb-2">
                <div class="select-product">
                    <div class="table-responsive">
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    @if (count($parts['original']) > 0)
                                        <th class="fw-bold" style="width: 5%;"></th>
                                    @endif
                                    <th class="fw-bold" style="width: 15%;">Part Number</th>
                                    @if ($probe->slug == 'upgrade-ph10-to-ph10t-ph10m-ph10mq')
                                        <th class="fw-bold" style="width: 15%;">Legacy PH10 Probe Head</th>
                                    @elseif ($probe->slug == 'upgrade-ph10-phc10-to-ph10t-mq-phc10-3-plus')
                                        <th class="fw-bold" style="width: 15%;">Legacy PH10 Probe Kit</th>
                                    @endif
                                    <th class="fw-bold" style="width: 15%;">Upgrade To</th>
                                    <th class="fw-bold" style="width: 15%;">Renishaw List Price</th>
                                    <th class="fw-bold" style="width: 15%;">Our Discounted Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    if ($probe->slug === 'upgrade-ph10-to-ph10t-ph10m-ph10mq') {
                                        $parts['original']['legacy'] = ['Legacy PH10', 'Legacy PH10', 'Legacy PH10'];
                                    }
                                    if ($probe->slug === 'upgrade-ph10-phc10-to-ph10t-mq-phc10-3-plus') {
                                        $parts['original']['legacy'] = [
                                            'Legacy PH10 + PH10C',
                                            'Legacy PH10 + PH10C',
                                            'Legacy PH10 + PH10C',
                                        ];
                                    }
                                @endphp
                                @forelse ($parts['original'] as $key => $part)
                                    @php
                                        if ((string) $key) {
                                            continue;
                                        }

                                        $part['probe_id'] = $probe->id;
                                        $part['probe'] = $probe->name;
                                        $part['probe_img'] = asset('assets/admin/probes/' . $probe->image);
                                        $part['probe_link'] = route('probes', [
                                            'category' => $probe->category->slug,
                                            'probes' => $probe->slug,
                                        ]);
                                        $partDetails = json_encode($part);
                                        $id = 'part-' . $part['id'] . '-probe-' . $part['probe_id'];

                                        // Get cart items from session
                                        $cartItems = Session::get('cart', []);

                                        // Check if the current part is in the cart
                                        $isPartInCart = false;
                                        foreach ($cartItems as $cartItem) {
                                            foreach ($cartItem['parts'] as $cartPart) {
                                                if (
                                                    $cartPart['name'] === $part['name'] &&
                                                    $cartItem['name'] === $part['probe']
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
                                        @if ($probe->slug == 'upgrade-ph10-to-ph10t-ph10m-ph10mq' || $probe->slug == 'upgrade-ph10-phc10-to-ph10t-mq-phc10-3-plus')
                                        <td>
                                            <label for="{{ $id }}">{{ $parts['original']['legacy'][$key] }}</label>
                                        </td>
                                        @endif
                                        <td>
                                            <label for="{{ $id }}">{{ $part['upgrade_to'] ?? '-' }}</label>
                                        </td>
                                        <td>
                                            <label for="{{ $id }}">${{ number_format($part['price'], 2) }}</label>
                                        </td>
                                        <td>
                                            <label id="discounted-price-{{ $id }}" for="{{ $id }}">
                                                ${{ number_format($part['price'] - ($part['price'] * ($part['discount'] ?? 0)) / 100, 2) }}
                                            </label>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6">---- No parts are currently available ----</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            @if (count($parts['original']) > 0)
                <div class="text-center">
                    <img id="AddToCart" class="AddToCart" src="{{ asset('assets/images/add-to-cart.png') }}" alt="Add to cart"
                        style="width: 15%; cursor: pointer;">
                </div>
            @endif
        </div>
    </section>
@endif
@if (isset($parts['module']))
    @php
    $groupedByModule = [];

    foreach ($parts['module'] as $categoryName => $items) {
        foreach ($items as $item) {
            $moduleKey = "Module-" . $item['module'];

            if (!isset($groupedByModule[$moduleKey])) {
                $groupedByModule[$moduleKey] = [];
            }

            if (!isset($groupedByModule[$moduleKey][$categoryName])) {
                $groupedByModule[$moduleKey][$categoryName] = [];
            }

            $groupedByModule[$moduleKey][$categoryName][] = $item;
        }
    }
    @endphp

    @php
        $isFirst = true;
    @endphp

    @foreach ($groupedByModule as $tag => $partModule)
        <div class="tab-content mt-3" id="myTabContent">
            <div class="tab-pane fade {{ $isFirst ? 'show active' : '' }}" id="{{ $tag }}" role="tabpanel">
                <section class="cust-form-sec relative shadow">
                    <h3 class="text-center">Get a Quote</h3>
                    <div class="cust-discount">
                        <img src="{{ asset('assets/images/10-discount.png') }}" alt="cust-discount" class="cust-img">
                    </div>
                    <div class="row" id="product-form">
                        @foreach ($partModule as $partCate => $module)
                            <div class="{{ count($partModule) > 1 ? 'col-lg-6 col-sm-12' : 'col-lg-12 col-sm-12' }}">
                                <h4 class="text-primary text-center">{{ $partCate }}</h4>
                                <div class="my-4 mb-2">
                                    <div class="select-product">
                                        <div class="table-responsive">
                                            <table class="table text-center">
                                                <thead>
                                                    <tr>
                                                        <th class="fw-bold" style="width: 0%;"></th>
                                                        <th class="fw-bold" style="width: 25%;">Part Number</th>
                                                        <th class="fw-bold" style="width: 25%;">Upgrade To</th>
                                                        <th class="fw-bold" style="width: 25%;">Renishaw List Price</th>
                                                        <th class="fw-bold" style="width: 25%;">Our Discounted Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($module as $key => $part)
                                                        @php
                                                            $part['probe_id'] = $probe->id;
                                                            $part['probe'] = $probe->name;
                                                            $part['probe_img'] = asset('assets/admin/probes/' . $probe->image);
                                                            $part['probe_link'] = route('probes', [
                                                                'category' => $probe->category->slug,
                                                                'probes' => $probe->slug,
                                                            ]);
                                                            $partDetails = json_encode($part);
                                                            $id = 'part-' . $part['id'] . '-probe-' . $part['probe_id'];

                                                            // Get cart items from session
                                                            $cartItems = Session::get('cart', []);

                                                            // Check if the current part is in the cart
                                                            $isPartInCart = false;
                                                            foreach ($cartItems as $cartItem) {
                                                                foreach ($cartItem['parts'] as $cartPart) {
                                                                    if (
                                                                        $cartPart['name'] === $part['name'] &&
                                                                        $cartItem['name'] === $part['probe']
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
                                                                <label for="{{ $id }}">{{ $part['upgrade_to'] ?? '-' }}</label>
                                                            </td>
                                                            <td>
                                                                <label for="{{ $id }}">${{ number_format($part['price'], 2) }}</label>
                                                            </td>
                                                            <td>
                                                                <label id="discounted-price-{{ $id }}" for="{{ $id }}">
                                                                    ${{ number_format($part['price'] - ($part['price'] * ($part['discount'] ?? 0)) / 100, 2) }}
                                                                </label>
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="6">---- No parts are currently available ----</td>
                                                        </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="text-center">
                            <img id="AddToCart" class="AddToCart" src="{{ asset('assets/images/add-to-cart.png') }}" alt="Add to cart"
                                style="width: 15%; cursor: pointer;">
                        </div>
                    </div>
                </section>
            </div>
        </div>
        @php
            $isFirst = false;
        @endphp
    @endforeach
@endif

@section('script')
<script>
    $(document).ready(function () {
        // Handle the Add to Cart button click
        $('.AddToCart').on('click', function () {
            let selectedParts = [];
            let removedParts = [];

            // Loop through all checked checkboxes and add to selectedParts
            $('input[type="checkbox"]:checked').each(function () {
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
            $('input[type="checkbox"]:not(:checked)').each(function () {
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
                    remove_parts: removedParts,
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
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
                error: function (error) {
                    console.error(error);
                    alert('Failed to update the cart.');
                }
            });
        });
    });
</script>
@endsection
