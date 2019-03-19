@extends('layouts.master')
@section('title', 'Events')
@section('content')
    <div class="page-container custom-page-container">
        @include('shared.quick-view')
        <div class="main-content">
            <div class="container">
                <div class="page-header">
                    <h2 class="header-title">Danh sách nhân viên</h2>
                    <div class="header-sub-title float-right">
                        <nav class="breadcrumb breadcrumb-dash">
                            <span class="breadcrumb-item">Nhân viên</span>
                            <span class="breadcrumb-item active">Danh sách nhân viên</span>
                        </nav>
                    </div>
                </div>
                <div class="employees-table">
                    <table id="employees-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Trạng thái</th>
                            <th>Vai trò</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Đỗ Văn Duy</td>
                            <td>vanduy07c.r@gmail.com</td>
                            <td>Hoạt động</td>
                            <td>Quản lý</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @include('shared.footer')
    </div>
@endsection
@section('js')
@endsection