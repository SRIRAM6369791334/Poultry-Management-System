@extends('layouts.app')
@section('content')
  <main class="c-main-content">
        <div class="c-breadcrumb"></div>
        <div class="page-header l-flex-between">
            <div>
                <h1>Pending Balance - Sharma Traders</h1>
            </div><a href="/masters/dealer/view/{{ $id }}" class="c-btn c-btn-ghost">← Back</a>
        </div>
        <div class="c-card u-mb-6">
            <div class="c-card-body">
                <div class="l-grid l-grid-3 l-gap-6">
                    <div class="u-text-center"><label class="c-label">Total Due</label>
                        <p class="u-text-white u-fw-bold" style="font-size: 2rem;">₹ 25,000</p>
                    </div>
                    <div class="u-text-center"><label class="c-label">Overdue Amount</label>
                        <p class="u-text-danger u-fw-bold" style="font-size: 2rem;">₹ 10,000</p>
                    </div>
                    <div class="u-text-center"><label class="c-label">Days Overdue</label>
                        <p class="u-text-warning u-fw-bold" style="font-size: 2rem;">15</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="c-table-wrapper">
            <table class="c-table">
                <thead>
                    <tr>
                        <th>Invoice #</th>
                        <th>Date</th>
                        <th>Due Date</th>
                        <th>Amount</th>
                        <th>Paid</th>
                        <th>Balance</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#INV-5001</td>
                        <td>Jan 15, 2026</td>
                        <td>Jan 30, 2026</td>
                        <td>₹ 15,000</td>
                        <td>₹ 5,000</td>
                        <td>₹ 10,000</td>
                        <td><span class="c-badge c-badge-danger">Overdue</span></td>
                    </tr>
                    <tr>
                        <td>#INV-5050</td>
                        <td>Feb 1, 2026</td>
                        <td>Feb 15, 2026</td>
                        <td>₹ 20,000</td>
                        <td>₹ 5,000</td>
                        <td>₹ 15,000</td>
                        <td><span class="c-badge c-badge-warning">Due Soon</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    <script>Navigation.generateBreadcrumb(['Masters', 'Dealer', 'Pending Balance']);</script>
@endsection