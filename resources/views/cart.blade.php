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
                        <h2 class="mb-4 text-center">Probe Cart</h2>
                        <table class="table table-bordered shadow-sm">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Parts</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $subtotal = 0;
                                    $totalDiscount = 0;
                                @endphp
                                @foreach ($cartItems as $product)
                                    <!-- Product Row -->
                                    <tr>
                                        <td colspan="5">
                                            <div class="d-flex align-items-center">
                                                <img src="{{ $product['image'] }}" alt="Product Image"
                                                    class="product-img me-3">
                                                <strong>{{ $product['name'] }}</strong>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Parts Rows -->
                                    @foreach ($product['parts'] as $part)
                                        @php
                                            // Apply discount dynamically (using 20% discount)
                                            $discountedPrice = $part['price'] * 0.8;
                                            $total = $part['quantity'] * $discountedPrice;
                                            $subtotal += $total;

                                            // Calculate the discount applied to this part
                                            $discountAmount = $part['quantity'] * ($part['price'] - $discountedPrice);
                                            $totalDiscount += $discountAmount;
                                        @endphp
                                        <tr>
                                            <td></td>
                                            <td>{{ $part['code'] }}</td>
                                            <td>
                                                <input type="number" class="form-control form-control-sm"
                                                    value="{{ $part['quantity'] }}" min="1" style="width: 80px;">
                                            </td>
                                            <td>${{ number_format($discountedPrice, 2) }}</td>
                                            <td>${{ number_format($total, 2) }}</td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>

                        <!-- Cart Summary -->
                        <div class="row">
                            <div class="offset-lg-7 col-lg-5">
                                <div class="card cart-total mt-4 shadow-sm">
                                    <div class="mb-3 text-center">
                                        <h5>Cart Summary</h5>
                                    </div>
                                    @php
                                        $totalItems = 0;
                                        foreach ($cartItems as $product) {
                                            foreach ($product['parts'] as $part) {
                                                $totalItems += $part['quantity'];
                                            }
                                        }
                                    @endphp
                                    <p class="d-flex justify-content-between">
                                        <span>Total Items:</span>
                                        <span>{{ $totalItems }} items</span>
                                    </p>
                                    <p class="d-flex justify-content-between">
                                        <span>Subtotal:</span>
                                        <span>${{ number_format($subtotal, 2) }}</span>
                                    </p>
                                    <p class="d-flex justify-content-between">
                                        <span>Discount:</span>
                                        <span>-${{ number_format($totalDiscount, 2) }}</span>
                                    </p>
                                    <hr>
                                    <p class="d-flex justify-content-between fw-bold">
                                        <span>Total:</span>
                                        <span>${{ number_format($subtotal - $totalDiscount, 2) }}</span>
                                    </p>
                                    <div class="checkout-btn">
                                        <button class="btn btn-primary">Proceed to Checkout</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
