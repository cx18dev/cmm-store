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
                    }
                },
                highlight: function(element) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element) {
                    $(element).removeClass('is-invalid');
                },
                submitHandler: function(form) {
                    // Collect selected products' details
                    var selectedProducts = [];
                    $('input[type="checkbox"]:checked').each(function() {
                        var row = $(this).closest('tr');
                        var partNumber = row.find('td:eq(1) label').text();
                        var listPrice = row.find('td:eq(2) label').text();
                        var discountedPrice = row.find('td:eq(3) label').text();

                        selectedProducts.push({
                            Part_Number: partNumber,
                            Renishaw_List_Price: listPrice,
                            Our_Discounted_Price: discountedPrice
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
