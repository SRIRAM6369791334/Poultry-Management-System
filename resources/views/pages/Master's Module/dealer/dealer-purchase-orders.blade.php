@extends('layouts.app')
@section('content')
    <main class="c-main-content">
        <div class="c-breadcrumb"></div>
        <div class="page-header l-flex-between">
            <div>
                <h1>Purchase Orders - Sharma Traders</h1>
            </div><a href="/masters/dealer/view/{{ $id }}" class="c-btn c-btn-ghost">← Back</a>
        </div>
        <div class="c-table-wrapper">
            <table class="c-table">
                <thead>
                    <tr>
                        <th>PO #</th>
                        <th>Date</th>
                        <th>Items</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#PO-1001</td>
                        <td>Feb 1, 2026</td>
                        <td>5</td>
                        <td>₹ 45,000</td>
                        <td><span class="c-badge c-badge-success">Completed</span></td>
                        <td><a href="#" class="c-btn c-btn-sm c-btn-ghost">View</a></td>
                    </tr>
                    <tr>
                        <td>#PO-1002</td>
                        <td>Jan 25, 2026</td>
                        <td>8</td>
                        <td>₹ 62,000</td>
                        <td><span class="c-badge c-badge-warning">Pending</span></td>
                        <td><a href="#" class="c-btn c-btn-sm c-btn-ghost">View</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    <script>Navigation.generateBreadcrumb(['Masters', 'Dealer', 'Purchase Orders']);</script>

@endsection