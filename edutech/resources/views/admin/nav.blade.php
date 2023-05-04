<button type="button" class="sidebar-close">
    <i class="fa fa-times"></i>
</button>

<div class="navbar-bg"></div>

<nav class="navbar navbar-expand-lg main-navbar">

    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
        </ul>
    </form>
    <ul class="navbar-nav navbar-right">

         <li class="dropdown dropdown-list-toggle">
                <a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg">
                    <i class="fa fa-info-circle"></i>
                </a>
                <div class="dropdown-menu dropdown-list dropdown-menu-right">
                    <div class="dropdown-list-icons mb-0" height="150px">
                            <a href="https://di4l.vn/portfolio" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="fa fa-info"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                   Di4L LMS Version 1.6
                                   <div class="time text-primary">All rights reserved for Di4L Soft</div>
                                </div>
                            </a>
                    </div>
                </div>
            </li>

        {{-- @if($authUser->can('admin_notifications_list'))
            <li class="dropdown dropdown-list-toggle">
                <a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg @if(!empty($unreadNotifications) and count($unreadNotifications)) beep @else disabled @endif">
                    <i class="far fa-bell"></i>
                </a>

                <div class="dropdown-menu dropdown-list dropdown-menu-right">
                    <div class="dropdown-header">{{ trans('lms/admin/main.notifications') }}
                        <div class="float-right">
                            @if($authUser->can('admin_notifications_markAllRead'))
                                <a href="/lms/admin/notifications/mark_all_read">{{ trans('lms/admin/main.mark_all_read') }}</a>
                            @endif
                        </div>
                    </div>

                    <div class="dropdown-list-content dropdown-list-icons">
                        @foreach($unreadNotifications as $unreadNotification)
                            <a href="/lms/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    {{ $unreadNotification->title }}
                                    <div class="time text-primary">{{ dateTimeFormat($unreadNotification->created_at,'Y M j | H:i') }}</div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                    <div class="dropdown-footer text-center">
                        <a href="/lms/admin/notifications">{{ trans('lms/admin/main.view_all') }} <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </li>
        @endif --}}
@php
            $authUser = auth()->check();
@endphp
        <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                {{-- <img alt="image" src="{{ $authUser->getAvatar() }}" class="rounded-circle mr-1"> --}}
                <div class="d-sm-none d-lg-inline-block">{{ auth()->user()->name }}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">

                 <a href="/lms/" class="dropdown-item has-icon">
                    <i class="fas fa-globe"></i> {{ trans('lms/admin/main.show_website') }}
                </a>

                <a href="/lms/admin/users/{{ auth()->user()->id }}/edit" class="dropdown-item has-icon">
                    <i class="fas fa-cog"></i> {{ trans('lms/admin/main.change_password') }}
                </a>

                <div class="dropdown-divider"></div>
                <a href="/lms/admin/logout" class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> {{ trans('lms/admin/main.logout') }}
                </a>
            </div>
        </li>
    </ul>
</nav>