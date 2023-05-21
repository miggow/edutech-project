<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ url('/') }}" class="app-brand-link">

            <span class="app-brand-text demo menu-text fw-bolder ms-2">Edutech</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        {{-- <li class="menu-item active">
            <a href="index.html" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Dashboard</div>
            </a>
          </li> --}}


        {{-- Khóa học --}}
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Học vấn</span>
        </li>

        <li class="menu-item">
            <a href="{{route('admin.course.index')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-book"></i>
                <div data-i18n="Account Settings">Khóa học</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('admin.category.index') }}" class="menu-link">
                <i class='menu-icon tf-icons bx bx-category' ></i>
                <div data-i18n="Account">Danh mục</div>
            </a>
            </a>
        </li>
        {{-- Lớp học --}}
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Lớp học</span>
        </li>

        <li class="menu-item">
            <a href="{{route('class.index')}}" class="menu-link">
                <i class='menu-icon tf-icons bx bxs-book-open'></i>
                <div data-i18n="Account Settings">Lớp học</div>
            </a>
        </li>

        <!-- User -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Người dùng</span></li>
        <!-- Cards -->
        <li class="menu-item">
            <a href="{{ route('admin.getUser') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Basic">Danh sách người dùng</div>
            </a>
        </li>


        <!-- Misc -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Settings</span></li>
        <li class="menu-item">
            <a href="{{route('settings', \Auth::user()->id)}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div data-i18n="Support">Cài đặt</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('admin.logout') }}" target="_blank" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-log-out"></i>
                <div data-i18n="Documentation">Đăng xuất</div>
            </a>
        </li>
    </ul>
</aside>
