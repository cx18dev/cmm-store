@extends('layouts.guest')

@section('content')
    <div class="marketplace-section container my-5">
        <div class="market-content">
            <h2 class="text-center mb-5">Request Quote</h3>
        </div>
        <section class="cust-form-sec relative shadow mt-0">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <!-- Form Section -->
                    <form id="request-quote-form" method="POST">
                        @csrf
                        <div class="form-container">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label fw-bold">Name:</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label fw-bold">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="phone" class="form-label fw-bold">Phone:</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter Phone">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="company_name" class="form-label fw-bold">Company Name:</label>
                                    <input type="text" class="form-control" id="company_name" name="company_name"
                                        placeholder="Enter Company Name">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="cmm_name" class="form-label fw-bold">CMM Name:</label>
                                    <input type="text" class="form-control" id="cmm_name" name="cmm_name"
                                        placeholder="Enter Company Name">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="stock_number" class="form-label fw-bold">CMM Stock Number:</label>
                                    <input type="text" class="form-control" id="stock_number" name="stock_number"
                                        placeholder="Enter CMM Stock Number">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="information" class="form-label fw-bold">Additional Information:</label>
                                    <textarea class="form-control" id="information" name="information" placeholder="Enter Message"
                                        rows="3"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="button" class="btn btn-primary" id="submit-btn">
                                        <span class="spinner-border spinner-border-sm me-2 d-none" id="spinner" role="status"
                                            aria-hidden="true"></span>
                                        SEND
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
