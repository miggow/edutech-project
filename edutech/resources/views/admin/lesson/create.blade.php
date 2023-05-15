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
            <h1>Thêm danh mục</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 ">
                    <div class="card">
                        <div class="card-body">

                            <form method="post" action="{{ route('admin.lesson.store') }}">
                                {{ csrf_field() }}
                                <input type="hidden" name="module_id" value="{{ $module->id }}" />
                                <section>
                                    <h2 class="section-title after-line">Thông tin cơ bản</h2>

                                    <div class="row">
                                        <div class="col-12 col-md-5">
                                            <div class="form-group mt-15">
                                                <label class="input-label">Tên module</label>
                                                <input type="text" name="name"
                                                    class="form-control @error('name')  is-invalid @enderror"
                                                    placeholder="" />
                                                @error('name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label class="input-label">Thời lượng (Phút)</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="timeInputGroupPrepend">
                                                            <i class="fa fa-clock"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" name="duration"
                                                        class="form-control @error('duration')  is-invalid @enderror" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-1">
                                        <label for="">Video **</label>
                                        {{-- <div class="d-flex flex-row">
                                            <div>
                                                <input type="radio" id="video_link" name="video" value="2">
                                                <p class="d-inline-block">Enter Video Link</p>
                                            </div>
                                        </div> --}}

                                        <div>
                                            {{-- <div id="upload_btn_id" class="d-none">
                                                <div class="form-group p-0">
                                                    <div class="video-preview" id="videoPreview2">
                                                        <video width="320" height="240" controls id="video_src">
                                                            <source src="" type="video/mp4">
                                                        </video>
                                                    </div>
                                                    <br>


                                                    <input id="fileInput2" type="hidden" name="video_file">
                                                    <button id="chooseVideo2" class="choose-video btn btn-primary" type="button"
                                                        data-multiple="false" data-video="true" data-toggle="modal"
                                                        data-target="#lfmModal2">Choose Video</button>


                                                    <p class="text-warning mb-0">MP4 video is allowed</p>
                                                    <p class="em text-danger mb-0" id="errvideo_file"></p>

                                                </div>
                                            </div> --}}

                                            <div id="video_link_id" >
                                                <input class="form-control" type="text" name="video_link"
                                                    placeholder="Nhập vào đường dẫn video" value="">
                                            </div>
                                        </div>
                                        <p id="errvideo" class="mb-0 text-danger em"></p>
                                    </div>
                                    <br>

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
    <script>
        $(document).ready(function() {
            // on page load show default input field for video upload
            let btnName = $('input:radio[name=video]');

            if (btnName.is(':checked') === false) {
                btnName.filter('[value=1]').prop('checked', true);

                let radioValue = $("input[name='video']:checked").val();

                if (radioValue == 1) {
                    $('#upload_btn_id').removeClass('d-none');
                }
            }

            // show different video input field by toggling radio button
            $("input[type='radio']").click(function() {
                let radioValue = $("input[name='video']:checked").val();

                if (radioValue == 1) {
                    $('#upload_btn_id').removeClass('d-none');
                    $('#video_link_id').addClass('d-none');
                } else {
                    $('#video_link_id').removeClass('d-none');
                    $('#upload_btn_id').addClass('d-none');
                }
            });
        });
    </script>
@endpush
