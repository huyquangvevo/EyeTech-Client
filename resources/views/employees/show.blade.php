@extends('layouts.master')
@section('title', 'Events')
@section('content')
    <div class="page-container custom-page-container">
        @include('shared.quick-view')
        <div class="main-content">
            <div class="container">
                <div class="page-header">
                    <h2 class="header-title">Thông tin chi tiết</h2>
                    <div class="header-sub-title float-right">
                        <nav class="breadcrumb breadcrumb-dash">
                            <span class="breadcrumb-item">Nhân viên</span>
                            <span class="breadcrumb-item active">Thông tin chi tiết</span>
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
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->active == 1 ? 'Hoạt động':'Không hoạt động' }}</td>
                            <td>{{ $permission->display_name }}</td>
                        </tr>
                        </tbody>
                    </table>
                    <a href="{{ url()->previous() }}" class="btn btn-gradient-primary">Quay về</a>
                </div>
            </div>
        </div>
        @include('shared.footer')
    </div>
@endsection
@section('js')
@endsection