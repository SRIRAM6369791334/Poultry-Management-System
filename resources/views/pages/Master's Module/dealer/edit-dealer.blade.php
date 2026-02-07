@extends('layouts.app')
@section('content')
<main class="c-main-content">
        <div class="c-breadcrumb"></div>
        <div class="page-header">
            <h1>Edit Dealer</h1>
        </div>
        <div class="c-card">
            <form id="editForm" data-validate-form>
                <div class="l-grid l-grid-2 l-gap-4">
                    <div class="c-form-group"><label class="c-label c-label-required">Firm Name</label><input
                            type="text" class="c-input" value="Sharma Traders" data-validate="required"></div>
                    <div class="c-form-group"><label class="c-label c-label-required">Contact Person</label><input
                            type="text" class="c-input" value="Mr. Sharma" data-validate="required"></div>
                    <div class="c-form-group"><label class="c-label c-label-required">Phone</label><input type="tel"
                            class="c-input" value="+91 98765 11111" data-validate="required|phone"></div>
                    <div class="c-form-group"><label class="c-label">Email</label><input type="email" class="c-input"
                            value="sharma@example.com"></div>
                    <div class="c-form-group"><label class="c-label c-label-required">GST</label><input type="text"
                            class="c-input" value="GSTIN9876543" data-validate="required|gst"></div>
                    <div class="c-form-group"><label class="c-label c-label-required">Location</label><input type="text"
                            class="c-input" value="Delhi" data-validate="required"></div>
                </div>
                <div class="c-card-footer l-flex l-gap-3"><button type="submit"
                        class="c-btn c-btn-primary">Update</button><a href="/masters/dealer/list"
                        class="c-btn c-btn-ghost">Cancel</a></div>
            </form>
        </div>
    </main>
    <script>Navigation.generateBreadcrumb(['Masters', 'Dealer', 'Edit']); document.getElementById('editForm').addEventListener('submit', e => { e.preventDefault(); if (Validator.validateForm('editForm')) { PMS.toast.success('Dealer updated!'); setTimeout(() => window.location.href = 'dealer-list.html', 1500); } });</script>
@endsection