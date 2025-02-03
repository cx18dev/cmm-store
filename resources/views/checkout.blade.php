@extends('layouts.guest')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar with multi-level collapsible menu -->
            <div class="col-lg-2 col-md-3 cust-sidebar py-3 text-dark">
                @include('layouts.partials.categories-menu')
            </div>

            <div class="col-lg-10 col-md-9">
                <div class="Probe-cart">
                    <div class="container">
                        <h2 class="mb-4 text-center">CMM Probe Checkout</h2>
                        <table class="table table-bordered shadow-sm">
                            <thead class="table-light text-center">
                                <tr>
                                    <th scope="col" style="width: 20%;">Probe</th>
                                    <th scope="col" style="width: 20%;">Parts</th>
                                    <th scope="col" style="width: 13%;">Quantity</th>
                                    <th scope="col" style="width: 15%;">Price</th>
                                    <th scope="col" style="width: 10%;">Discount</th>
                                    <th scope="col" style="width: 15%;">Total</th>
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
                                            <td>{{ $part['quantity'] }}</td>
                                            <td>${{ number_format($part['price'], 2) }}</td>
                                            <td>{{ $part['discount'] }}</td>
                                            <td>${{ number_format($discountAmount, 2) }}</td>
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

                        <section class="cust-form-sec relative shadow">
                            <h3 class="text-center">Get a Quote</h3>
                            <div class="cust-discount">
                                <img src="{{ asset('assets/images/discount.png') }}" alt="cust-discount" class="cust-img">
                            </div>
                            <div class="container">
                                <div class="row d-flex align-items-center">
                                    <!-- Form Section -->
                                    <form class="col-lg-7" id="product-form" method="POST">
                                        @csrf
                                        <input type="hidden" name="products" value="{{ json_encode($cartItems) }}">
                                        <div class="form-container">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="name" class="form-label fw-bold">Name:</label>
                                                    <input type="text" class="form-control" id="name" name="name"
                                                        placeholder="Enter Name">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="company_name" class="form-label fw-bold">Company Name:</label>
                                                    <input type="text" class="form-control" id="company_name" name="company_name"
                                                        placeholder="Enter Company Name">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="email" class="form-label fw-bold">Email:</label>
                                                    <input type="email" class="form-control" id="email" name="email"
                                                        placeholder="Enter Email">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="phone" class="form-label fw-bold">Phone:</label>
                                                    <input type="tel" class="form-control" id="phone" name="phone"
                                                        placeholder="Enter Phone">
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <label for="message" class="form-label fw-bold">Message:</label>
                                                    <textarea class="form-control" id="message" name="message" placeholder="Enter Message" rows="3"></textarea>
                                                </div>
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary w-100" id="submit-btn">
                                                        <span class="spinner-border spinner-border-sm me-2 d-none"
                                                            id="spinner" role="status" aria-hidden="true"></span>
                                                        Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <!-- Cart Summary Section -->
                                    @if ($cartItems)
                                        <div class="col-lg-5">
                                            <div class="card cart-total shadow-sm mt-lg-0 mt-4">
                                                <div class="card-header text-center">
                                                    <h5 class="fw-bold">Cart Summary</h5>
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
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>

                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @section('script')
        <script>
            $(document).ready(function() {
                $("#product-form").validate({
                    rules: {
                        name: {
                            required: true,
                            minlength: 3
                        },
                        company_name: {
                            required: true,
                        },
                        email: {
                            required: true,
                            email: true
                        },
                        phone: {
                            required: true,
                            number: true
                        },
                        message: {
                            required: true,
                            minlength: 10
                        },
                    },
                    messages: {
                        name: {
                            required: "Please enter your name",
                            minlength: "Your name must be at least 3 characters long"
                        },
                        company_name: {
                            required: "Please enter company name",
                        },
                        email: {
                            required: "Please enter your email",
                            email: "Please enter a valid email address"
                        },
                        phone: {
                            minlength: "Please enter a valid phone number"
                        },
                        message: {
                            required: "Please enter some Message",
                            minlength: "Message must be at least 10 characters long"
                        },
                    },
                    errorPlacement: function(error, element) {
                        error.insertAfter(element);
                    },
                    highlight: function(element) {
                        $(element).addClass('is-invalid');
                    },
                    unhighlight: function(element) {
                        $(element).removeClass('is-invalid');
                    },
                    submitHandler: function(form) {
                        // Serialize the form data for the AJAX request
                        let formData = $(form).serialize();

                        // Perform AJAX request after form is validated
                        $.ajax({
                            url: "{{ route('submit.inquiry') }}",
                            method: 'POST',
                            data: formData,
                            beforeSend: function() {
                                $('#submit-btn').prop('disabled', true);
                                $('#spinner').removeClass('d-none');
                            },
                            success: function(response) {
                                if (response.status) {
                                    $('form').find('.is-invalid').removeClass('is-invalid');
                                    $('form').find('.text-danger').remove();
                                    $('form')[0].reset();

                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Success',
                                        text: response.message,
                                        confirmButtonText: 'OK'
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            window.location.href =
                                                "{{ route('cart') }}";
                                        }
                                    });
                                }
                            },
                            error: function(xhr) {
                                if (xhr.status === 422) {
                                    // Parse validation errors
                                    let errors = xhr.responseJSON.errors;

                                    // Clear old errors
                                    $('form').find('.is-invalid').removeClass('is-invalid');
                                    $('form').find('.text-danger').remove();

                                    // Display new errors and apply is-invalid class
                                    $.each(errors, function(field, messages) {
                                        let inputField = $('[name="' + field + '"]');
                                        inputField.addClass('is-invalid');
                                        inputField.after('<div class="text-danger">' +
                                            messages[0] + '</div>'
                                        );
                                    });
                                } else {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Error',
                                        text: 'Error submitting form!',
                                        confirmButtonText: 'OK'
                                    });
                                }
                            },
                        });
                    }
                });
            });
        </script>
    @endsection

@endsection
