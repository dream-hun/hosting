@extends('layouts.front')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title">Domain Contact Information</h2>
                        <hr>
                        <form id="contactForm" method="POST" action="#">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Organization</label>
                                    <input type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Street Address</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">City</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Province/State</label>
                                    <input type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Postal Code</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Country</label>
                                    <select class="form-select" required>
                                        <option value="">Select a country</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Phone</label>
                                <input type="tel" class="form-control" required>
                                <div class="form-text">Include country code (e.g., +1.2025551234)</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Continue to Domain Registration</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card shadow-sm sticky-top">
                    <div class="card-body">
                        <h2 class="card-title">Cart Summary</h2>
                        <ul class="list-group mb-3">
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                    <h6 class="my-0">Example Domain</h6>
                                    <small class="text-muted">1 year</small>
                                </div>
                                <span class="text-muted">$10.00</span>
                            </li>
                        </ul>
                        <div class="d-flex justify-content-between">
                            <strong>Total</strong>
                            <span>$10.00</span>
                        </div>
                        <a href="#" class="btn btn-primary w-100 mt-3">← Back to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
