@extends('layouts.app')
@section('content')
  <main class="c-main-content">
        <div class="c-breadcrumb"></div>
        <div class="page-header l-flex-between">
            <div>
                <h1>Customer Master</h1>
                <p class="page-subtitle">Manage all customer records</p>
            </div>
            <a href="/masters/customer/add" class="c-btn c-btn-primary">+ Add Customer</a>
        </div>

        <!-- Search & Filters -->
        <div class="c-card u-mb-6">
            <div class="c-card-body">
                <div class="l-grid l-grid-4 l-gap-4">
                    <input type="text" id="searchCustomer" class="c-input" placeholder="Search by name, phone...">
                    <select class="c-select">
                        <option>All Types</option>
                        <option>Retail</option>
                        <option>Wholesale</option>
                    </select>
                    <select class="c-select">
                        <option>All Routes</option>
                        <option>Route A</option>
                        <option>Route B</option>
                        <option>Route C</option>
                    </select>
                    <button class="c-btn c-btn-secondary">Export Excel</button>
                </div>
            </div>
        </div>

        <!-- Customer Table -->
        <div class="c-table-wrapper">
            <table class="c-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Type</th>
                        <th>Route</th>
                        <th>GST</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#C001</td>
                        <td>Rajesh Kumar</td>
                        <td>+91 98765 43210</td>
                        <td>Mumbai, Maharashtra</td>
                        <td><span class="c-badge c-badge-primary">Retail</span></td>
                        <td>Route A</td>
                        <td>GSTIN1234567</td>
                        <td>
                            <div class="c-table-actions">
                                <a href="/masters/customer/view/1" class="c-btn c-btn-sm c-btn-ghost" title="View">👁️</a>
                                <a href="/masters/customer/edit/1" class="c-btn c-btn-sm c-btn-ghost" title="Edit">✏️</a>
                                <a href="/masters/customer/delete/1" class="c-btn c-btn-sm c-btn-ghost" title="Delete">🗑️</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>#C002</td>
                        <td>Suresh Patel</td>
                        <td>+91 98765 43211</td>
                        <td>Ahmedabad, Gujarat</td>
                        <td><span class="c-badge c-badge-success">Wholesale</span></td>
                        <td>Route B</td>
                        <td>-</td>
                        <td>
                            <div class="c-table-actions">
                                <a href="/masters/customer/view/2" class="c-btn c-btn-sm c-btn-ghost" title="View">👁️</a>
                                <a href="/masters/customer/edit/2" class="c-btn c-btn-sm c-btn-ghost" title="Edit">✏️</a>
                                <a href="/masters/customer/delete/2" class="c-btn c-btn-sm c-btn-ghost" title="Delete">🗑️</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>#C003</td>
                        <td>Amit Shah</td>
                        <td>+91 98765 43212</td>
                        <td>Pune, Maharashtra</td>
                        <td><span class="c-badge c-badge-primary">Retail</span></td>
                        <td>Route A</td>
                        <td>GSTIN7654321</td>
                        <td>
                            <div class="c-table-actions">
                                <a href="/masters/customer/view/3" class="c-btn c-btn-sm c-btn-ghost" title="View">👁️</a>
                                <a href="/masters/customer/edit/3" class="c-btn c-btn-sm c-btn-ghost" title="Edit">✏️</a>
                                <a href="/masters/customer/delete/3" class="c-btn c-btn-sm c-btn-ghost" title="Delete">🗑️</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="c-pagination">
            <a href="#" class="c-pagination-item">«</a>
            <a href="#" class="c-pagination-item is-active">1</a>
            <a href="#" class="c-pagination-item">2</a>
            <a href="#" class="c-pagination-item">3</a>
            <a href="#" class="c-pagination-item">»</a>
        </div>
    </main>
    <script>Navigation.generateBreadcrumb(['Masters', 'Customer Master', 'List']);</script>
@endsection