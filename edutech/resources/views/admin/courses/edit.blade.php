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
            <h1>Thêm khóa học</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 ">
                    <div class="card">
                        <div class="card-body">

                            <form method="POST" action="{{ route('admin.course.update', $course->id) }}"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <section>
                                    <h2 class="section-title after-line">Thông tin cơ bản</h2>

                                    <div class="row">
                                        <div class="col-12 col-md-5">


                                            {{-- <div class="form-group mt-15 ">
                                                <label class="input-label d-block">{{ trans('lms/panel.course_type') }}</label>

                                                <select name="type" class="custom-select @error('type')  is-invalid @enderror">
                                                    <option value="webinar" @if (!empty($webinar) and $webinar->isWebinar() or old('type') == \App\Models\LMS\Webinar::$webinar) selected @endif>{{ trans('lms/webinars.webinar') }}</option>
                                                    <option value="course" @if (!empty($webinar) and $webinar->isCourse() or old('type') == \App\Models\LMS\Webinar::$course) selected @endif>{{ trans('lms/product.video_course') }}</option>
                                                    <option value="text_lesson" @if (!empty($webinar) and $webinar->isTextCourse() or old('type') == \App\Models\LMS\Webinar::$textLesson) selected @endif>{{ trans('lms/product.text_course') }}</option>
                                                </select>

                                                @error('type')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div> --}}

                                            <div class="form-group mt-15">
                                                <label class="input-label">Tiêu đề</label>
                                                <input type="text" name="title" value="{{ $course->title }}"
                                                    class="form-control @error('title')  is-invalid @enderror"
                                                    placeholder="" />
                                                @error('title')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            {{-- <div class="form-group mt-15">
                                                <label class="input-label">{{ trans('lms/update.points') }}</label>
                                                <input type="text" name="points" value="{{ !empty($webinar) ? $webinar->points : old('points') }}" class="form-control @error('points')  is-invalid @enderror" placeholder="Empty means inactive this mode"/>
                                                @error('points')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div> --}}

                                            {{-- <div class="form-group mt-15">
                                                <label class="input-label">{{ trans('lms/admin/main.class_url') }}</label>
                                                <input type="text" name="slug" value="{{ !empty($webinar) ? $webinar->slug : old('slug') }}" class="form-control @error('slug')  is-invalid @enderror" placeholder=""/>
                                                <div class="text-muted text-small mt-1">{{ trans('lms/admin/main.class_url_hint') }}</div>
                                                @error('slug')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div> --}}
                                            {{--
                                            @if (!empty($webinar) and $webinar->creator->isOrganization())
                                                <div class="form-group mt-15 ">
                                                    <label class="input-label d-block">{{ trans('lms/admin/main.organization') }}</label>

                                                    <select class="form-control" disabled readonly data-placeholder="{{ trans('lms/public.search_instructor') }}">
                                                        <option selected>{{ $webinar->creator->full_name }}</option>
                                                    </select>
                                                </div>
                                            @endif --}}


                                            <div class="form-group mt-15 ">
                                                <label class="input-label d-block">Giảng viên</label>

                                                <select name="teacher_id" data-search-option="just_teacher_role"
                                                    class="form-control search-user-select2"
                                                    data-placeholder="Chọn giảng viên">
                                                    {{-- @if (!empty($webinar))
                                                        <option value="{{ $webinar->teacher->id }}" selected>{{ $webinar->teacher->full_name }}</option>
                                                    @else
                                                        <option selected disabled>{{ trans('lms/public.select_a_teacher') }}</option>
                                                    @endif --}}
                                                </select>
                                                {{--
                                                @error('teacher_id')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror --}}
                                            </div>



                                            <div class="form-group mt-15">
                                                <label class="input-label">Ảnh thu nhỏ (thumbnail)</label>
                                                <div class="input-group">
                                                    <div class="form-group">
                                                        <input type="file" value="{{ $course->image }}" name="thumbnail"
                                                            class="form-control-file" id="thumbnail">
                                                    </div>

                                                </div>
                                            </div>


                                            <div class="form-group mt-15">
                                                <label class="input-label">Ảnh bìa</label>
                                                <div class="input-group">
                                                    <div class="form-group">
                                                        <input type="file" value="{{ asset($course->bg) }}"
                                                            name="cover_image" class="form-control-file" id="cover_image">

                                                    </div>
                                                </div>
                                            </div>



                                            <div class="form-group mt-0">
                                                <label class="input-label font-12">Video</label>
                                                <div class="input-group">
                                                    <div class="form-group">
                                                        <input type="file" name="video" class="form-control-file"
                                                            id="video" value="{{ $course->video ?? '' }}">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group mt-15">
                                                <label class="input-label">Mô tả</label>
                                                {{-- {!! !empty($webinar) ? $webinar->description : old('description')  !!} --}}
                                                <textarea name="description" class="form-control @error('description')  is-invalid @enderror">{{ $course->description }}</textarea>
                                                {{-- @error('description')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror --}}
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section class="mt-3">
                                    <h2 class="section-title after-line">Thông tin bổ sung</h2>
                                    <div class="row">
                                        <div class="col-12 col-md-6">

                                            <div class="row mt-15">

                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <label class="input-label">Thời lượng (Phút)</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="timeInputGroupPrepend">
                                                                    <i class="fa fa-clock"></i>
                                                                </span>
                                                            </div>

                                                            {{-- {{ !empty($webinar) ? $webinar->duration : old('duration') }} --}}
                                                            <input type="text" name="duration"
                                                                value="{{ $course->duration }}"
                                                                class="form-control @error('duration')  is-invalid @enderror" />
                                                            {{-- @error('duration')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-group mt-15">
                                                <label class="input-label">Giá</label>
                                                {{-- value="{{ !empty($webinar) ? $webinar->price : old('price') }}" --}}
                                                <input type="text" name="price" value="{{ $course->current_price }}"
                                                    class="form-control @error('price')  is-invalid @enderror"
                                                    placeholder="Nhập 0 nếu là khóa học miễn phí" />
                                                {{-- @error('price')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror --}}
                                            </div>
                                            <div class="form-group mt-15">
                                                <label class="input-label">Giá khuyến mãi</label>
                                                {{-- value="{{ !empty($webinar) ? $webinar->price : old('price') }}" --}}
                                                <input type="text" name="pre_price"
                                                    value="{{ $course->previous_price }}"
                                                    class="form-control @error('pre_price')  is-invalid @enderror"
                                                    placeholder="Giá khuyến mãi (nhập nếu có)" />
                                            </div>



                                            <div class="form-group mt-15">
                                                <label class="input-label">Danh mục</label>

                                                <select name="category" data-search-option="just_teacher_role"
                                                    class="form-control search-user-select2"
                                                    data-placeholder="Chọn danh mục"> {{-- {{ !empty($webinar) ? '' : 'selected' }} --}}
                                                    <option disabled></option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </section>



                                <input type="hidden" name="draft" value="no" id="forDraft" />
                                <button type="submit" class="btn btn-success">Lưu và tiếp tục</button>
                        </div>
                        </form>

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
    <script src="/ckeditor/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( 'textarea[name="description"]' ), {
                toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|', 'blockQuote' ]
            } )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script src="/assets/default/js/admin/quiz.min.js"></script>
    <script src="/assets/admin/js/webinar.min.js"></script>
@endpush
