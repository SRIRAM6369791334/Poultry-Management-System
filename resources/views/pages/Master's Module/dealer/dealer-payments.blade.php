@extends('layouts.app')
@section('content')
<main class="c-main-content">
        <div class="c-breadcrumb"></div>
        <div class="page-header l-flex-between">
            <div>
                <h1>Payments - Sharma Traders</h1>
            </div><a href="/masters/dealer/view/{{ $id }}" class="c-btn c-btn-ghost">← Back</a>
        </div>
        <div class="c-table-wrapper">
            <table class="c-table">
                <thead>
                    <tr>
                        <th>Receipt #</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Method</th>
                        <th>Notes</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#RCT-2001</td>
                        <td>Feb 3, 2026</td>
                        <td>₹ 20,000</td>
                        <td><span class="c-badge c-badge-success">Bank Transfer</span></td>
                        <td>Payment for PO-1001</td>
                        <td><a href="#" class="c-btn c-btn-sm c-btn-ghost">Print</a></td>
                    </tr>
                    <tr>
                        <td>#RCT-1980</td>
                        <td>Jan 28, 2026</td>
                        <td>₹ 15,000</td>
                        <td><span class="c-badge c-badge-warning">Cheque</span></td>
                        <td>Partial payment</td>
                        <td><a href="#" class="c-btn c-btn-sm c-btn-ghost">Print</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
     <script>Navigation.generateBreadcrumb(['Masters', 'Dealer', 'Payments']);</script>
@endsection