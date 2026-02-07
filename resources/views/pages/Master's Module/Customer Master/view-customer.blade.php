@extends('layouts.app')
@section('content')
    <main class="c-main-content">
        <div class="c-breadcrumb"></div>
        <div class="page-header l-flex-between">
            <div>
                <h1>Customer Details</h1>
                <p class="page-subtitle">View complete customer information</p>
            </div>
            <div class="l-flex l-gap-3"><a href="{{ route('customer.edit', $id) }}" class="c-btn c-btn-primary">Edit</a><a
                    href="{{ route('customer.delete', $id) }}" class="c-btn c-btn-danger">Delete</a></div>
        </div>
        <div class="l-grid l-grid-2 l-gap-6">
            <div class="c-card">
                <div class="c-card-header">
                    <h3 class="c-card-title">Basic Information</h3>
                </div>
                <div class="c-card-body">
                    <div class="l-grid l-grid-2 l-gap-4">
                        <div><label class="c-label">Customer ID</label>
                            <p class="u-text-white u-fw-medium">#C001</p>
                        </div>
                        <div><label class="c-label">Customer Name</label>
                            <p class="u-text-white u-fw-medium">Rajesh Kumar</p>
                        </div>
                        <div><label class="c-label">Phone Number</label>
                            <p class="u-text-white u-fw-medium">+91 98765 43210</p>
                        </div>
                        <div><label class="c-label">Email</label>
                            <p class="u-text-white u-fw-medium">rajesh@example.com</p>
                        </div>
                        <div style="grid-column: 1 / -1;"><label class="c-label">Address</label>
                            <p class="u-text-white u-fw-medium">Mumbai, Maharashtra, India</p>
                        </div>
                        <div><label class="c-label">Customer Type</label><span class="c-badge c-badge-primary">Retail</span>
                        </div>
                        <div><label class="c-label">Route/Area</label>
                            <p class="u-text-white u-fw-medium">Route A</p>
                        </div>
                        <div><label class="c-label">GST Number</label>
                            <p class="u-text-white u-fw-medium">GSTIN1234567</p>
                        </div>
                        <div><label class="c-label">Member Since</label>
                            <p class="u-text-white u-fw-medium">Jan 15, 2024</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="c-card">
                <div class="c-card-header">
                    <h3 class="c-card-title">Account Summary</h3>
                </div>
                <div class="c-card-body">
                    <div class="l-grid l-grid-2 l-gap-4">
                        <div><label class="c-label">Total Purchases</label>
                            <p class="u-text-white u-fw-medium u-fs-xl">₹ 1,25,450</p>
                        </div>
                        <div><label class="c-label">Total Invoices</label>
                            <p class="u-text-white u-fw-medium u-fs-xl">42</p>
                        </div>
                        <div><label class="c-label">Pending Amount</label>
                            <p class="u-text-white u-fw-medium u-fs-xl u-text-warning">₹ 12,500</p>
                        </div>
                        <div><label class="c-label">Last Purchase</label>
                            <p class="u-text-white u-fw-medium">Feb 5, 2026</p>
                        </div>
                    </div>
                    <div class="c-card-footer l-flex l-gap-3"><a href="{{ route('customer.billing-history', $id) }}"
                            class="c-btn c-btn-sm c-btn-primary">View Billing History</a><a href="{{ route('customer.payment-history', $id) }}"
                            class="c-btn c-btn-sm c-btn-secondary">View
                            Payments</a></div>
                </div>
            </div>
        </div>
    </main>
    <script>Navigation.generateBreadcrumb(['Masters', 'Customer Master', 'View Details']);</script>
@endsection