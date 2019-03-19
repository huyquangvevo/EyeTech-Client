@extends('layouts.master')
@section('title', 'Events')
@section('content')
    <div class="page-container custom-page-container">
        @include('shared.quick-view')
        <div class="main-content">
            <div class="container">
                <div class="page-header">
                    <h2 class="header-title">Cập nhập thông tin nhân viên</h2>
                    <div class="header-sub-title float-right">
                        <nav class="breadcrumb breadcrumb-dash">
                            <span class="breadcrumb-item">Nhân viên</span>
                            <span class="breadcrumb-item active">Cập nhập thông tin nhân viên</span>
                        </nav>
                    </div>
                </div>
                <div class="employees-table">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                    @endif
                    <form method="post" action="{{ route('employee.update', $user->id) }}">
                        @method('PATCH')
                        @csrf
                        <div class="form-group">
                            <label for="">Tên <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-sm" name="name" value="{{ $user->name }}" aria-describedby="emailHelp" placeholder="Nhập tên">
                        </div>
                        <div class="form-group">
                            <label for="">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control form-control-sm" name="email" value="{{ $user->email }}" aria-describedby="emailHelp" placeholder="Nhập email">
                        </div>
                        <div class="form-group">
                            <label for="">Password <span class="text-danger">*</span></label>
                            <input type="password" class="form-control form-control-sm" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="">Vai trò </label>
                            <select class="form-control form-control-sm" name="permission">
                                <option value="manager" {{ $permission->name == 'manager' ? 'selected':'' }}>Manager</option>
                                <option value="employee" {{ $permission->name  == 'employee' ? 'selected':'' }}>Employee</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Trạng thái </label>
                            <select class="form-control form-control-sm" name="active">
                                <option value="1" {{ $user->active == 1 ? 'selected':'' }}>Hoạt động</option>
                                <option value="0" {{ $user->active == 0 ? 'selected':'' }}>Không hoạt động</option>
                            </select>
                        </div>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ url()->previous() }}" class="btn btn-gradient-primary">Quay về</a>
                            <button type="submit" class="btn btn-gradient-info">Cập nhật</button>
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