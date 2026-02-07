@extends('layouts.app')
@section('content')
    <main class="c-main-content">
        <div class="c-breadcrumb"></div>
        <div class="page-header l-flex-between">
            <div>
                <h1>Billing History - Rajesh Kumar</h1>
                <p class="page-subtitle">All invoices and billing records</p>
            </div><a href="{{ route('customer.view', $id) }}" class="c-btn c-btn-ghost">← Back to Customer</a>
        </div>
        <div class="c-card u-mb-6">
            <div class="c-card-body">
                <div class="l-grid l-grid-4 l-gap-4"><input type="text" class="c-input"
                        placeholder="Search invoices..."><input type="date" class="c-input"><select class="c-select">
                        <option>All Status</option>
                        <option>Paid</option>
                        <option>Pending</option>
                        <option>Overdue</option>
                    </select><button class="c-btn c-btn-secondary">Export PDF</button></div>
            </div>
        </div>
        <div class="c-table-wrapper">
            <table class="c-table">
                <thead>
                    <tr>
                        <th>Invoice #</th>
                        <th>Date</th>
                        <th>Items</th>
                        <th>Amount</th>
                        <th>Paid</th>
                        <th>Balance</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#INV-001234</td>
                        <td>Feb 5, 2026</td>
                        <td>12</td>
                        <td>₹ 5,200</td>
                        <td>₹ 5,200</td>
                        <td>₹ 0</td>
                        <td><span class="c-badge c-badge-success">Paid</span></td>
                        <td><a href="#" class="c-btn c-btn-sm c-btn-ghost">View</a></td>
                    </tr>
                    <tr>
                        <td>#INV-001200</td>
                        <td>Jan 28, 2026</td>
                        <td>8</td>
                        <td>₹ 3,850</td>
                        <td>₹ 1,350</td>
                        <td>₹ 2,500</td>
                        <td><span class="c-badge c-badge-warning">Partial</span></td>
                        <td><a href="#" class="c-btn c-btn-sm c-btn-ghost">View</a></td>
                    </tr>
                    <tr>
                        <td>#INV-001150</td>
                        <td>Jan 20, 2026</td>
                        <td>15</td>
                        <td>₹ 7,600</td>
                        <td>₹ 0</td>
                        <td>₹ 7,600</td>
                        <td><span class="c-badge c-badge-danger">Pending</span></td>
                        <td><a href="#" class="c-btn c-btn-sm c-btn-ghost">View</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="c-pagination"><a href="#" class="c-pagination-item">«</a><a href="#"
                class="c-pagination-item is-active">1</a><a href="#" class="c-pagination-item">2</a><a href="#"
                class="c-pagination-item">»</a></div>
    </main>
    <script>Navigation.generateBreadcrumb(['Masters', 'Customer Master', 'Billing History']);</script>
@endsection