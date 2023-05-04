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
                        <a class="nav-link " href="{{ route('admin.home') }}">Khoá học</a>
                    </li>

                    <li class="">
                        <a class="nav-link " href="https://edulms.di4l.vn/lms/admin/webinars?type=webinar">Lớp học trực
                            tiếp</a>
                    </li>

                    <li class="">
                        <a class="nav-link " href="https://edulms.di4l.vn/lms/admin/webinars?type=text_lesson">Khoá học
                            văn
                            bản</a>
                    </li>

                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/webinars/create">Thêm</a>
                    </li>

                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/agora_history">Lịch sử
                            khoá học</a>
                    </li>

                </ul>
            </li>

            <li class="">
                <a class="nav-link " href="https://edulms.di4l.vn/lms/admin/quizzes">
                    <i class="fas fa-file"></i>
                    <span>Bài kiểm tra</span>
                </a>
            </li>



            <li class="">
                <a href="https://edulms.di4l.vn/lms/admin/assignments" class="nav-link">
                    <i class="fas fa-pen"></i>
                    <span>Bài Tập</span>
                </a>
            </li>

            <!-- <li class="">
                <a class="nav-link " href="https://edulms.di4l.vn/lms/admin/webinars/course_forums">
                    <i class="fas fa-comment-alt"></i>
                    <span>Diễn đàn khoá học</span>
                </a>
            </li> -->

            <li class="nav-item dropdown ">
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
            </li>

            <li class="nav-item dropdown ">
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
            </li>

            <li class="nav-item dropdown">
                <a href="https://edulms.di4l.vn/lms/admin/webinars?type=course#" class="nav-link has-dropdown"
                    data-toggle="dropdown">
                    <i class="fas fa-th"></i>
                    <span>Danh mục</span>
                </a>
                <ul class="dropdown-menu" style="display: none;">
                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/categories">Danh
                            sách</a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/categories/create">Thêm</a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/categories/trends">Trend</a>
                    </li>
                </ul>
            </li>



            <li class="">
                <a href="https://edulms.di4l.vn/lms/admin/reviews" class="nav-link  beep beep-sidebar ">
                    <i class="fas fa-star"></i>
                    <span>Nhận xét</span>
                </a>
            </li>





            <!--
            <li class="menu-header">Buổi học</li>

            <li class="">
                <a href="https://edulms.di4l.vn/lms/admin/consultants" class="nav-link">
                    <i class="fas fa-id-card"></i>
                    <span>Tư vấn</span>
                </a>
            </li>

            <li class="">
                <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/appointments">
                    <i class="fas fa-address-book"></i>
                    <span>Hội thảo</span>
                </a>
            </li> -->

            <li class="menu-header">Người dùng</li>

            <li class="nav-item dropdown ">
                <a href="https://edulms.di4l.vn/lms/admin/webinars?type=course#" class="nav-link has-dropdown"
                    data-toggle="dropdown">
                    <i class="fas fa-users"></i>
                    <span>Người dùng</span>
                </a>

                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="{{ route('admin.getUser') }}">Người dùng</a>
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

            <!-- <li class="nav-item dropdown ">
                <a href="https://edulms.di4l.vn/lms/admin/webinars?type=course#"
                    class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-sitemap"></i>
                    <span>Nhóm</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/users/groups">Danh
                            sách</a>
                    </li>
                    <li class="">
                        <a class="nav-link"
                            href="https://edulms.di4l.vn/lms/admin/users/groups/create">Thêm</a>
                    </li>
                </ul>
            </li> -->

            <li class="">
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

                    <!-- <li class="">
                        <a class="nav-link"
                            href="https://edulms.di4l.vn/lms/admin/users/become-instructors/organizations">
                            <span>Tổ chức</span>
                        </a>
                    </li> -->
                </ul>
            </li>

            <!-- <li class="menu-header">Diễn đàn</li>

            <li class="nav-item dropdown ">
                <a href="https://edulms.di4l.vn/lms/admin/webinars?type=course#"
                    class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-comment-dots"></i>
                    <span>Diễn đàn</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/forums">Danh sách</a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/forums/create">Thêm</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown ">
                <a href="https://edulms.di4l.vn/lms/admin/webinars?type=course#"
                    class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-comment"></i>
                    <span>Chủ đề nổi bật</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/featured-topics">Danh
                            sách</a>
                    </li>
                    <li class="">
                        <a class="nav-link"
                            href="https://edulms.di4l.vn/lms/admin/featured-topics/create">Thêm</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown ">
                <a href="https://edulms.di4l.vn/lms/admin/webinars?type=course#"
                    class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-thumbs-up"></i>
                    <span>Chủ đề được đề xuất</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/recommended-topics">Danh
                            sách</a>
                    </li>
                    <li class="">
                        <a class="nav-link"
                            href="https://edulms.di4l.vn/lms/admin/recommended-topics/create">Thêm</a>
                    </li>
                </ul>
            </li> -->

            <li class="menu-header">CRM</li>
            <!--
            <li class="nav-item dropdown ">
                <a href="https://edulms.di4l.vn/lms/admin/webinars?type=course#"
                    class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-headphones"></i>
                    <span>Hỗ trợ</span>
                </a>

                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/supports">Vé</a>
                    </li>

                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/supports/create">Vé hỗ
                            trợ mới</a>
                    </li>

                    <li class="">
                        <a class="nav-link"
                            href="https://edulms.di4l.vn/lms/admin/supports/departments">Phòng ban</a>
                    </li>
                </ul>
            </li> -->

            <!-- <li class="">
                <a class="nav-link"
                    href="https://edulms.di4l.vn/lms/admin/supports?type=course_conversations">
                    <i class="fas fa-envelope-square"></i>
                    <span>Hỗ trợ khóa học</span>
                </a>
            </li> -->

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

                    <!-- <li class="">
                        <a class="nav-link " href="https://edulms.di4l.vn/lms/admin/comments/blog">Bình luận
                            trên Blog</a>
                    </li> -->
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
                    <!--
                    <li class="">
                        <a class="nav-link"
                            href="https://edulms.di4l.vn/lms/admin/comments/blog/reports">Bình luận trên
                            Blog</a>
                    </li> -->

                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/reports/reasons">Báo
                            cáo
                            lý do</a>
                    </li>

                    <!-- <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/reports/forum-topics">Chủ
                            đề diễn đàn</a>
                    </li> -->
                </ul>
            </li>

            <!-- <li class="">
                <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/contacts">
                    <i class="fas fa-phone-square"></i>
                    <span>Tin nhắn liên hệ</span>
                </a>
            </li> -->

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

            <!-- <li class="nav-item dropdown ">
                <a href="https://edulms.di4l.vn/lms/admin/webinars?type=course#"
                    class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-store-alt"></i>
                    <span>Cửa hàng</span>
                </a>
                <ul class="dropdown-menu">

                    <li class="">
                        <a class="nav-link"
                            href="https://edulms.di4l.vn/lms/admin/store/products/create">Sản phẩm mới</a>
                    </li>

                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/store/products">Sản
                            phẩm</a>
                    </li>

                    <li class="">
                        <a class="nav-link"
                            href="https://edulms.di4l.vn/lms/admin/store/in-house-products">Sản phẩm
                            In-house</a>
                    </li>

                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/store/orders">Đơn
                            hàng</a>
                    </li>

                    <li class="">
                        <a class="nav-link"
                            href="https://edulms.di4l.vn/lms/admin/store/in-house-orders">Đơn hàng
                            In-house</a>
                    </li>

                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/store/sellers">Người
                            bán</a>
                    </li>

                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/store/categories">Danh
                            mục</a>
                    </li>

                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/store/filters">Lọc</a>
                    </li>

                    <li class="">
                        <a class="nav-link"
                            href="https://edulms.di4l.vn/lms/admin/store/specifications">Thông số kĩ
                            thuật</a>
                    </li>

                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/store/discounts">Giảm
                            giá</a>
                    </li>



                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/store/reviews">Nhận
                            xét</a>
                    </li>

                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/store/settings">Cài
                            đặt</a>
                    </li>
                </ul>
            </li> -->

            <!-- <li class="nav-item dropdown ">
                <a href="https://edulms.di4l.vn/lms/admin/webinars?type=course#"
                    class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-rss-square"></i>
                    <span>Blog</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/blog">Bài viết</a>
                    </li>

                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/blog/create">Bài đăng
                            mới</a>
                    </li>

                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/blog/categories">Danh
                            mục</a>
                    </li>
                </ul>
            </li> -->

            <!-- <li class="nav-item dropdown ">
                <a href="https://edulms.di4l.vn/lms/admin/webinars?type=course#"
                    class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-pager"></i>
                    <span>Trang</span>
                </a>

                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/pages">Danh sách</a>
                    </li>

                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/pages/create">Trang
                            Mới</a>
                    </li>
                </ul>
            </li> -->

            <!-- <li class="nav-item dropdown ">
                <a href="https://edulms.di4l.vn/lms/admin/webinars?type=course#"
                    class="nav-link has-dropdown"><i class="fas fa-plus-circle"></i> <span>Trang bổ
                        sung</span></a>
                <ul class="dropdown-menu">

                    <li class="">
                        <a class="nav-link"
                            href="https://edulms.di4l.vn/lms/admin/additional_page/404">Trang 404</a>
                    </li>

                    <li class="">
                        <a class="nav-link"
                            href="https://edulms.di4l.vn/lms/admin/additional_page/contact_us">Liên hệ</a>
                    </li>

                    <li class="">
                        <a class="nav-link"
                            href="https://edulms.di4l.vn/lms/admin/additional_page/footer">Chân trang</a>
                    </li>

                    <li class="">
                        <a class="nav-link"
                            href="https://edulms.di4l.vn/lms/admin/additional_page/navbar_links">Top
                            Navbar</a>
                    </li>
                </ul>
            </li> -->

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

            <!-- <li class="nav-item dropdown ">
                <a href="https://edulms.di4l.vn/lms/admin/webinars?type=course#"
                    class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-map-marked"></i>
                    <span>Localization</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/regions/countries">Quốc
                            gia</a>
                    </li>

                    <li class="">
                        <a class="nav-link"
                            href="https://edulms.di4l.vn/lms/admin/regions/provinces">Tỉnh</a>
                    </li>

                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/regions/cities">Thành
                            phố</a>
                    </li>

                    <li class="">
                        <a class="nav-link"
                            href="https://edulms.di4l.vn/lms/admin/regions/districts">Quận/Huyện</a>
                    </li>
                </ul>
            </li> -->

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
            <!--
            <li class="">
                <a href="https://edulms.di4l.vn/lms/admin/financial/sales" class="nav-link">
                    <i class="fas fa-list-ul"></i>
                    <span>Danh sách bán hàng</span>
                </a>
            </li> -->

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

            <!-- <li class="nav-item dropdown ">
                <a href="https://edulms.di4l.vn/lms/admin/webinars?type=course#"
                    class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-cart-plus"></i>
                    <span>Đăng ký</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link"
                            href="https://edulms.di4l.vn/lms/admin/financial/subscribes">Gói</a>
                    </li>

                    <li class="">
                        <a class="nav-link"
                            href="https://edulms.di4l.vn/lms/admin/financial/subscribes/new">Gói mới</a>
                    </li>
                </ul>
            </li> -->


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

            <!-- <li class="nav-item dropdown ">
                <a href="https://edulms.di4l.vn/lms/admin/webinars?type=course#"
                    class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fa fa-gem"></i>
                    <span>SaaS</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link"
                            href="https://edulms.di4l.vn/lms/admin/financial/registration-packages">Gói</a>
                    </li>

                    <li class="">
                        <a class="nav-link"
                            href="https://edulms.di4l.vn/lms/admin/financial/registration-packages/new">Gói
                            mới</a>
                    </li>

                    <li class="">
                        <a class="nav-link"
                            href="https://edulms.di4l.vn/lms/admin/financial/registration-packages/reports">Báo
                            cáo</a>
                    </li>

                    <li class="">
                        <a class="nav-link"
                            href="https://edulms.di4l.vn/lms/admin/financial/registration-packages/settings">Cài
                            đặt</a>
                    </li>
                </ul>
            </li> -->

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
            </li>

            <!-- <li class="nav-item dropdown ">
                <a href="https://edulms.di4l.vn/lms/admin/webinars?type=course#"
                    class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-rocket"></i>
                    <span>Quảng cáo nội dung</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link"
                            href="https://edulms.di4l.vn/lms/admin/financial/promotions">Gói</a>
                    </li>
                    <li class="">
                        <a class="nav-link"
                            href="https://edulms.di4l.vn/lms/admin/financial/promotions/sales">Hàng khuyến
                            mãi</a>
                    </li>

                    <li class="">
                        <a class="nav-link"
                            href="https://edulms.di4l.vn/lms/admin/financial/promotions/new">Gói Mới</a>
                    </li>
                </ul>
            </li> -->

            <!-- <li class="nav-item dropdown ">
                <a href="https://edulms.di4l.vn/lms/admin/webinars?type=course#"
                    class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-file-image"></i>
                    <span>Banner quảng cáo</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/advertising/banners">Danh
                            sách</a>
                    </li>

                    <li class="">
                        <a class="nav-link"
                            href="https://edulms.di4l.vn/lms/admin/advertising/banners/new">Thêm</a>
                    </li>
                </ul>
            </li> -->

            <!-- <li class="nav-item dropdown ">
                <a href="https://edulms.di4l.vn/lms/admin/webinars?type=course#"
                    class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-newspaper"></i>
                    <span>Bản tin Email</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/newsletters">Danh
                            sách</a>
                    </li>

                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/newsletters/send">Gửi</a>
                    </li>

                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/newsletters/history">Lịch
                            sử</a>
                    </li>
                </ul>
            </li> -->

            <!-- <li class="nav-item dropdown ">
                <a href="https://edulms.di4l.vn/lms/admin/webinars?type=course#"
                    class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fa fa-bullhorn"></i>
                    <span>Affiliate</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/referrals/history">Lịch
                            sử</a>
                    </li>

                    <li class="">
                        <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/referrals/users">Người
                            dùng Affiliate</a>
                    </li>
                </ul>
            </li> -->

            <!-- <li class="nav-item ">
                <a href="https://edulms.di4l.vn/lms/admin/advertising_modal" class="nav-link">
                    <i class="fa fa-ad"></i>
                    <span>Quảng cáo Modal</span>
                </a>
            </li> -->

            <li class="menu-header">Cài đặt</li>


            <li class="nav-item ">
                <a href="https://edulms.di4l.vn/lms/admin/settings" class="nav-link">
                    <i class="fas fa-cogs"></i>
                    <span>Cài đặt</span>
                </a>
            </li>


            <li>
                <a class="nav-link" href="https://edulms.di4l.vn/lms/admin/logout">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Đăng xuất</span>
                </a>
            </li>

        </ul>
        <br><br><br>
    </aside>
</div>