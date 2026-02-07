@extends('layouts.app')
@section('content')
 <main class="c-main-content">
        <div class="c-breadcrumb"></div>
        <div class="page-header l-flex-between">
            <div>
                <h1>Dealer Master</h1>
                <p class="page-subtitle">Manage all dealer records</p>
            </div><a href="/masters/dealer/add" class="c-btn c-btn-primary">+ Add Dealer</a>
        </div>
        <div class="c-card u-mb-6">
            <div class="c-card-body">
                <div class="l-grid l-grid-4 l-gap-4"><input type="text" class="c-input"
                        placeholder="Search by firm name..."><select class="c-select">
                        <option>All Routes</option>
                        <option>Route A</option>
                        <option>Route B</option>
                    </select><select class="c-select">
                        <option>All Status</option>
                        <option>Active</option>
                        <option>Inactive</option>
                    </select><button class="c-btn c-btn-secondary">Export Excel</button></div>
            </div>
        </div>
        <div class="c-table-wrapper">
            <table class="c-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Firm Name</th>
                        <th>Contact Person</th>
                        <th>Phone</th>
                        <th>GST</th>
                        <th>Location</th>
                        <th>Pending</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#D001</td>
                        <td>Sharma Traders</td>
                        <td>Mr. Sharma</td>
                        <td>+91 98765 11111</td>
                        <td>GSTIN9876543</td>
                        <td>Delhi</td>
                        <td class="u-text-warning">₹ 25,000</td>
                        <td>
                            <div class="c-table-actions"><a href="/masters/dealer/view/1"
                                    class="c-btn c-btn-sm c-btn-ghost">👁️</a><a href="/masters/dealer/edit/1"
                                    class="c-btn c-btn-sm c-btn-ghost">✏️</a><a href="/masters/dealer/delete/1"
                                    class="c-btn c-btn-sm c-btn-ghost">🗑️</a></div>
                        </td>
                    </tr>
                    <tr>
                        <td>#D002</td>
                        <td>Patel Distributors</td>
                        <td>Mr. Patel</td>
                        <td>+91 98765 22222</td>
                        <td>GSTIN1234567</td>
                        <td>Gujarat</td>
                        <td class="u-text-success">₹ 0</td>
                        <td>
                            <div class="c-table-actions"><a href="/masters/dealer/view/2"
                                    class="c-btn c-btn-sm c-btn-ghost">👁️</a><a href="/masters/dealer/edit/2"
                                    class="c-btn c-btn-sm c-btn-ghost">✏️</a><a href="/masters/dealer/delete/2"
                                    class="c-btn c-btn-sm c-btn-ghost">🗑️</a></div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="c-pagination"><a href="#" class="c-pagination-item">«</a><a href="#"
                class="c-pagination-item is-active">1</a><a href="#" class="c-pagination-item">2</a><a href="#"
                class="c-pagination-item">»</a></div>
    </main>
    <script>Navigation.generateBreadcrumb(['Masters', 'Dealer Master', 'List']);</script>
@endsection