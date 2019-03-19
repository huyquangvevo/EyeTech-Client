@extends('layouts.master')
@section('title', 'Events')
@section('content')
    <div class="page-container custom-page-container">
        @include('shared.quick-view')
        <div class="main-content">
            <div class="container">
                <div class="page-header">
                    <h2 class="header-title">Thêm mới nhân viên</h2>
                    <div class="header-sub-title float-right">
                        <nav class="breadcrumb breadcrumb-dash">
                            <span class="breadcrumb-item">Nhân viên</span>
                            <span class="breadcrumb-item active">Thêm mới nhân viên</span>
                        </nav>
                    </div>
                </div>
                <div class="employees-table">
                    <form>
                        <div class="form-group">
                            <label for="">Tên <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-sm" id="" aria-describedby="emailHelp" placeholder="Nhập tên">
                        </div>
                        <div class="form-group">
                            <label for="">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control form-control-sm" id="" aria-describedby="emailHelp" placeholder="Nhập email">
                        </div>
                        <div class="form-group">
                            <label for="">Password <span class="text-danger">*</span></label>
                            <input type="password" class="form-control form-control-sm" id="" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="">Vai trò </label>
                            <select class="form-control form-control-sm">
                                <option>Quản lý</option>
                                <option>Nhân viên</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Trạng thái </label>
                            <select class="form-control form-control-sm">
                                <option>Hoạt động</option>
                                <option>Không hoạt động</option>
                            </select>
                        </div>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-gradient-primary">Quay về</button>
                            <button type="button" class="btn btn-gradient-info">Tạo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @include('shared.footer')
    </div>
@endsection
@section('js')
@endsection