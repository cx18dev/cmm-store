@extends('layouts.guest')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar with multi-level collapsible menu -->
            <div class="col-md-2 cust-sidebar p-3 text-dark">
                @include('layouts.partials.categories-menu')
            </div>

            <div class="col-md-10">
                <div class="Probe-cart">
                    <div class="container">
                        <h2 class="mb-4 text-center">CMM Probe Cart</h2>
                        <table class="table table-bordered shadow-sm">
                            <thead class="table-light text-center">
                                <tr>
                                    <th scope="col" style="width: 20%;">Probe</th>
                                    <th scope="col" style="width: 20%;">Parts</th>
                                    <th scope="col" style="width: 13%;">Quantity</th>
                                    <th scope="col" style="width: 15%;">Price</th>
                                    <th scope="col" style="width: 10%;">Discount</th>
                                    <th scope="col" style="width: 15%;">Total</th>
                                    <th scope="col" style="width: 7%;">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $subtotal = 0;
                                    $totalDiscount = 0;
                                    $count = 1;
                                    $cartItems = $cartItems ?? [];
                                @endphp
                                @forelse ($cartItems as $probe)
                                    <!-- Probe Row -->
                                    <tr>
                                        <td colspan="7">
                                            <div class="d-flex align-items-center">
                                                <img src="{{ $probe['image'] }}" alt="Probe Image" class="probe-img me-3">
                                                <strong><a href="{{ $probe['probe_link'] }}"
                                                        target="_blank">{{ $probe['name'] }}</a></strong>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Parts Rows -->
                                    @foreach ($probe['parts'] as $part)
                                        @php
                                            $discount = str_replace('%', '', $part['discount']);
                                            $total = $part['quantity'] * $part['price'];
                                            $subtotal += $total;

                                            // Calculate the discount applied to this part
                                            $discountAmount =
                                                $part['quantity'] * ($part['price'] * (1 - $discount / 100));
                                            $totalDiscount += $discountAmount;
                                        @endphp
                                        <tr class="text-center">
                                            <td class="text-end">{{ $count++ }}</td>
                                            <td>{{ $part['name'] }}</td>
                                            <td class="text-center">
                                                <div class="input-group">
                                                    <button class="btn btn-sm btn-outline-secondary minus-btn"
                                                        type="button" data-probe="{{ $probe['name'] }}"
                                                        data-part="{{ $part['name'] }}">
                                                        -
                                                    </button>
                                                    <input type="number"
                                                        class="form-control form-control-sm text-center part-quantity"
                                                        value="{{ $part['quantity'] }}" min="1"
                                                        data-probe="{{ $probe['name'] }}" data-part="{{ $part['name'] }}">
                                                    <button class="btn btn-sm btn-outline-secondary plus-btn" type="button"
                                                        data-probe="{{ $probe['name'] }}" data-part="{{ $part['name'] }}">
                                                        +
                                                    </button>
                                                </div>
                                            </td>
                                            <td>${{ number_format($part['price'], 2) }}</td>
                                            <td>{{ $part['discount'] }}</td>
                                            <td>${{ number_format($discountAmount, 2) }}</td>
                                            <td>
                                                <button class="btn btn-outline-danger btn-sm remove-part"
                                                    data-probe="{{ $probe['name'] }}" data-part="{{ $part['name'] }}">
                                                    <i class="fa-duotone fa-solid fa-trash-xmark"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">
                                            <span>--- Empty Cart ---</span>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        @if ($cartItems)
                            <!-- Cart Summary -->
                            <div class="row">
                                <div class="offset-lg-7 col-lg-5">
                                    <div class="card cart-total mt-4 shadow-sm p-0">
                                        <div class="card-header">
                                            <div class="text-center">
                                                <h5 class="fw-bold">Cart Summary</h5>
                                            </div>
                                        </div>
                                        @php
                                            $totalItems = 0;
                                            foreach ($cartItems as $probe) {
                                                foreach ($probe['parts'] as $part) {
                                                    $totalItems += $part['quantity'];
                                                }
                                            }
                                        @endphp
                                        <div class="card-body">
                                            <p class="d-flex justify-content-between">
                                                <span>Total Items:</span>
                                                <span>{{ $totalItems }} items</span>
                                            </p>
                                            <p class="d-flex justify-content-between">
                                                <span>Subtotal:</span>
                                                <span>${{ number_format($subtotal, 2) }}</span>
                                            </p>
                                            <p class="d-flex justify-content-between mb-0">
                                                <span>Discount:</span>
                                                <span>-${{ number_format($subtotal - $totalDiscount, 2) }}</span>
                                            </p>
                                        </div>
                                        <div class="card-footer py-3">
                                            <p class="d-flex justify-content-between fw-bold">
                                                <span>Total:</span>
                                                <span>${{ number_format($totalDiscount, 2) }}</span>
                                            </p>
                                            <form method="POST" action="{{ route('checkout') }}" class="checkout-btn">
                                                @csrf
                                                <input type="hidden" name="cartItems" value="{{ json_encode($cartItems) }}">
                                                <button type="submit" class="btn btn-primary">
                                                    Proceed to Checkout
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>

    @section('script')
        <script>
            $(document).ready(function() {
                $('.input-group').each(function() {
                    const group = $(this);
                    const inputField = group.find('.part-quantity');

                    group.find('.minus-btn').on('click', function() {
                        let currentValue = parseInt(inputField.val());
                        let minValue = parseInt(inputField.attr('min')) || 0;
                        let probe = $(this).data('probe');
                        let part = $(this).data('part');

                        if (currentValue > minValue) {
                            inputField.val(currentValue - 1);
                            updateCart(probe, part, currentValue - 1);
                        }
                    });

                    group.find('.plus-btn').on('click', function() {
                        let currentValue = parseInt(inputField.val());
                        let probe = $(this).data('probe');
                        let part = $(this).data('part');

                        inputField.val(currentValue + 1);
                        updateCart(probe, part, currentValue + 1);
                    });
                });

                function updateCart(probe, part, quantity) {
                    $.ajax({
                        url: '{{ route("cart.update") }}',
                        method: 'POST',
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content'),
                            probe: probe,
                            part: part,
                            quantity: quantity,
                        },
                        success: function(response) {
                            if (response.status) {
                                location.reload();
                            } else {
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Warning',
                                    text: response.message,
                                    confirmButtonText: 'OK'
                                });
                            }
                        },
                        error: function(xhr, status, error) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: error,
                                confirmButtonText: 'OK'
                            });
                        }
                    });
                }


                $('.remove-part').on('click', function() {
                    let probeName = $(this).data('probe');
                    let partName = $(this).data('part');

                    $.ajax({
                        url: '{{ route('remove.cart') }}',
                        method: 'POST',
                        data: {
                            probe: probeName,
                            part: partName,
                            _token: $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            if (response.status) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success',
                                    text: 'Part removed successfully!',
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
                                    text: 'Failed to remove part.',
                                    confirmButtonText: 'OK'
                                });
                            }
                        },
                        error: function(error) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: error,
                                confirmButtonText: 'OK'
                            });
                        }
                    });
                });
            });
        </script>
    @endsection

@endsection
