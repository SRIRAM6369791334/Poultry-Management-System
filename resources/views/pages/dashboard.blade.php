@extends('layouts.app')
@section('content')
  <!-- Main Content -->
    <main class="c-main-content">
        <!-- Breadcrumb -->
        <div class="c-breadcrumb"></div>

        <!-- Page Header -->
        <div class="page-header">
            <h1>Dashboard</h1>
            <p class="page-subtitle">Overview of your poultry management system</p>
        </div>

        <!-- Statistics Cards -->
        <div class="l-grid l-grid-4 stats-grid">
            <div class="c-card stat-card anim-fade-in-up">
                <div class="stat-icon stat-icon-primary">💰</div>
                <div class="stat-info">
                    <h3 class="stat-value">₹ 2,45,850</h3>
                    <p class="stat-label">Total Sales (This Month)</p>
                </div>
            </div>

            <div class="c-card stat-card anim-fade-in-up anim-delay-100">
                <div class="stat-icon stat-icon-success">🛒</div>
                <div class="stat-info">
                    <h3 class="stat-value">₹ 1,58,200</h3>
                    <p class="stat-label">Total Purchases</p>
                </div>
            </div>

            <div class="c-card stat-card anim-fade-in-up anim-delay-200">
                <div class="stat-icon stat-icon-warning">📊</div>
                <div class="stat-info">
                    <h3 class="stat-value">₹ 87,650</h3>
                    <p class="stat-label">Net Profit</p>
                </div>
            </div>

            <div class="c-card stat-card anim-fade-in-up anim-delay-300">
                <div class="stat-icon stat-icon-danger">⏰</div>
                <div class="stat-info">
                    <h3 class="stat-value">₹ 42,500</h3>
                    <p class="stat-label">Pending Payments</p>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="c-card quick-actions">
            <div class="c-card-header">
                <h3 class="c-card-title">Quick Actions</h3>
            </div>
            <div class="c-card-body">
                <div class="action-grid">
                    <a href="../billing/daily/pos" class="action-btn">
                        <span class="action-icon">💳</span>
                        <span class="action-text">New Bill</span>
                    </a>
                    <a href="../purchase/create-purchase" class="action-btn">
                        <span class="action-icon">🛒</span>
                        <span class="action-text">New Purchase</span>
                    </a>
                    <a href="../masters/customer/add-customer" class="action-btn">
                        <span class="action-icon">👤</span>
                        <span class="action-text">Add Customer</span>
                    </a>
                    <a href="../reports/sales/daily-sales" class="action-btn">
                        <span class="action-icon">📈</span>
                        <span class="action-text">View Reports</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="l-grid l-grid-2">
            <div class="c-card">
                <div class="c-card-header">
                    <h3 class="c-card-title">Recent Sales</h3>
                </div>
                <div class="c-card-body">
                    <div class="activity-list">
                        <div class="activity-item">
                            <div class="activity-info">
                                <strong>INV-001234</strong>
                                <span class="u-text-gray">Rajesh Kumar</span>
                            </div>
                            <span class="c-badge c-badge-success">₹ 5,200</span>
                        </div>
                        <div class="activity-item">
                            <div class="activity-info">
                                <strong>INV-001233</strong>
                                <span class="u-text-gray">Suresh Patel</span>
                            </div>
                            <span class="c-badge c-badge-success">₹ 3,850</span>
                        </div>
                        <div class="activity-item">
                            <div class="activity-info">
                                <strong>INV-001232</strong>
                                <span class="u-text-gray">Amit Shah</span>
                            </div>
                            <span class="c-badge c-badge-success">₹ 7,600</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="c-card">
                <div class="c-card-header">
                    <h3 class="c-card-title">Pending Payments</h3>
                </div>
                <div class="c-card-body">
                    <div class="activity-list">
                        <div class="activity-item">
                            <div class="activity-info">
                                <strong>Rajesh Kumar</strong>
                                <span class="u-text-gray">Due: 15 Feb 2026</span>
                            </div>
                            <span class="c-badge c-badge-warning">₹ 12,500</span>
                        </div>
                        <div class="activity-item">
                            <div class="activity-info">
                                <strong>Amit Shah</strong>
                                <span class="u-text-gray">Due: 12 Feb 2026</span>
                            </div>
                            <span class="c-badge c-badge-danger">₹ 18,200</span>
                        </div>
                        <div class="activity-item">
                            <div class="activity-info">
                                <strong>Suresh Patel</strong>
                                <span class="u-text-gray">Due: 18 Feb 2026</span>
                            </div>
                            <span class="c-badge c-badge-warning">₹ 11,800</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection