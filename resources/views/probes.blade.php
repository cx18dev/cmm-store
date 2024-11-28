@extends('layouts.guest')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar with multi-level collapsible menu -->
            <div class="col-md-2 cust-sidebar p-3 text-dark">
                @include('layouts.partials.categories-menu')
            </div>

            <!-- Main content area with tabbed layout and table -->
            @yield('category')
            {{-- @include('layouts.partials.category') --}}
        </div>
    </div>
@endsection


@section('script')
    <script>
        $(document).ready(function() {
            $("#product-form").validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 3
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    phone: {
                        required: true,
                        number: true
                    },
                    details: {
                        required: true,
                        minlength: 10
                    },
                    'parts[]': {
                        required: true,
                        minlength: 1
                    }
                },
                messages: {
                    name: {
                        required: "Please enter your name",
                        minlength: "Your name must be at least 3 characters long"
                    },
                    email: {
                        required: "Please enter your email",
                        email: "Please enter a valid email address"
                    },
                    phone: {
                        minlength: "Please enter a valid phone number"
                    },
                    details: {
                        required: "Please enter some details",
                        minlength: "Details must be at least 10 characters long"
                    },
                    'parts[]': {
                        required: "Please select at least one part",
                        minlength: "Please select at least one part"
                    }
                },
                errorPlacement: function(error, element) {
                    if (element.is(':checkbox')) {
                        if (element.closest('.select-product').length) {
                            error.insertAfter(element.closest('.select-product'));
                        } else {
                            error.insertAfter(element);
                        }
                    } else {
                        error.insertAfter(element);
                    }
                },
                highlight: function(element) {
                    if (!$(element).is(':checkbox')) {
                        $(element).addClass('is-invalid');
                    }
                },
                unhighlight: function(element) {
                    if (!$(element).is(':checkbox')) {
                        $(element).removeClass('is-invalid');
                    }
                },
                submitHandler: function(form) {
                    // Collect selected products' details
                    var selectedProducts = [];
                    $('input[type="checkbox"]:checked').each(function() {
                        var row = $(this).closest('tr');
                        var part = row.find('td:eq(1) label').text();
                        var listPrice = row.find('td:eq(2) label').text();
                        var clearPrice = listPrice.replace(/[\$,]/g, '').split('.')[0];
                        var discount = row.find('td:eq(3) label').text();

                        selectedProducts.push({
                            part: part,
                            price: clearPrice,
                            discount: discount,
                        });
                    });

                    // Collect form data
                    var formData = {
                        name: $('#name').val(),
                        email: $('#email').val(),
                        phone: $('#phone').val(),
                        details: $('#details').val(),
                        selectedProducts: selectedProducts,
                        _token: $('meta[name="csrf-token"]').attr('content')
                    };

                    // Perform AJAX request after form is validated
                    $.ajax({
                        url: '{{ route('send.email') }}',
                        method: 'POST',
                        data: formData,
                        beforeSend: function() {
                            $('#submit-btn').prop('disabled', true);
                            $('#spinner').removeClass('d-none');
                        },
                        success: function(response) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Form submitted successfully!',
                                confirmButtonText: 'OK'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.reload();
                                }
                            });
                        },
                        error: function(response) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'Error submitting form!',
                                confirmButtonText: 'OK'
                            });
                        },
                        complete: function() {
                            $('#submit-btn').prop('disabled', false);
                            $('#spinner').addClass('d-none');
                        }
                    });
                }
            });
        });
    </script>
@endsection
