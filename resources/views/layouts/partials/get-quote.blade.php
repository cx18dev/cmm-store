<section class="cust-form-sec relative shadow">
    <h3 class="text-center">Get a Quote</h3>
    <div class="cust-discount">
        <img src="{{ asset('assets/images/discount.png') }}" alt="cust-discount" class="cust-img">
    </div>
    <form id="product-form" method="POST">
        <div class="my-4 select-product">
            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th class="fw-bold" style="width: 5%;"></th>
                            <th class="fw-bold" style="width: 30%;">Part Number</th>
                            <th class="fw-bold" style="width: 30%;">Renishaw List Price</th>
                            <th class="fw-bold" style="width: 30%;">Our Discounted Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $parts = [
                                ['part_number' => 'A-5863-11**', 'price' => 22174],
                                ['part_number' => 'A-5863-19**', 'price' => 22174],
                                ['part_number' => 'A-5863-4000', 'price' => 25149],
                                ['part_number' => 'A-5863-5000', 'price' => 22174],
                                ['part_number' => 'A-5863-6000', 'price' => 25149],
                                ['part_number' => 'A-5863-7000', 'price' => 28416],
                                ['part_number' => 'A-1026-0320 (AM1)', 'price' => 897],
                                ['part_number' => 'A-1026-0080 (AM1)', 'price' => 897],
                                ['part_number' => 'A-5863-0100', 'price' => 3409],
                                ['part_number' => 'A-5863-0200', 'price' => 4310],
                                ['part_number' => 'A-5882-0010', 'price' => 880],
                            ];
                        @endphp

                        @foreach ($parts as $part)
                            <tr>
                                <td>
                                    <input class="form-check-input" type="checkbox" id="{{ $part['part_number'] }}">
                                </td>
                                <td>
                                    <label for="{{ $part['part_number'] }}">{{ $part['part_number'] }}</label>
                                </td>
                                <td>
                                    <label for="{{ $part['part_number'] }}">${{ number_format($part['price'], 2) }}</label>
                                </td>
                                <td>
                                    <label for="{{ $part['part_number'] }}">${{ number_format($part['price'] * 0.8, 2) }}</label>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    {{-- <thead>
                        <tr>
                            <th class="fw-bold" style="width: 5%;"></th>
                            <th class="fw-bold" style="width: 30%;"></th>
                            <th class="fw-bold" style="width: 30%;">Total Price:<br>$1,23,456.00</th>
                            <th class="fw-bold" style="width: 30%;">Total Price:<br>$1,23,456.00</th>
                        </tr>
                    </thead> --}}
                </table>
            </div>
        </div>

        <div class="row">
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
        </div>
    </form>
</section>
