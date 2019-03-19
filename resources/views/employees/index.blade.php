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
                    @if(session()->get('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div><br />
                    @endif
                    <table id="employees-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $index => $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if($user->active == 1)
                                        <span>Hoạt động</span>
                                    @else
                                        <span>Không hoạt động</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group-sm" role="group" aria-label="Basic example">
                                        <a href="{{ route('employee.show', $user->id) }}" class="btn btn-gradient-info">Chi tiết</a>
                                        <a href="{{ route('employee.edit', $user->id) }}" class="btn btn-gradient-warning">Sửa</a>

                                        <form action="{{ route('employee.destroy', $user->id)}}" method="post" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-gradient-danger">Xóa</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        @include('shared.footer')
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            var table = $('#employees-table').DataTable();
            table
                .order( [ 0, 'desc' ] )
                .draw();
        } );
    </script>
@endsection