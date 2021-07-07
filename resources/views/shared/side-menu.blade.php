<div class="side-nav expand-lg">
    <div class="side-nav-inner">
        <ul class="side-nav-menu scrollable">
            <li class="side-nav-header">
                <span>Navigation</span>
            </li>
            <li class="nav-item dropdown open">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="mdi mdi-gauge"></i>
                    </span>
                    <span class="title">Dashboard</span>
                    <span class="arrow">
                        <i class="mdi mdi-chevron-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('events.index') }}">Events</a>
                    </li>
                    <li>
                        <a href="#">Customers</a>
                    </li>
                    <li class="active">
                        <a href="#">Analytical</a>
                    </li>
                </ul>
            </li>
            @if(Auth::user()->hasRole('view_employees'))
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="fas fa-users"></i>
                    </span>
                    <span class="title">Nhân viên</span>
                    <span class="arrow">
                        <i class="mdi mdi-chevron-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ route('employees.index') }}">Danh sách nhân viên</a>
                    </li>
                    <li>
                        <a href="{{ route('employee.create') }}">Thêm mới nhân viên</a>
                    </li>
                </ul>
            </li>
            @endif
            @if(Auth::user()->hasRole('view_analysis'))
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="fas fa-chart-bar"></i>
                    </span>
                    <span class="title">Thống kê</span>
                    <span class="arrow">
                        <i class="mdi mdi-chevron-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ route('analysis') }}">Thống kê khách hàng</a>
                    </li>
                </ul>
            </li>
            @endif
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="mdi mdi-file-outline"></i>
                    </span>
                    <span class="title">Form</span>
                    <span class="arrow">
                        <i class="mdi mdi-chevron-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#">Email</a>
                    </li>
                    <li>
                        <a href="#">Message</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="mdi mdi-tune-vertical"></i>
                    </span>
                    <span class="title">Tables</span>
                    <span class="arrow">
                        <i class="mdi mdi-chevron-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ route('events.index') }}">Events</a>
                    </li>
                    <li>
                        <a href="#">Customers</a>
                    </li>
                    <li>
                        <a href="{{ route('feedbacks.index') }}">Feedbacks</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="mdi mdi-chart-donut"></i>
                    </span>
                    <span class="title">Charts</span>
                    <span class="arrow">
                        <i class="mdi mdi-chevron-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#">Customers</a>
                    </li>
                </ul>
            </li>
            <li class="side-nav-header">
                <span>Others</span>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="mdi mdi-image-filter-tilt-shift"></i>
                    </span>
                    <span class="title">Help</span>
                    <span class="arrow">
                        <i class="mdi mdi-chevron-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#">FAQ</a>
                    </li>
                    <li>
                        <a href="#">Setting</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
