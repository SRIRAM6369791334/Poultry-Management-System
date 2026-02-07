@extends('layouts.app')
@section('content')
<div class="login-wrapper">
        <div class="login-container anim-fade-in-up" style="max-width: 500px;">
            <div class="login-header">
                <div class="login-logo">⚠️</div>
                <h1 class="login-title">Delete Customer</h1>
                <p class="login-subtitle">Are you sure you want to delete this customer?</p>
            </div>
            <div class="c-card"
                style="background: rgba(255,255,255,0.05); padding: var(--sp-4); margin-bottom: var(--sp-6);">
                <p class="u-mb-2"><strong>Customer:</strong> Rajesh Kumar</p>
                <p class="u-mb-2"><strong>Phone:</strong> +91 98765 43210</p>
                <p class="u-mb-0"><strong>Address:</strong> Mumbai, Maharashtra</p>
            </div>
            <div class="c-alert c-alert-danger"><strong>Warning:</strong> This action cannot be undone. All associated
                billing and payment history will be retained but customer record will be deleted.</div>
            <div class="l-flex l-gap-3" style="margin-top: var(--sp-6);"><button onclick="deleteCustomer()"
                    class="c-btn c-btn-danger c-btn-lg">Yes, Delete</button><a href="customer-list"
                    class="c-btn c-btn-ghost c-btn-lg">Cancel</a></div>
        </div>
    </div>
    <script>function deleteCustomer() { PMS.toast.success('Customer deleted successfully'); setTimeout(() => window.location.href = 'customer-list', 1500); }</script>
@endsection