@extends('admin.layout')

@push('styles_top')
    <link rel="stylesheet" href="/assets/default/vendors/sweetalert2/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="/assets/default/vendors/daterangepicker/daterangepicker.min.css">
    <link rel="stylesheet" href="/assets/default/vendors/bootstrap-timepicker/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="/assets/default/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="/assets/default/vendors/bootstrap-tagsinput/bootstrap-tagsinput.min.css">
    <link rel="stylesheet" href="/assets/vendors/summernote/summernote-bs4.min.css">
    <link href="/assets/default/vendors/sortable/jquery-ui.min.css"/>
    <style>
        .bootstrap-timepicker-widget table td input {
            width: 35px !important;
        }

        .select2-container {
            z-index: 1212 !important;
        }
    </style>
@endpush

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Thêm người dùng</h1>
        </div>

        <div class="main-content" style="min-height: 623px;">
            <section class="section">
                <div class="section-header">
                    <h1>Thêm Người dùng</h1>
                    <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item active"><a href="https://edulms.di4l.vn/lms/admin/">Bảng điều khiển</a>
                        </div>
                        <div class="breadcrumb-item"><a>Người dùng</a>
                        </div>
                        <div class="breadcrumb-item">Thêm</div>
                    </div>
                </div>
                <div class="section-body">
                    <div class="row">
                        <div class="col-12 ">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <form action="https://edulms.di4l.vn/lms/admin/users/store" method="Post">
                                                <input type="hidden" name="_token"
                                                    value="EAOYdY4mEbEd0IFFLkpho0ARpQRonycmk5g0n27r">
                                                <div class="form-group">
                                                    <label>Tên</label>
                                                    <input type="text" name="full_name" class="form-control  " value=""
                                                        placeholder="Tên người dùng sẽ được hiển thị trên tất cả các trang.">
                                                </div>
                                                <div class="form-group">
                                                    <label for="username">Email hoặc Điện Thoại:</label>
                                                    <input name="username" type="text" class="form-control  " id="username"
                                                        value="" aria-describedby="emailHelp">
                                                </div>
                                                <div class="form-group">
                                                    <label class="input-label">Mật khẩu</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span type="button" class="input-group-text">
                                                                <i class="fa fa-lock"></i>
                                                            </span>
                                                        </div>
                                                        <input type="password" name="password" class="form-control ">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Vai trò người dùng</label>
                                                    <select class="form-control select2 select2-hidden-accessible" id="roleId"
                                                        name="role_id" tabindex="-1" aria-hidden="true"
                                                        data-select2-id="select2-data-roleId">
                                                        <option disabled="" selected="" data-select2-id="select2-data-14-bm59">
                                                            Chọn vai trò người dùng</option>
                                                        <option value="6">education - Author</option>
                                                        <option value="1">user - Student role</option>
                                                        <option value="2">admin - Admin role</option>
                                                        <option value="3">organization - Organization role</option>
                                                        <option value="4">teacher - Instructor role</option>
                                                    </select><span class="select2 select2-container select2-container--default"
                                                        dir="ltr" data-select2-id="select2-data-13-8ft1"
                                                        style="width: 513.857px;"><span class="selection"><span
                                                                class="select2-selection select2-selection--single"
                                                                role="combobox" aria-haspopup="true" aria-expanded="false"
                                                                tabindex="0" aria-disabled="false"
                                                                aria-labelledby="select2-roleId-container"><span
                                                                    class="select2-selection__rendered"
                                                                    id="select2-roleId-container" role="textbox"
                                                                    aria-readonly="true" title="Chọn vai trò người dùng">Chọn
                                                                    vai trò người dùng</span><span
                                                                    class="select2-selection__arrow" role="presentation"><b
                                                                        role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                </div>
                                                <div class="form-group" id="groupSelect">
                                                    <label class="input-label d-block">Nhóm</label>
                                                    <select name="group_id"
                                                        class="form-control select2 select2-hidden-accessible" tabindex="-1"
                                                        aria-hidden="true" data-select2-id="select2-data-18-lro1">
                                                        <option value="" selected="" disabled=""
                                                            data-select2-id="select2-data-20-1pfb"></option>
                                                        <option value="3">Special Students</option>
                                                        <option value="2">Vip Instructors</option>
                                                    </select><span class="select2 select2-container select2-container--default"
                                                        dir="ltr" data-select2-id="select2-data-19-n7yr"
                                                        style="width: 513.857px;"><span class="selection"><span
                                                                class="select2-selection select2-selection--single"
                                                                role="combobox" aria-haspopup="true" aria-expanded="false"
                                                                tabindex="0" aria-disabled="false"
                                                                aria-labelledby="select2-group_id-fx-container"><span
                                                                    class="select2-selection__rendered"
                                                                    id="select2-group_id-fx-container" role="textbox"
                                                                    aria-readonly="true"></span><span
                                                                    class="select2-selection__arrow" role="presentation"><b
                                                                        role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    <div class="invalid-feedback"></div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Trạng thái</label>
                                                    <select class="form-control " id="status" name="status">
                                                        <option disabled="" selected="">Chọn trạng thái</option>
                                                        <option value="active">active</option>
                                                        <option value="pending">pending</option>
                                                        <option value="inactive">inactive</option>
                                                    </select>
                                                </div>
                                                <div class="text-right mt-4">
                                                    <button class="btn btn-primary">Lưu</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>





                                    

                                   


           
        </div>
    </section>
@endsection

@push('scripts_bottom')


    <script src="/assets/default/vendors/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="/assets/default/vendors/feather-icons/dist/feather.min.js"></script>
    <script src="/assets/default/vendors/select2/select2.min.js"></script>
    <script src="/assets/default/vendors/moment.min.js"></script>
    <script src="/assets/default/vendors/daterangepicker/daterangepicker.min.js"></script>
    <script src="/assets/default/vendors/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
    <script src="/assets/default/vendors/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
    <script src="/assets/vendors/summernote/summernote-bs4.min.js"></script>
    <script src="/assets/default/vendors/sortable/jquery-ui.min.js"></script>

    <script src="/assets/default/js/admin/quiz.min.js"></script>
    <script src="/assets/admin/js/webinar.min.js"></script>
@endpush
