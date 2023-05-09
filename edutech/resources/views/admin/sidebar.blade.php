<div class="main-sidebar" tabindex="1" style="overflow: hidden; outline: none;">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#">
                Edutech - Project
            </a>
        </div>

        <ul class="sidebar-menu">


            <li class="menu-header">Học vấn</li>

            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-graduation-cap"></i>
                    <span>Khoá học</span>
                </a>
                <ul class="dropdown-menu" style="display: none;">
                    <li class="">
                        <a class="nav-link " href="{{route('admin.course.index')}}">Khoá học</a>
                    </li>

                    {{-- <li class="">
                        <a class="nav-link " href="https://edulms.di4l.vn/lms/admin/webinars?type=webinar">Lớp học trực
                            tiếp</a>
                    </li> --}}

                    {{-- <li class="">
                        <a class="nav-link " href="https://edulms.di4l.vn/lms/admin/webinars?type=text_lesson">Khoá học
                            văn
                            bản</a>
                    </li> --}}

{{--
                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/agora_history">Lịch sử
                            khoá học</a>
                    </li> --}}

                </ul>
            </li>

            {{-- <li class="">
                <a class="nav-link " href="https://edulms.di4l.vn/lms/admin/quizzes">
                    <i class="fas fa-file"></i>
                    <span>Bài kiểm tra</span>
                </a>
            </li> --}}


{{--
            <li class="">
                <a href="https://edulms.di4l.vn/lms/admin/assignments" class="nav-link">
                    <i class="fas fa-pen"></i>
                    <span>Bài Tập</span>
                </a>
            </li> --}}


            {{-- <li class="nav-item dropdown ">
                <a href="https://edulms.di4l.vn/lms/admin/webinars?type=course#" class="nav-link has-dropdown"
                    data-toggle="dropdown">
                    <i class="fas fa-clipboard-check"></i>
                    <span>Thông báo khóa học</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/course-noticeboards">Danh
                            sách</a>
                    </li>

                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/course-noticeboards/send">Thêm</a>
                    </li>
                </ul>
            </li> --}}

            {{-- <li class="nav-item dropdown ">
                <a href="https://edulms.di4l.vn/lms/admin/webinars?type=course#" class="nav-link has-dropdown"
                    data-toggle="dropdown">
                    <i class="fas fa-user-plus"></i>
                    <span>Ghi danh</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/enrollments/history">Lịch
                            sử</a>
                    </li>

                    <li class="">
                        <a class="nav-link"
                            href="https://edulms.di4l.vn/lms/admin/enrollments/add-student-to-class">Thêm
                            học viên vào khoá học</a>
                    </li>
                </ul>
            </li> --}}
            <li class="">
                <a class="nav-link" href="{{route('admin.category.index')}}">
                    <i class="fas fa-th"></i> <span>Danh mục</span>
                </a>
            </li>




            {{-- <li class="">
                <a href="https://edulms.di4l.vn/lms/admin/reviews" class="nav-link  beep beep-sidebar ">
                    <i class="fas fa-star"></i>
                    <span>Nhận xét</span>
                </a>
            </li> --}}






            <li class="menu-header">Người dùng</li>

            <li class="nav-item dropdown ">
                <a href="https://edulms.di4l.vn/lms/admin/webinars?type=course#" class="nav-link has-dropdown"
                    data-toggle="dropdown">
                    <i class="fas fa-users"></i>
                    <span>Người dùng</span>
                </a>

                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/staffs">Nhân viên</a>
                    </li>

                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/students">Học viên</a>
                    </li>

                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/instructors">Giảng
                            viên</a>
                    </li>

                    <!-- <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/organizations">Tổ
                            chức</a>
                    </li> -->

                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/users/create">Thêm</a>
                    </li>
                </ul>
            </li>


            <li class="">
                <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/users/not-access-to-content">
                    <i class="fas fa-user-lock"></i> <span>Quản lý truy cập</span>
                </a>
            </li>

            <li class="nav-item ">
                <a href="https://edulms.di4l.vn/lms/admin/users/delete-account-requests" class="nav-link">
                    <i class="fa fa-user-times"></i>
                    <span>Xóa tài khoản theo yêu cầu</span>
                </a>
            </li>

            <li class="nav-item dropdown ">
                <a href="https://edulms.di4l.vn/lms/admin/webinars?type=course#" class="nav-link has-dropdown"
                    data-toggle="dropdown">
                    <i class="fas fa-user-circle"></i> <span>Vai trò người dùng</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link active" href="https://edulms.di4l.vn/lms/admin/roles">Danh
                            sách</a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/roles/create">Thêm</a>
                    </li>
                </ul>
            </li>



            {{-- <li class="">
                <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/users/badges">
                    <i class="fas fa-trophy"></i>
                    <span>Huy hiệu</span>
                </a>
            </li>



            <li class="nav-item dropdown ">
                <a href="https://edulms.di4l.vn/lms/admin/webinars?type=course#" class="nav-link has-dropdown"
                    data-toggle="dropdown">
                    <i class="fas fa-list-alt"></i>
                    <span>Yêu cầu giáo viên hướng dẫn</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link"
                            href="https://edulms.di4l.vn/lms/admin/users/become-instructors/instructors">
                            <span>Giảng viên</span>
                        </a>
                    </li>


                </ul>
            </li>



            <li class="menu-header">CRM</li>


            <li class="nav-item dropdown ">
                <a href="https://edulms.di4l.vn/lms/admin/webinars?type=course#" class="nav-link has-dropdown"><i
                        class="fas fa-comments"></i> <span>Bình
                        luận</span></a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link  beep beep-sidebar "
                            href="https://edulms.di4l.vn/lms/admin/comments/webinars">Bình luận khoá
                            học</a>
                    </li>

                </ul>
            </li>

            <li class="nav-item dropdown ">
                <a href="https://edulms.di4l.vn/lms/admin/webinars?type=course#" class="nav-link has-dropdown"><i
                        class="fas fa-info-circle"></i> <span>Báo
                        cáo</span></a>

                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/reports/webinars">Khoá
                            học</a>
                    </li>

                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/comments/webinars/reports">Bình
                            luận
                            khoá
                            học</a>
                    </li>

                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/reports/reasons">Báo
                            cáo
                            lý do</a>
                    </li>


                </ul>
            </li>



            <li class="nav-item dropdown ">
                <a href="https://edulms.di4l.vn/lms/admin/webinars?type=course#" class="nav-link has-dropdown"><i
                        class="fas fa-sticky-note"></i> <span>Bảng thông
                        báo</span></a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/noticeboards">Danh
                            sách</a>
                    </li>

                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/noticeboards/send">Thêm</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown ">
                <a href="https://edulms.di4l.vn/lms/admin/webinars?type=course#" class="nav-link has-dropdown"
                    data-toggle="dropdown">
                    <i class="fas fa-bell"></i>
                    <span>Thông Báo</span>
                </a>

                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/notifications">Lịch
                            sử</a>
                    </li>

                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/notifications/posted">đã
                            đăng</a>
                    </li>

                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/notifications/send">Thêm</a>
                    </li>

                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/notifications/templates">Mẫu</a>
                    </li>

                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/notifications/templates/create">Mẫu
                            mới</a>
                    </li>
                </ul>
            </li>

            <li class="menu-header">Nội dung</li>



            <li class="nav-item dropdown ">
                <a href="https://edulms.di4l.vn/lms/admin/webinars?type=course#" class="nav-link has-dropdown"
                    data-toggle="dropdown">
                    <i class="fas fa-address-card"></i>
                    <span>Phản hồi khách hàng</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/testimonials">Danh
                            sách</a>
                    </li>

                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/testimonials/create">Thêm</a>
                    </li>
                </ul>
            </li>

            <li class="">
                <a href="https://edulms.di4l.vn/lms/admin/tags" class="nav-link">
                    <i class="fas fa-tags"></i>
                    <span>Thẻ</span>
                </a>
            </li>


            <li class="menu-header">Tài chính</li>

            <li class="nav-item dropdown ">
                <a href="https://edulms.di4l.vn/lms/admin/webinars?type=course#" class="nav-link has-dropdown"
                    data-toggle="dropdown">
                    <i class="fas fa-file-invoice-dollar"></i>
                    <span>Dư nợ</span>
                </a>
                <ul class="dropdown-menu">

                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/financial/documents">Danh
                            sách</a>
                    </li>

                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/financial/documents/new">Thêm</a>
                    </li>
                </ul>
            </li>


            <li class="nav-item dropdown ">
                <a href="https://edulms.di4l.vn/lms/admin/webinars?type=course#" class="nav-link has-dropdown"><i
                        class="fas fa-credit-card"></i> <span>Xuất
                        chi</span></a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a href="https://edulms.di4l.vn/lms/admin/financial/payouts?payout=requests"
                            class="nav-link  beep beep-sidebar ">
                            <span>Yêu cầu</span>
                        </a>
                    </li>

                    <li class="">
                        <a href="https://edulms.di4l.vn/lms/admin/financial/payouts?payout=history" class="nav-link">
                            <span>Lịch sử</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown ">
                <a href="https://edulms.di4l.vn/lms/admin/webinars?type=course#" class="nav-link has-dropdown"><i
                        class="fas fa-university"></i> <span>Thanh toán ngoại
                        tuyến</span></a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a href="https://edulms.di4l.vn/lms/admin/financial/offline_payments?page_type=requests"
                            class="nav-link  beep beep-sidebar ">
                            <span>Yêu cầu</span>
                        </a>
                    </li>

                    <li class="">
                        <a href="https://edulms.di4l.vn/lms/admin/financial/offline_payments?page_type=history"
                            class="nav-link">
                            <span>Lịch sử</span>
                        </a>
                    </li>
                </ul>
            </li>




            <li class="nav-item dropdown ">
                <a href="https://edulms.di4l.vn/lms/admin/webinars?type=course#" class="nav-link has-dropdown"
                    data-toggle="dropdown">
                    <i class="fa fa-gift"></i>
                    <span>Điểm thưởng</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/rewards">Lịch sử</a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/rewards/items">Điều
                            kiện</a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/rewards/settings">Cài
                            đặt</a>
                    </li>
                </ul>
            </li>

            <li class="menu-header">Marketing</li>

            <li class="nav-item dropdown ">
                <a href="https://edulms.di4l.vn/lms/admin/webinars?type=course#" class="nav-link has-dropdown"
                    data-toggle="dropdown">
                    <i class="fas fa-percent"></i>
                    <span>Phiếu giảm giá</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/financial/discounts">Danh
                            sách</a>
                    </li>

                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/financial/discounts/new">Thêm</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown ">
                <a href="https://edulms.di4l.vn/lms/admin/webinars?type=course#" class="nav-link has-dropdown"
                    data-toggle="dropdown">
                    <i class="fa fa-fire"></i>
                    <span>Giảm giá khóa học</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/financial/special_offers">Danh
                            sách</a>
                    </li>

                    <li class="">
                        <a class="nav-link"
                            href="https://edulms.di4l.vn/lms/admin/financial/special_offers/new">Thêm</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown ">
                <a href="https://edulms.di4l.vn/lms/admin/webinars?type=course#" class="nav-link has-dropdown"
                    data-toggle="dropdown">
                    <i class="fas fa-star"></i>
                    <span>Khoá học nổi bật</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/webinars/features">Danh
                            sách</a>
                    </li>

                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/webinars/features/create">Thêm</a>
                    </li>
                </ul>
            </li> --}}


            <li class="menu-header">Cài đặt</li>


            <li class="nav-item ">
                <a href="https://edulms.di4l.vn/lms/admin/settings" class="nav-link">
                    <i class="fas fa-cogs"></i>
                    <span>Cài đặt</span>
                </a>
            </li>


            <li>
                <a class="nav-link" href="{{route('admin.logout')}}">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Đăng xuất</span>
                </a>
            </li>

        </ul>
        <br><br><br>
    </aside>
</div>
