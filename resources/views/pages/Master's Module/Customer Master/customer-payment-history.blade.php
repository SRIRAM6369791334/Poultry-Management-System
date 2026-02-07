@extends('layouts.app')
@section('content')
 <main class="c-main-content">
        <div class="c-breadcrumb"></div>
        <div class="page-header l-flex-between">
            <div>
                <h1>Payment History - Rajesh Kumar</h1>
                <p class="page-subtitle">All payment transactions</p>
            </div><a href="{{ route('customer.view', $id) }}" class="c-btn c-btn-ghost">← Back to Customer</a>
        </div>
        <div class="c-card u-mb-6">
            <div class="c-card-body">
                <div class="l-grid l-grid-4 l-gap-4"><input type="text" class="c-input"
                        placeholder="Search payments..."><input type="date" class="c-input"><select class="c-select">
                        <option>All Methods</option>
                        <option>Cash</option>
                        <option>Card</option>
                        <option>UPI</option>
                        <option>Cheque</option>
                    </select><button class="c-btn c-btn-secondary">Export Excel</button></div>
            </div>
        </div>
        <div class="c-table-wrapper">
            <table class="c-table">
                <thead>
                    <tr>
                        <th>Receipt #</th>
                        <th>Date</th>
                        <th>Invoice #</th>
                        <th>Amount</th>
                        <th>Method</th>
                        <th>Notes</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#RCT-5421</td>
                        <td>Feb 5, 2026</td>
                        <td>#INV-001234</td>
                        <td>₹ 5,200</td>
                        <td><span class="c-badge c-badge-success">Cash</span></td>
                        <td>Full payment</td>
                        <td><a href="#" class="c-btn c-btn-sm c-btn-ghost">Print</a></td>
                    </tr>
                    <tr>
                        <td>#RCT-5380</td>
                        <td>Jan 30, 2026</td>
                        <td>#INV-001200</td>
                        <td>₹ 1,350</td>
                        <td><span class="c-badge c-badge-primary">UPI</span></td>
                        <td>Partial payment</td>
                        <td><a href="#" class="c-btn c-btn-sm c-btn-ghost">Print</a></td>
                    </tr>
                    <tr>
                        <td>#RCT-5320</td>
                        <td>Jan 18, 2026</td>
                        <td>#INV-001150</td>
                        <td>₹ 3,000</td>
                        <td><span class="c-badge c-badge-warning">Cheque</span></td>
                        <td>Advance payment</td>
                        <td><a href="#" class="c-btn c-btn-sm c-btn-ghost">Print</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="c-pagination"><a href="#" class="c-pagination-item">«</a><a href="#"
                class="c-pagination-item is-active">1</a><a href="#" class="c-pagination-item">2</a><a href="#"
                class="c-pagination-item">»</a></div>
    </main>
    <script>Navigation.generateBreadcrumb(['Masters', 'Customer Master', 'Payment History']);</script>
@endsection