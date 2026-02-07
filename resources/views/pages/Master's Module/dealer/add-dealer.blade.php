@extends('layouts.app')
@section('content')
<main class="c-main-content">
        <div class="c-breadcrumb"></div>
        <div class="page-header">
            <h1>Add New Dealer</h1>
            <p class="page-subtitle">Create a new dealer record</p>
        </div>
        <div class="c-card">
            <form id="addDealerForm" data-validate-form>
                <div class="l-grid l-grid-2 l-gap-4">
                    <div class="c-form-group"><label class="c-label c-label-required">Firm Name</label><input
                            type="text" class="c-input" data-validate="required" placeholder="Enter firm/company name">
                    </div>
                    <div class="c-form-group"><label class="c-label c-label-required">Contact Person</label><input
                            type="text" class="c-input" data-validate="required" placeholder="Contact person name">
                    </div>
                    <div class="c-form-group"><label class="c-label c-label-required">Phone Number</label><input
                            type="tel" class="c-input" data-validate="required|phone"
                            placeholder="10-digit mobile number"></div>
                    <div class="c-form-group"><label class="c-label">Email</label><input type="email" class="c-input"
                            data-validate="email" placeholder="Email address"></div>
                    <div class="c-form-group"><label class="c-label c-label-required">GST Number</label><input
                            type="text" class="c-input" data-validate="required|gst" placeholder="GST number"></div>
                    <div class="c-form-group"><label class="c-label c-label-required">Location</label><input type="text"
                            class="c-input" data-validate="required" placeholder="City/State"></div>
                    <div class="c-form-group"><label class="c-label c-label-required">Route</label><select
                            class="c-select" data-validate="required">
                            <option value="">Select Route</option>
                            <option value="route-a">Route A</option>
                            <option value="route-b">Route B</option>
                        </select></div>
                    <div class="c-form-group"><label class="c-label">Credit Limit</label><input type="number"
                            class="c-input" placeholder="Maximum credit allowed"></div>
                </div>
                <div class="c-card-footer l-flex l-gap-3"><button type="submit" class="c-btn c-btn-primary">Save
                        Dealer</button><a href="/masters/dealer/list" class="c-btn c-btn-ghost">Cancel</a></div>
            </form>
        </div>
    </main>
     <script>Navigation.generateBreadcrumb(['Masters', 'Dealer Master', 'Add']); document.getElementById('addDealerForm').addEventListener('submit', e => { e.preventDefault(); if (Validator.validateForm('addDealerForm')) { PMS.toast.success('Dealer added!'); setTimeout(() => window.location.href = 'dealer-list.html', 1500); } });</script>
@endsection