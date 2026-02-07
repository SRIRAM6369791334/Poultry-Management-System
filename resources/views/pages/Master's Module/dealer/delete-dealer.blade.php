@extends('layouts.app')
@section('content')
<div class="login-wrapper">
        <div class="login-container anim-fade-in-up" style="max-width: 500px;">
            <div class="login-header">
                <div class="login-logo">⚠️</div>
                <h1 class="login-title">Delete Dealer</h1>
                <p class="login-subtitle">Confirm deletion?</p>
            </div>
            <div class="c-card"
                style="background: rgba(255,255,255,0.05); padding: var(--sp-4); margin-bottom: var(--sp-6);">
                <p><strong>Firm:</strong> Sharma Traders</p>
                <p><strong>Contact:</strong> Mr. Sharma</p>
            </div>
            <div class="c-alert c-alert-danger"><strong>Warning:</strong> This cannot be undone.</div>
            <div class="l-flex l-gap-3" style="margin-top: var(--sp-6);"><button
                    onclick="PMS.toast.success('Deleted!');setTimeout(()=>window.location.href='/masters/dealer/list',1500)"
                    class="c-btn c-btn-danger c-btn-lg">Delete</button><a href="/masters/dealer/list"
                    class="c-btn c-btn-ghost c-btn-lg">Cancel</a></div>
        </div>
    </div>
@endsection