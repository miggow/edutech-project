@extends('admin.layout')

@push('styles_top')
    <link rel="stylesheet" href="/assets/default/vendors/sweetalert2/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="/assets/default/vendors/daterangepicker/daterangepicker.min.css">
    <link rel="stylesheet" href="/assets/default/vendors/bootstrap-timepicker/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="/assets/default/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="/assets/default/vendors/bootstrap-tagsinput/bootstrap-tagsinput.min.css">
    <link rel="stylesheet" href="/assets/vendors/summernote/summernote-bs4.min.css">
    <link href="/assets/default/vendors/sortable/jquery-ui.min.css" />
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
                    
                </div>
                <div class="section-body">
                    <div class="row">
                        <div class="col-12 ">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <form action="{{route('admin.createUser')}}" method="Post">
                                                @csrf
                                                <div class="form-group">
                                                    <label>Tên</label>
                                                    <input type="text" name="full_name" class="form-control  "
                                                        value=""
                                                        placeholder="Tên người dùng sẽ được hiển thị trên tất cả các trang.">
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email:</label>
                                                    <input name="email" type="text" class="form-control  "
                                                        id="email" value="" aria-describedby="emailHelp">
                                                </div>
                                                <div class="form-group">
                                                    <label for="phone">Điện Thoại:</label>
                                                    <input name="phone" type="text" class="form-control  "
                                                        id="phone" value="" aria-describedby="emailHelp">
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
                                                    <select class="form-control select2 select2-hidden-accessible"
                                                        id="roleId" name="role_id" tabindex="-1" aria-hidden="true"
                                                        data-select2-id="select2-data-roleId">
                                                        <option disabled="" selected=""
                                                            data-select2-id="select2-data-14-bm59">
                                                            Chọn vai trò người dùng</option>                                             
                                                        <option value="0">user - Student role</option>
                                                        <option value="1">teacher - Instructor role</option>
                                                        <option value="2">admin - Admin role</option>
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
