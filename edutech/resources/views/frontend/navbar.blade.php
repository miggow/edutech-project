<div id="navbarVacuum"></div>
<nav id="navbar" class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between w-100">
            <a class="navbar-brand navbar-order d-flex align-items-center justify-content-center mr-0 ml-auto"
                href="{{route('home')}}">
                <img src="{{asset('/storage/images/5a4caf5bb317fdfeb16b4263522b9b5d.png')}}" class="img-cover" alt="site logo">
            </a>
            <button class="navbar-toggler navbar-order" type="button" id="navbarToggle">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="mx-lg-30 d-none d-lg-flex flex-grow-1 navbar-toggle-content " id="navbarContent">
                <div class="navbar-toggle-header text-right d-lg-none">
                    <button class="btn-transparent" id="navbarClose">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>
                <ul class="navbar-nav mr-auto d-flex align-items-center">
                    {{-- <li class="mr-lg-25">
                        <div class="menu-category">
                            <ul>
                                <li class="cursor-pointer user-select-none d-flex xs-categories-toggle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-grid mr-10 d-none d-lg-block">
                                        <rect x="3" y="3" width="7" height="7"></rect>
                                        <rect x="14" y="3" width="7" height="7"></rect>
                                        <rect x="14" y="14" width="7" height="7"></rect>
                                        <rect x="3" y="14" width="7" height="7"></rect>
                                    </svg>
                                    Danh mục
                                    <ul class="cat-dropdown-menu">
                                        <li>
                                            <a href="https://edulms.di4l.vn/lms/categories/thiet-ke">
                                                <div class="d-flex align-items-center">
                                                    <img src="./Khoá Học _ Di4L LMS_files/feather.png"
                                                        class="cat-dropdown-menu-icon mr-10" alt="Thiết Kế icon">
                                                    Thiết Kế
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://edulms.di4l.vn/lms/categories/hoc-thuat">
                                                <div class="d-flex align-items-center">
                                                    <img src="./Khoá Học _ Di4L LMS_files/briefcase.png"
                                                        class="cat-dropdown-menu-icon mr-10" alt="Học Thuật icon">
                                                    Học Thuật
                                                </div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevron-right d-none d-lg-inline-block ml-10">
                                                    <polyline points="9 18 15 12 9 6"></polyline>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevron-down d-inline-block d-lg-none">
                                                    <polyline points="6 9 12 15 18 9"></polyline>
                                                </svg>
                                            </a>
                                            <ul class="sub-menu" data-simplebar="init">
                                                <div class="simplebar-wrapper" style="margin: -30px -25px;">
                                                    <div class="simplebar-height-auto-observer-wrapper">
                                                        <div class="simplebar-height-auto-observer"></div>
                                                    </div>
                                                    <div class="simplebar-mask">
                                                        <div class="simplebar-offset"
                                                            style="right: 0px; bottom: 0px;">
                                                            <div class="simplebar-content-wrapper"
                                                                style="height: auto; overflow: hidden;">
                                                                <div class="simplebar-content"
                                                                    style="padding: 30px 25px;">
                                                                    <li>
                                                                        <a
                                                                            href="https://edulms.di4l.vn/lms/categories/hoc-thuat/toan">
                                                                            <img src="./Khoá Học _ Di4L LMS_files/divide-square.png"
                                                                                class="cat-dropdown-menu-icon mr-10"
                                                                                alt="Toán icon">
                                                                            Toán
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a
                                                                            href="https://edulms.di4l.vn/lms/categories/hoc-thuat/khoa-hoc">
                                                                            <img src="./Khoá Học _ Di4L LMS_files/zap.png"
                                                                                class="cat-dropdown-menu-icon mr-10"
                                                                                alt="Khoa học icon">
                                                                            Khoa học
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a
                                                                            href="https://edulms.di4l.vn/lms/categories/hoc-thuat/ngon-ngu">
                                                                            <img src="./Khoá Học _ Di4L LMS_files/globe.png"
                                                                                class="cat-dropdown-menu-icon mr-10"
                                                                                alt="Ngôn ngữ icon">
                                                                            Ngôn ngữ
                                                                        </a>
                                                                    </li>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="simplebar-placeholder"
                                                        style="width: auto; height: 165px;"></div>
                                                </div>
                                                <div class="simplebar-track simplebar-horizontal"
                                                    style="visibility: hidden;">
                                                    <div class="simplebar-scrollbar"
                                                        style="width: 0px; display: none;"></div>
                                                </div>
                                                <div class="simplebar-track simplebar-vertical"
                                                    style="visibility: hidden;">
                                                    <div class="simplebar-scrollbar"
                                                        style="height: 0px; display: none;"></div>
                                                </div>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="https://edulms.di4l.vn/lms/categories/suc-khoe-the-hinh">
                                                <div class="d-flex align-items-center">
                                                    <img src="./Khoá Học _ Di4L LMS_files/heart.png"
                                                        class="cat-dropdown-menu-icon mr-10"
                                                        alt="Sức khỏe &amp; Thể hình icon">
                                                    Sức khỏe &amp; Thể hình
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://edulms.di4l.vn/lms/categories/phong-cach-song1">
                                                <div class="d-flex align-items-center">
                                                    <img src="./Khoá Học _ Di4L LMS_files/umbrella.png"
                                                        class="cat-dropdown-menu-icon mr-10"
                                                        alt="Phong cách sống icon">
                                                    Phong cách sống
                                                </div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevron-right d-none d-lg-inline-block ml-10">
                                                    <polyline points="9 18 15 12 9 6"></polyline>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevron-down d-inline-block d-lg-none">
                                                    <polyline points="6 9 12 15 18 9"></polyline>
                                                </svg>
                                            </a>
                                            <ul class="sub-menu" data-simplebar="init">
                                                <div class="simplebar-wrapper" style="margin: -30px -25px;">
                                                    <div class="simplebar-height-auto-observer-wrapper">
                                                        <div class="simplebar-height-auto-observer"></div>
                                                    </div>
                                                    <div class="simplebar-mask">
                                                        <div class="simplebar-offset"
                                                            style="right: 0px; bottom: 0px;">
                                                            <div class="simplebar-content-wrapper"
                                                                style="height: auto; overflow: hidden;">
                                                                <div class="simplebar-content"
                                                                    style="padding: 30px 25px;">
                                                                    <li>
                                                                        <a
                                                                            href="https://edulms.di4l.vn/lms/categories/phong-cach-song1/phong-cach-song2">
                                                                            <img src="./Khoá Học _ Di4L LMS_files/sun.png"
                                                                                class="cat-dropdown-menu-icon mr-10"
                                                                                alt="Phong cách sống icon">
                                                                            Phong cách sống
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a
                                                                            href="https://edulms.di4l.vn/lms/categories/phong-cach-song1/lam-dep">
                                                                            <img src="./Khoá Học _ Di4L LMS_files/droplet.png"
                                                                                class="cat-dropdown-menu-icon mr-10"
                                                                                alt="Làm đẹp icon">
                                                                            Làm đẹp
                                                                        </a>
                                                                    </li>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="simplebar-placeholder"
                                                        style="width: auto; height: 125px;"></div>
                                                </div>
                                                <div class="simplebar-track simplebar-horizontal"
                                                    style="visibility: hidden;">
                                                    <div class="simplebar-scrollbar"
                                                        style="width: 0px; display: none;"></div>
                                                </div>
                                                <div class="simplebar-track simplebar-vertical"
                                                    style="visibility: hidden;">
                                                    <div class="simplebar-scrollbar"
                                                        style="height: 0px; display: none;"></div>
                                                </div>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="https://edulms.di4l.vn/lms/categories/marketing">
                                                <div class="d-flex align-items-center">
                                                    <img src="./Khoá Học _ Di4L LMS_files/pie-chart.png"
                                                        class="cat-dropdown-menu-icon mr-10" alt="Marketing icon">
                                                    Marketing
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://edulms.di4l.vn/lms/categories/kinh-doanh1">
                                                <div class="d-flex align-items-center">
                                                    <img src="./Khoá Học _ Di4L LMS_files/anchor.png"
                                                        class="cat-dropdown-menu-icon mr-10" alt="Kinh Doanh icon">
                                                    Kinh Doanh
                                                </div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevron-right d-none d-lg-inline-block ml-10">
                                                    <polyline points="9 18 15 12 9 6"></polyline>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevron-down d-inline-block d-lg-none">
                                                    <polyline points="6 9 12 15 18 9"></polyline>
                                                </svg>
                                            </a>
                                            <ul class="sub-menu" data-simplebar="init">
                                                <div class="simplebar-wrapper" style="margin: -30px -25px;">
                                                    <div class="simplebar-height-auto-observer-wrapper">
                                                        <div class="simplebar-height-auto-observer"></div>
                                                    </div>
                                                    <div class="simplebar-mask">
                                                        <div class="simplebar-offset"
                                                            style="right: 0px; bottom: 0px;">
                                                            <div class="simplebar-content-wrapper"
                                                                style="height: auto; overflow: hidden;">
                                                                <div class="simplebar-content"
                                                                    style="padding: 30px 25px;">
                                                                    <li>
                                                                        <a
                                                                            href="https://edulms.di4l.vn/lms/categories/kinh-doanh1/quan-ly">
                                                                            <img src="./Khoá Học _ Di4L LMS_files/users.png"
                                                                                class="cat-dropdown-menu-icon mr-10"
                                                                                alt="Quản lý icon">
                                                                            Quản lý
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a
                                                                            href="https://edulms.di4l.vn/lms/categories/kinh-doanh1/truyen-thong">
                                                                            <img src="./Khoá Học _ Di4L LMS_files/share-2.png"
                                                                                class="cat-dropdown-menu-icon mr-10"
                                                                                alt="Truyền thông icon">
                                                                            Truyền thông
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a
                                                                            href="https://edulms.di4l.vn/lms/categories/kinh-doanh1/chien-luoc-kinh-doanh">
                                                                            <img src="./Khoá Học _ Di4L LMS_files/target.png"
                                                                                class="cat-dropdown-menu-icon mr-10"
                                                                                alt="Chiến lược kinh doanh icon">
                                                                            Chiến lược kinh doanh
                                                                        </a>
                                                                    </li>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="simplebar-placeholder"
                                                        style="width: auto; height: 165px;"></div>
                                                </div>
                                                <div class="simplebar-track simplebar-horizontal"
                                                    style="visibility: hidden;">
                                                    <div class="simplebar-scrollbar"
                                                        style="width: 0px; display: none;"></div>
                                                </div>
                                                <div class="simplebar-track simplebar-vertical"
                                                    style="visibility: hidden;">
                                                    <div class="simplebar-scrollbar"
                                                        style="height: 0px; display: none;"></div>
                                                </div>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="https://edulms.di4l.vn/lms/categories/lap-trinh2">
                                                <div class="d-flex align-items-center">
                                                    <img src="./Khoá Học _ Di4L LMS_files/code.png"
                                                        class="cat-dropdown-menu-icon mr-10" alt="Lập trình icon">
                                                    Lập trình
                                                </div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevron-right d-none d-lg-inline-block ml-10">
                                                    <polyline points="9 18 15 12 9 6"></polyline>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevron-down d-inline-block d-lg-none">
                                                    <polyline points="6 9 12 15 18 9"></polyline>
                                                </svg>
                                            </a>
                                            <ul class="sub-menu" data-simplebar="init">
                                                <div class="simplebar-wrapper" style="margin: -30px -25px;">
                                                    <div class="simplebar-height-auto-observer-wrapper">
                                                        <div class="simplebar-height-auto-observer"></div>
                                                    </div>
                                                    <div class="simplebar-mask">
                                                        <div class="simplebar-offset"
                                                            style="right: 0px; bottom: 0px;">
                                                            <div class="simplebar-content-wrapper"
                                                                style="height: auto; overflow: hidden;">
                                                                <div class="simplebar-content"
                                                                    style="padding: 30px 25px;">
                                                                    <li>
                                                                        <a
                                                                            href="https://edulms.di4l.vn/lms/categories/lap-trinh2/phat-trien-web">
                                                                            <img src="./Khoá Học _ Di4L LMS_files/layout.png"
                                                                                class="cat-dropdown-menu-icon mr-10"
                                                                                alt="Phát triển Web icon">
                                                                            Phát triển Web
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a
                                                                            href="https://edulms.di4l.vn/lms/categories/lap-trinh2/phat-trien-mobile">
                                                                            <img src="./Khoá Học _ Di4L LMS_files/smartphone.png"
                                                                                class="cat-dropdown-menu-icon mr-10"
                                                                                alt="Phát triển Mobile icon">
                                                                            Phát triển Mobile
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a
                                                                            href="https://edulms.di4l.vn/lms/categories/lap-trinh2/phat-trien-game">
                                                                            <img src="./Khoá Học _ Di4L LMS_files/codesandbox.png"
                                                                                class="cat-dropdown-menu-icon mr-10"
                                                                                alt="Phát triển GAME icon">
                                                                            Phát triển GAME
                                                                        </a>
                                                                    </li>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="simplebar-placeholder"
                                                        style="width: auto; height: 165px;"></div>
                                                </div>
                                                <div class="simplebar-track simplebar-horizontal"
                                                    style="visibility: hidden;">
                                                    <div class="simplebar-scrollbar"
                                                        style="width: 0px; display: none;"></div>
                                                </div>
                                                <div class="simplebar-track simplebar-vertical"
                                                    style="visibility: hidden;">
                                                    <div class="simplebar-scrollbar"
                                                        style="height: 0px; display: none;"></div>
                                                </div>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">Trang Chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">Khoá Học</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/instructor-finder">Gia Sư</a>
                    </li>
                    --}}
                </ul>
            </div>
            <div class="nav-icons-or-start-live navbar-order">
                <div class="d-none nav-notify-cart-dropdown top-navbar ">
                    <div class="dropdown">
                        <button type="button" disabled="" class="btn btn-transparent dropdown-toggle"
                            id="navbarShopingCart" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-shopping-cart mr-10">
                                <circle cx="9" cy="21" r="1"></circle>
                                <circle cx="20" cy="21" r="1"></circle>
                                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                            </svg>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="navbarShopingCart">
                            <div class="d-md-none border-bottom mb-20 pb-10 text-right">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-x close-dropdown">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </div>
                            <div class="h-100">
                                <div class="navbar-shopping-cart h-100" data-simplebar="init">
                                    <div class="simplebar-wrapper" style="margin: 0px;">
                                        <div class="simplebar-height-auto-observer-wrapper">
                                            <div class="simplebar-height-auto-observer"></div>
                                        </div>
                                        <div class="simplebar-mask">
                                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                <div class="simplebar-content-wrapper"
                                                    style="height: auto; overflow: hidden;">
                                                    <div class="simplebar-content" style="padding: 0px;">
                                                        <div class="d-flex align-items-center text-center py-50">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="20" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-shopping-cart mr-10">
                                                                <circle cx="9" cy="21" r="1">
                                                                </circle>
                                                                <circle cx="20" cy="21" r="1">
                                                                </circle>
                                                                <path
                                                                    d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6">
                                                                </path>
                                                            </svg>
                                                            <span class="">Giỏ hàng của bạn không có sản phẩm
                                                                nào</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-left mx-15"></div>
                    <div class="dropdown">
                        <button type="button" class="btn btn-transparent dropdown-toggle" disabled=""
                            id="navbarNotification" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell mr-10">
                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                            </svg>
                        </button>
                        <div class="dropdown-menu pt-20" aria-labelledby="navbarNotification">
                            <div class="d-flex flex-column h-100">
                                <div class="mb-auto navbar-notification-card" data-simplebar="init">
                                    <div class="simplebar-wrapper" style="margin: 0px;">
                                        <div class="simplebar-height-auto-observer-wrapper">
                                            <div class="simplebar-height-auto-observer"></div>
                                        </div>
                                        <div class="simplebar-mask">
                                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                <div class="simplebar-content-wrapper"
                                                    style="height: auto; overflow: hidden;">
                                                    <div class="simplebar-content" style="padding: 0px;">
                                                        <div class="d-md-none border-bottom mb-20 pb-10 text-right">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="32"
                                                                height="32" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-x close-dropdown">
                                                                <line x1="18" y1="6" x2="6"
                                                                    y2="18"></line>
                                                                <line x1="6" y1="6" x2="18"
                                                                    y2="18"></line>
                                                            </svg>
                                                        </div>
                                                        <div class="d-flex align-items-center text-center py-50">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="20" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-bell mr-10">
                                                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9">
                                                                </path>
                                                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                                            </svg>
                                                            <span class="">Làm trống thông báo</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
