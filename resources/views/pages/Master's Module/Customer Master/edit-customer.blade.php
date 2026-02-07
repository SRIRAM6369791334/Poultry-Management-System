@extends('layouts.app')
@section('content')
  <main class="c-main-content">
        <div class="c-breadcrumb"></div>
        <div class="page-header">
            <h1>Edit Customer</h1>
            <p class="page-subtitle">Update customer information</p>
        </div>
        <div class="c-card">
            <form id="editCustomerForm" data-validate-form>
                <div class="l-grid l-grid-2 l-gap-4">
                    <div class="c-form-group"><label class="c-label c-label-required">Customer Name</label><input
                            type="text" class="c-input" value="Rajesh Kumar" data-validate="required"></div>
                    <div class="c-form-group"><label class="c-label c-label-required">Phone Number</label><input
                            type="tel" class="c-input" value="+91 98765 43210" data-validate="required|phone"></div>
                    <div class="c-form-group" style="grid-column: 1 / -1;"><label
                            class="c-label c-label-required">Address</label><textarea class="c-textarea"
                            data-validate="required">Mumbai, Maharashtra</textarea></div>
                    <div class="c-form-group"><label class="c-label">GST Number</label><input type="text"
                            class="c-input" value="GSTIN1234567" data-validate="gst"></div>
                    <div class="c-form-group"><label class="c-label c-label-required">Customer Type</label><select
                            class="c-select" data-validate="required">
                            <option value="retail" selected>Retail</option>
                            <option value="wholesale">Wholesale</option>
                        </select></div>
                    <div class="c-form-group"><label class="c-label c-label-required">Route/Area</label><select
                            class="c-select" data-validate="required">
                            <option value="route-a" selected>Route A</option>
                            <option value="route-b">Route B</option>
                            <option value="route-c">Route C</option>
                        </select></div>
                    <div class="c-form-group"><label class="c-label">Email</label><input type="email" class="c-input"
                            value="rajesh@example.com" data-validate="email"></div>
                </div>
                <div class="c-card-footer l-flex l-gap-3">
                    <button type="submit" class="c-btn c-btn-primary">Update Customer</button>
                    <a href="{{ route('customer.list') }}" class="c-btn c-btn-ghost">Cancel</a>
                </div>
            </form>
        </div>
    </main>
    <script>Navigation.generateBreadcrumb(['Masters', 'Customer Master', 'Edit']); document.getElementById('editCustomerForm').addEventListener('submit', e => { e.preventDefault(); if (Validator.validateForm('editCustomerForm')) { PMS.toast.success('Customer updated!'); setTimeout(() => window.location.href = 'customer-list', 1500); } });</script>
@endsection