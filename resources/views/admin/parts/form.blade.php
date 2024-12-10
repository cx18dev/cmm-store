@extends('layouts.app')

@section('title', 'Parts | Admin CMM Store')

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
            @if (isset($part->id))
                @php
                    $action = route('admin.parts.update', $part->id);
                @endphp
            @else
                @php
                    $action = route('admin.parts.store');
                @endphp
            @endif
            <form action="{{ $action }}" method="POST" enctype="multipart/form-data" id="partsForm">
                @csrf
                @if (isset($part->id))
                    @method('PUT')
                @endif

                <div class="card-body">
                    <div class="row g-2">
                        <div class="col-md-12 mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" id="name" name="name" class="form-control"
                                placeholder="Enter Name" value="{{ old('name', $part->name ?? '') }}">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3 select2-primary">
                            <label for="probe_id" class="form-label">Probes</label>
                            <select class="select2 select2-primary form-select" name="probe_id[]" id="probe_id" multiple>
                                <option value="">Select Probes</option>
                                @foreach ($probes as $probe)
                                    <option value="{{ $probe->id }}" @if (in_array($probe->id, old('probe_id', isset($part->probe_id) ? explode(',', $part->probe_id) : []))) selected @endif>
                                        {{ $probe->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('probe_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3 select2-primary">
                            <label for="upgrade_to" class="form-label">Upgrade To</label>
                            <input type="text" id="upgrade_to" name="upgrade_to" class="form-control"
                                placeholder="Enter Upgrade To" value="{{ old('upgrade_to', $part->upgrade_to ?? '') }}">
                        </div>
                        <div class="col-md-12 mb-6">
                            <label for="title" class="form-label">Title</label>
                            <textarea id="title" name="title" class="form-control" rows="3" placeholder="Enter Title">{{ old('title', $part->title ?? '') }}</textarea>
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row g-2 mt-3">
                        <div class="col-md-4">
                            <label for="price" class="form-label">Price</label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" id="price" name="price" class="form-control"
                                    placeholder="Enter Price" value="{{ old('price', $part->price ?? '') }}">
                            </div>
                            @error('price')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="discount" class="form-label">Discount</label>
                            <div class="input-group">
                                <input type="text" id="discount" name="discount" class="form-control"
                                    placeholder="Enter Discount" value="{{ old('discount', $part->discount ?? '') }}">
                                <span class="input-group-text">%</span>
                            </div>
                            @error('discount')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="final_price" class="form-label">Final Price</label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" id="final_price" name="final_price" class="form-control" disabled
                                    placeholder="00.00"
                                    value="{{ isset($part->discount) ? $part->price * (1 - $part->discount / 100) : '' }}">
                            </div>
                        </div>
                    </div>
                    <div class="row g-2 mt-3">
                        <div class="col-md-3 mb-3">
                            <label for="status" class="form-label">Status</label>
                            <div class="form-check">
                                <input type="checkbox" id="status" name="status" class="form-check-input" value="1"
                                    {{ old('status', $part->status ?? 0) == 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="status">Active</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <a href="{{ route('admin.parts.index') }}" class="btn btn-outline-secondary">Close</a>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('script')
    <script>
        $(document).ready(function() {
            // Function to calculate the discounted price
            function calculateDiscountedPrice() {
                var price = parseFloat($('#price').val());
                var discount = parseFloat($('#discount').val());

                // Ensure that both values are numbers and greater than 0
                if (!isNaN(price) && price > 0 && !isNaN(discount) && discount >= 0) {
                    // Calculate the discounted price
                    var discountedPrice = price - (price * (discount / 100));

                    // Update the final price field with the calculated value
                    $('#final_price').val(discountedPrice.toFixed(2)); // Format to 2 decimal places
                } else {
                    $('#final_price').val('00.00');
                }
            }

            // Event listeners for the price and discount fields
            $('#price, #discount').on('keyup', function() {
                calculateDiscountedPrice();
            });


            // Validate the discount field and limit to two digits
            $('#discount').on('input', function() {
                var value = $(this).val();

                if (value.length > 2) {
                    $(this).val(value.slice(0, 2));
                }

                if (parseInt(value) >= 100) {
                    $(this).val(100);
                }
            });

            $("form").validate({
                rules: {
                    name: {
                        required: true,
                    },
                    "probe_id[]": {
                        required: true,
                    },
                    price: {
                        required: true,
                        number: true,
                        min: 0
                    },
                    discount: {
                        required: true,
                        number: true,
                        min: 0,
                        max: 100,
                    }
                },
                messages: {
                    "probe_id[]": {
                        required: "Please select at least one probe."
                    },
                    price: {
                        required: "Please enter the price",
                        number: "Please enter a valid number",
                        min: "Price cannot be less than 0"
                    },
                    discount: {
                        required: "Please enter the discount",
                        number: "Please enter a valid number",
                        min: "Discount cannot be less than 0",
                        max: "Discount cannot exceed 100"
                    }
                },
                errorPlacement: function(error, element) {
                    if (element.hasClass('select2-hidden-accessible')) {
                        error.insertAfter(element.next('.select2-container'));
                    } else if (element.closest('.input-group').length) {
                        error.insertAfter(element.closest('.input-group'));
                    } else {
                        error.insertAfter(element);
                    }
                }
            });
        });
    </script>
@endsection
