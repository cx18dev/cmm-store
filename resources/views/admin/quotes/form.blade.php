@extends('layouts.app')

@section('title', 'Category | Admin CMM Store')

@section('style')
    <style>
        .editor-container {
            height: 100vh;
        }

        textarea.tinymce-editor {
            height: 100%;
        }
    </style>
@endsection

@section('content')

    <div class="col-lg-12 mb-4 order-0">

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show border-2" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show border-2" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card">
            <div class="card-body">
                <div class="row g-2">
                    <div class="col-md-6 mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{ $quote->name }}"
                            disabled>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="name" class="form-label">Company Name</label>
                        <input type="text" id="company_name" name="company_name" class="form-control" value="{{ $quote->company_name }}"
                            disabled>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" id="email" name="email" class="form-control" value="{{ $quote->email }}"
                            disabled>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" id="phone" name="phone" class="form-control" value="{{ $quote->phone }}"
                            disabled>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" name="message" id="message" cols="30" rows="5" disabled>{{ $quote->message }}</textarea>
                    </div>
                </div>

                <div class="table-responsive text-nowrap">
                    <label for="probes" class="form-label">Probe details</label>
                    <table class="datatables-basic table table-bordered table-hover">
                        <thead class="table-light text-center">
                            <tr>
                                <th>#</th>
                                <th>Probe</th>
                                <th>Part Number</th>
                                <th>Discount</th>
                                <th>Quantity</th>
                                <th>Renishaw List Price</th>
                                <th>Our Discounted Price</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @php
                                $totalRenishawPrice = 0;
                                $totalDiscountedPrice = 0;
                                $itemCounter = 1;
                                $totalItems = 0;
                                $data = json_decode($quote->products, true);
                            @endphp

                            @foreach ($data as $productName => $product)
                                @foreach ($product['parts'] as $key => $part)
                                    @php
                                        $quantity = $part['quantity'];
                                        $price = $part['price'];
                                        $discount = rtrim($part['discount'], '%');
                                        $renishawPrice = $price * $quantity;
                                        $discountedPrice = $renishawPrice - $renishawPrice * ($discount / 100);

                                        $totalRenishawPrice += $renishawPrice;
                                        $totalDiscountedPrice += $discountedPrice;
                                    @endphp
                                    <tr>
                                        <td>{{ $itemCounter }}</td>
                                        <td class="text-start">{{ $productName }}</td>
                                        <td>{{ $part['name'] }}</td>
                                        <td>{{ $part['discount'] }}</td>
                                        <td>{{ $quantity }}</td>
                                        <td>${{ number_format($renishawPrice, 2) }}</td>
                                        <td>${{ number_format($discountedPrice, 2) }}</td>
                                    </tr>
                                    @php
                                        $itemCounter++;
                                        $totalItems += $quantity;
                                    @endphp
                                @endforeach
                            @endforeach

                            <tr>
                                <td colspan="4">Total:</td>
                                <td>{{ number_format($totalItems) }} Items</td>
                                <td class="fw-bold text-dark">${{ number_format($totalRenishawPrice, 2) }}</td>
                                <td class="fw-bold text-success">${{ number_format($totalDiscountedPrice, 2) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-between">
                <a class="btn btn-outline-secondary" href="{{ route('admin.quotes') }}">Back</a>
                <a class="btn btn-outline-danger" href="{{ route('admin.quote.destroy', $quote->id) }}"
                    id="delete-{{ $quote->id }}">Delete</a>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        $(document).ready(function() {
            let deleteUrl = '';
            let restoreUrl = '';

            $(document).on('click', 'a[id^="delete-"]', function(e) {
                e.preventDefault();

                deleteUrl = $(this).attr('href');

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: deleteUrl,
                            type: 'DELETE',
                            data: {
                                _token: '{{ csrf_token() }}'
                            },
                            success: function(result) {
                                Swal.fire(
                                    'Deleted!',
                                    'Your record has been deleted.',
                                    'success'
                                ).then(() => {
                                    window.location.href = `{{ route('admin.quotes') }}`;
                                });
                            },
                            error: function(xhr) {
                                Swal.fire(
                                    'Error!',
                                    'An error occurred while deleting the record.',
                                    'error'
                                );
                            }
                        });
                    }
                });
            });
        });
    </script>
@endsection
