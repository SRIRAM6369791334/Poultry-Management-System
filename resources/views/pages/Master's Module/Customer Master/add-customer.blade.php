@extends('layouts.app')
@section('content')
<main class="c-main-content">
        <div class="c-breadcrumb"></div>
        <div class="page-header">
            <h1>Add New Customer</h1>
            <p class="page-subtitle">Create a new customer record</p>
        </div>

        <div class="c-card">
            <form id="addCustomerForm" data-validate-form>
                <div class="l-grid l-grid-2 l-gap-4">
                    <div class="c-form-group">
                        <label class="c-label c-label-required">Customer Name</label>
                        <input type="text" class="c-input" data-validate="required" placeholder="Enter full name">
                    </div>

                    <div class="c-form-group">
                        <label class="c-label c-label-required">Phone Number</label>
                        <input type="tel" class="c-input" data-validate="required|phone"
                            placeholder="10-digit mobile number">
                    </div>

                    <div class="c-form-group" style="grid-column: 1 / -1;">
                        <label class="c-label c-label-required">Address</label>
                        <textarea class="c-textarea" data-validate="required"
                            placeholder="Enter complete address"></textarea>
                    </div>

                    <div class="c-form-group">
                        <label class="c-label">GST Number (Optional)</label>
                        <input type="text" class="c-input" data-validate="gst" placeholder="GST number if applicable">
                    </div>

                    <div class="c-form-group">
                        <label class="c-label c-label-required">Customer Type</label>
                        <select class="c-select" data-validate="required">
                            <option value="">Select Type</option>
                            <option value="retail">Retail</option>
                            <option value="wholesale">Wholesale</option>
                        </select>
                    </div>

                    <div class="c-form-group">
                        <label class="c-label c-label-required">Route/Area</label>
                        <select class="c-select" data-validate="required">
                            <option value="">Select Route</option>
                            <option value="route-a">Route A</option>
                            <option value="route-b">Route B</option>
                            <option value="route-c">Route C</option>
                        </select>
                    </div>

                    <div class="c-form-group">
                        <label class="c-label">Email</label>
                        <input type="email" class="c-input" data-validate="email"
                            placeholder="Email address (optional)">
                    </div>
                </div>

                <div class="c-card-footer l-flex l-gap-3">
                    <button type="submit" class="c-btn c-btn-primary">Save Customer</button>
                    <a href="{{ route('customer.list') }}" class="c-btn c-btn-ghost">Cancel</a>
                </div>
            </form>
        </div>
    </main>
    <script>
        Navigation.generateBreadcrumb(['Masters', 'Customer Master', 'Add']);
        document.getElementById('addCustomerForm').addEventListener('submit', e => {
            e.preventDefault();
            if (Validator.validateForm('addCustomerForm')) {
                PMS.toast.success('Customer added successfully!');
                setTimeout(() => window.location.href = '{{ route('customer.list') }}', 1500);
            }
        });
    </script>
@endsection