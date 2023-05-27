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
    <section class="section container-xxl flex-grow-1 container-p-y">
        <div class="section-header">
            <h1>Sửa vai trò</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 ">
                    <div class="card">
                        <div class="card-body">

                            <form method="post" action="{{ route('admin.user.update', $user->id) }}"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <section>
                                    <h2 class="section-title after-line">Thông tin cơ bản</h2>

                                    <div class="row">
                                        <div class="col-12 col-md-5">
                                            <div class="form-group mt-15">
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
                                        </div>
                                    </div>
                                </section>
                        
                                <button type="submit" class="btn btn-success">Lưu và tiếp tục</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
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
