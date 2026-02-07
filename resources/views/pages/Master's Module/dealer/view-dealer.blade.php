@extends('layouts.app')
@section('content')
<main class="c-main-content">
        <div class="c-breadcrumb"></div>
        <div class="page-header l-flex-between">
            <div>
                <h1>Dealer Profile</h1>
            </div>
            <div class="l-flex l-gap-3"><a href="/masters/dealer/edit/{{ $id }}" class="c-btn c-btn-primary">Edit</a><a
                    href="/masters/dealer/delete/{{ $id }}" class="c-btn c-btn-danger">Delete</a></div>
        </div>
        <div class="l-grid l-grid-2 l-gap-6">
            <div class="c-card">
                <div class="c-card-header">
                    <h3 class="c-card-title">Dealer Information</h3>
                </div>
                <div class="c-card-body">
                    <div class="l-grid l-grid-2 l-gap-4">
                        <div><label class="c-label">Firm Name</label>
                            <p class="u-text-white u-fw-medium">Sharma Traders</p>
                        </div>
                        <div><label class="c-label">Contact Person</label>
                            <p class="u-text-white u-fw-medium">Mr. Sharma</p>
                        </div>
                        <div><label class="c-label">Phone</label>
                            <p class="u-text-white u-fw-medium">+91 98765 11111</p>
                        </div>
                        <div><label class="c-label">Email</label>
                            <p class="u-text-white u-fw-medium">sharma@example.com</p>
                        </div>
                        <div><label class="c-label">GST Number</label>
                            <p class="u-text-white u-fw-medium">GSTIN9876543</p>
                        </div>
                        <div><label class="c-label">Location</label>
                            <p class="u-text-white u-fw-medium">Delhi</p>
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
                            <p class="u-text-white u-fw-medium u-fs-xl">₹ 5,45,000</p>
                        </div>
                        <div><label class="c-label">Pending Amount</label>
                            <p class="u-text-white u-fw-medium u-fs-xl u-text-warning">₹ 25,000</p>
                        </div>
                    </div>
                    <div class="c-card-footer l-flex l-gap-3"><a href="/masters/dealer/purchase-orders/{{ $id }}"
                            class="c-btn c-btn-sm c-btn-primary">Purchase Orders</a><a href="/masters/dealer/payments/{{ $id }}"
                            class="c-btn c-btn-sm c-btn-secondary">Payments</a></div>
                </div>
            </div>
        </div>
    </main>
    <script>Navigation.generateBreadcrumb(['Masters', 'Dealer', 'Profile']);</script>
@endsection