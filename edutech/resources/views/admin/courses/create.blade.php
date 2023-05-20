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
            <h1>Thêm khóa học</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 ">
                    <div class="card">
                        <div class="card-body">

                            <form method="post" action="{{route('admin.course.store')}}"  enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <section>
                                    <h2 class="section-title after-line">Thông tin cơ bản</h2>

                                    <div class="row">
                                        <div class="col-12 col-md-5">


                                            {{-- <div class="form-group mt-15 ">
                                                <label class="input-label d-block">{{ trans('lms/panel.course_type') }}</label>

                                                <select name="type" class="custom-select @error('type')  is-invalid @enderror">
                                                    <option value="webinar" @if((!empty($webinar) and $webinar->isWebinar()) or old('type') == \App\Models\LMS\Webinar::$webinar) selected @endif>{{ trans('lms/webinars.webinar') }}</option>
                                                    <option value="course" @if((!empty($webinar) and $webinar->isCourse()) or old('type') == \App\Models\LMS\Webinar::$course) selected @endif>{{ trans('lms/product.video_course') }}</option>
                                                    <option value="text_lesson" @if((!empty($webinar) and $webinar->isTextCourse()) or old('type') == \App\Models\LMS\Webinar::$textLesson) selected @endif>{{ trans('lms/product.text_course') }}</option>
                                                </select>

                                                @error('type')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div> --}}

                                            <div class="form-group mt-15">
                                                <label class="input-label">Tiêu đề</label>
                                                <input type="text" name="title"  class="form-control @error('title')  is-invalid @enderror" placeholder=""/>
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
                                            @if(!empty($webinar) and $webinar->creator->isOrganization())
                                                <div class="form-group mt-15 ">
                                                    <label class="input-label d-block">{{ trans('lms/admin/main.organization') }}</label>

                                                    <select class="form-control" disabled readonly data-placeholder="{{ trans('lms/public.search_instructor') }}">
                                                        <option selected>{{ $webinar->creator->full_name }}</option>
                                                    </select>
                                                </div>
                                            @endif --}}


                                            <div class="form-group mt-15 ">
                                                <label class="input-label d-block">Giảng viên</label>

                                                <select name="teacher_id" data-search-option="just_teacher_role" class="form-control search-user-select2"
                                                        data-placeholder="Chọn giảng viên">
                                                    {{-- @if(!empty($webinar))
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
                                                        <input type="file" name="thumbnail" class="form-control-file" id="thumbnail">
                                                    </div>

                                                </div>
                                            </div>


                                            <div class="form-group mt-15">
                                                <label class="input-label">Ảnh bìa</label>
                                                <div class="input-group">
                                                    <div class="form-group">
                                                        <input type="file" name="cover_image" class="form-control-file" id="cover_image" value="{{$course->bg ?? ''}}">
                                                    </div>

                                                </div>
                                            </div>



                                            <div class="form-group mt-0">
                                                <label class="input-label font-12">Video</label>
                                                <div class="input-group">
                                                    <div class="form-group">
                                                        <input type="file" name="video" class="form-control-file" id="video" value="{{$course->video ?? ''}}">
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
                                                <textarea name="description" class="form-control @error('description')  is-invalid @enderror"></textarea>
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

                                            {{-- @if(empty($webinar) or (!empty($webinar) and $webinar->isWebinar()))

                                                <div class="form-group mt-15 js-capacity {{ (!empty(old('type')) and old('type') != \App\Models\LMS\Webinar::$webinar) ? 'd-none' : '' }}">
                                                    <label class="input-label">{{ trans('lms/public.capacity') }}</label>
                                                    <input type="number" name="capacity" value="{{ !empty($webinar) ? $webinar->capacity : old('capacity') }}" class="form-control @error('capacity')  is-invalid @enderror"/>
                                                    @error('capacity')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            @endif --}}

                                            <div class="row mt-15">
                                                {{-- @if(empty($webinar) or (!empty($webinar) and $webinar->isWebinar()))
                                                    <div class="col-12 col-md-6 js-start_date {{ (!empty(old('type')) and old('type') != \App\Models\LMS\Webinar::$webinar) ? 'd-none' : '' }}">
                                                        <div class="form-group">
                                                            <label class="input-label">{{ trans('lms/public.start_date') }}</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="dateInputGroupPrepend">
                                                                        <i class="fa fa-calendar-alt "></i>
                                                                    </span>
                                                                </div>
                                                                <input type="text" name="start_date" value="{{ (!empty($webinar) and $webinar->start_date) ? dateTimeFormat($webinar->start_date, 'Y-m-d H:i', false, false, $webinar->timezone) : old('start_date') }}" class="form-control @error('start_date')  is-invalid @enderror datetimepicker" aria-describedby="dateInputGroupPrepend"/>
                                                                @error('start_date')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif --}}

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
                                                            <input type="text" name="duration"  class="form-control @error('duration')  is-invalid @enderror"/>
                                                            {{-- @error('duration')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- @if(getFeaturesSettings('timezone_in_create_webinar'))
                                                @php
                                                    $selectedTimezone = getGeneralSettings('default_time_zone');

                                                    if (!empty($webinar) and !empty($webinar->timezone)) {
                                                        $selectedTimezone = $webinar->timezone;
                                                    }
                                                @endphp

                                                <div class="form-group">
                                                    <label class="input-label">{{ trans('lms/update.timezone') }}</label>
                                                    <select name="timezone" class="form-control select2" data-allow-clear="false">
                                                        @foreach(getListOfTimezones() as $timezone)
                                                            <option value="{{ $timezone }}" @if($selectedTimezone == $timezone) selected @endif>{{ $timezone }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('timezone')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            @endif --}}

                                            {{-- @if(!empty($webinar) and $webinar->creator->isOrganization())
                                                <div class="form-group mt-30 d-flex align-items-center justify-content-between">
                                                    <label class="" for="privateSwitch">{{ trans('lms/webinars.private') }}</label>
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" name="private" class="custom-control-input" id="privateSwitch" {{ (!empty($webinar) and $webinar->private) ? 'checked' :  '' }}>
                                                        <label class="custom-control-label" for="privateSwitch"></label>
                                                    </div>
                                                </div>
                                            @endif

                                            <div class="form-group mt-30 d-flex align-items-center justify-content-between">
                                                <label class="" for="supportSwitch">{{ trans('lms/panel.support') }}</label>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" name="support" class="custom-control-input" id="supportSwitch" {{ !empty($webinar) && $webinar->support ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="supportSwitch"></label>
                                                </div>
                                            </div>

                                            <div class="form-group mt-30 d-flex align-items-center justify-content-between">
                                                <label class="cursor-pointer" for="downloadableSwitch">{{ trans('lms/home.downloadable') }}</label>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" name="downloadable" class="custom-control-input" id="downloadableSwitch" {{ !empty($webinar) && $webinar->downloadable ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="downloadableSwitch"></label>
                                                </div>
                                            </div>

                                            <div class="form-group mt-30 d-flex align-items-center justify-content-between">
                                                <label class="" for="partnerInstructorSwitch">{{ trans('lms/public.partner_instructor') }}</label>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" name="partner_instructor" class="custom-control-input" id="partnerInstructorSwitch" {{ !empty($webinar) && $webinar->partner_instructor ? 'checked' : ''  }}>
                                                    <label class="custom-control-label" for="partnerInstructorSwitch"></label>
                                                </div>
                                            </div>

                                            <div class="form-group mt-30 d-flex align-items-center justify-content-between">
                                                <label class="" for="forumSwitch">{{ trans('lms/update.course_forum') }}</label>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" name="forum" class="custom-control-input" id="forumSwitch" {{ !empty($webinar) && $webinar->forum ? 'checked' : ''  }}>
                                                    <label class="custom-control-label" for="forumSwitch"></label>
                                                </div>
                                            </div>

                                            <div class="form-group mt-30 d-flex align-items-center justify-content-between">
                                                <label class="" for="subscribeSwitch">{{ trans('lms/public.subscribe') }}</label>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" name="subscribe" class="custom-control-input" id="subscribeSwitch" {{ !empty($webinar) && $webinar->subscribe ? 'checked' : ''  }}>
                                                    <label class="custom-control-label" for="subscribeSwitch"></label>
                                                </div>
                                            </div>

                                            <div class="form-group mt-15">
                                                <label class="input-label">{{ trans('lms/update.access_days') }}</label>
                                                <input type="text" name="access_days" value="{{ !empty($webinar) ? $webinar->access_days : old('access_days') }}" class="form-control @error('access_days')  is-invalid @enderror"/>
                                                @error('access_days')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                                <p class="mt-1">- {{ trans('lms/update.access_days_input_hint') }}</p>
                                            </div> --}}

                                            <div class="form-group mt-15">
                                                <label class="input-label">Giá</label>
                                                {{-- value="{{ !empty($webinar) ? $webinar->price : old('price') }}" --}}
                                                <input type="text" name="price"  class="form-control @error('price')  is-invalid @enderror" placeholder="Nhập 0 nếu là khóa học miễn phí"/>
                                                {{-- @error('price')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror --}}
                                            </div>
                                            <div class="form-group mt-15">
                                                <label class="input-label">Giá khuyến mãi</label>
                                                {{-- value="{{ !empty($webinar) ? $webinar->price : old('price') }}" --}}
                                                <input type="text" name="pre_price"  class="form-control @error('pre_price')  is-invalid @enderror" placeholder="Giá khuyến mãi (nhập nếu có)"/>
                                                {{-- @error('price')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror --}}
                                            </div>



                                            <div class="form-group mt-15">
                                                <label class="input-label">Danh mục</label>

                                                <select name="category" data-search-option="just_teacher_role" class="form-control search-user-select2"
                                                data-placeholder="Chọn danh mục">                                                    {{-- {{ !empty($webinar) ? '' : 'selected' }} --}}
                                                    <option  disabled></option>

                                                    @foreach($categories as $category)
                                                            <option value="{{ $category->id }}" >{{ $category->name }}</option>
                                                    @endforeach
                                                </select>

                                                {{-- @error('category_id')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror --}}
                                            </div>

                                        </div>
                                    </div>

                                    {{-- <div class="form-group mt-15 {{ (!empty($webinarCategoryFilters) and count($webinarCategoryFilters)) ? '' : 'd-none' }}" id="categoriesFiltersContainer">
                                        <span class="input-label d-block">{{ trans('lms/public.category_filters') }}</span>
                                        <div id="categoriesFiltersCard" class="row mt-3">

                                            @if(!empty($webinarCategoryFilters) and count($webinarCategoryFilters))
                                                @foreach($webinarCategoryFilters as $filter)
                                                    <div class="col-12 col-md-3">
                                                        <div class="webinar-category-filters">
                                                            <strong class="category-filter-title d-block">{{ $filter->title }}</strong>
                                                            <div class="py-10"></div>

                                                            @foreach($filter->options as $option)
                                                                <div class="form-group mt-3 d-flex align-items-center justify-content-between">
                                                                    <label class="text-gray font-14" for="filterOptions{{ $option->id }}">{{ $option->title }}</label>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" name="filters[]" value="{{ $option->id }}" {{ ((!empty($webinarFilterOptions) && in_array($option->id,$webinarFilterOptions)) ? 'checked' : '') }} class="custom-control-input" id="filterOptions{{ $option->id }}">
                                                                        <label class="custom-control-label" for="filterOptions{{ $option->id }}"></label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif

                                        </div>
                                    </div> --}}
                                </section>

                                {{-- @if(!empty($webinar))
                                    <section class="mt-30">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h2 class="section-title after-line">{{ trans('lms/admin/main.price_plans') }}</h2>
                                            <button id="webinarAddTicket" type="button" class="btn btn-primary btn-sm mt-3">{{ trans('lms/admin/main.add_price_plan') }}</button>
                                        </div>

                                        <div class="row mt-10">
                                            <div class="col-12">

                                                @if(!empty($tickets) and !$tickets->isEmpty())
                                                    <div class="table-responsive">
                                                        <table class="table table-striped text-center font-14">

                                                            <tr>
                                                                <th>{{ trans('lms/public.title') }}</th>
                                                                <th>{{ trans('lms/public.discount') }}</th>
                                                                <th>{{ trans('lms/public.capacity') }}</th>
                                                                <th>{{ trans('lms/public.date') }}</th>
                                                                <th></th>
                                                            </tr>

                                                            @foreach($tickets as $ticket)
                                                                <tr>
                                                                    <th scope="row">{{ $ticket->title }}</th>
                                                                    <td>{{ $ticket->discount }}%</td>
                                                                    <td>{{ $ticket->capacity }}</td>
                                                                    <td>{{ dateTimeFormat($ticket->start_date,'j F Y') }} - {{ (new DateTime())->setTimestamp($ticket->end_date)->format('j F Y') }}</td>
                                                                    <td>
                                                                        <button type="button" data-ticket-id="{{ $ticket->id }}" data-webinar-id="{{ !empty($webinar) ? $webinar->id : '' }}" class="edit-ticket btn-transparent text-primary mt-1" data-toggle="tooltip" data-placement="top" title="{{ trans('lms/admin/main.edit') }}">
                                                                            <i class="fa fa-edit"></i>
                                                                        </button>

                                                                        @include('lms.admin.includes.delete_button',['url' => '/admin/tickets/'. $ticket->id .'/delete', 'btnClass' => ' mt-1'])
                                                                    </td>
                                                                </tr>
                                                            @endforeach

                                                        </table>
                                                    </div>
                                                @else
                                                    @include('lms.admin.includes.no-result',[
                                                        'file_name' => 'ticket.png',
                                                        'title' => trans('lms/public.ticket_no_result'),
                                                        'hint' => trans('lms/public.ticket_no_result_hint'),
                                                    ])
                                                @endif
                                            </div>
                                        </div>
                                    </section>


                                    @include('lms.admin.webinars.create_includes.contents')


                                    <section class="mt-30">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h2 class="section-title after-line">{{ trans('lms/public.prerequisites') }}</h2>
                                            <button id="webinarAddPrerequisites" type="button" class="btn btn-primary btn-sm mt-3">{{ trans('lms/public.add_prerequisites') }}</button>
                                        </div>

                                        <div class="row mt-10">
                                            <div class="col-12">
                                                @if(!empty($prerequisites) and !$prerequisites->isEmpty())
                                                    <div class="table-responsive">
                                                        <table class="table table-striped text-center font-14">

                                                            <tr>
                                                                <th>{{ trans('lms/public.title') }}</th>
                                                                <th class="text-left">{{ trans('lms/public.instructor') }}</th>
                                                                <th>{{ trans('lms/public.price') }}</th>
                                                                <th>{{ trans('lms/public.publish_date') }}</th>
                                                                <th>{{ trans('lms/public.forced') }}</th>
                                                                <th></th>
                                                            </tr>

                                                            @foreach($prerequisites as $prerequisite)
                                                                @if(!empty($prerequisite->prerequisiteWebinar->title))
                                                                    <tr>
                                                                        <th>{{ $prerequisite->prerequisiteWebinar->title }}</th>
                                                                        <td class="text-left">{{ $prerequisite->prerequisiteWebinar->teacher->full_name }}</td>
                                                                        <td>{{  addCurrencyToPrice(handlePriceFormat($prerequisite->prerequisiteWebinar->price)) }}</td>
                                                                        <td>{{ dateTimeFormat($prerequisite->prerequisiteWebinar->created_at,'j F Y | H:i') }}</td>
                                                                        <td>{{ $prerequisite->required ? trans('lms/public.yes') : trans('lms/public.no') }}</td>

                                                                        <td>
                                                                            <button type="button" data-prerequisite-id="{{ $prerequisite->id }}" data-webinar-id="{{ !empty($webinar) ? $webinar->id : '' }}" class="edit-prerequisite btn-transparent text-primary mt-1" data-toggle="tooltip" data-placement="top" title="{{ trans('lms/admin/main.edit') }}">
                                                                                <i class="fa fa-edit"></i>
                                                                            </button>

                                                                            @include('lms.admin.includes.delete_button',['url' => '/admin/prerequisites/'. $prerequisite->id .'/delete', 'btnClass' => ' mt-1'])
                                                                        </td>
                                                                    </tr>
                                                                @endif
                                                            @endforeach

                                                        </table>
                                                    </div>
                                                @else
                                                    @include('lms.admin.includes.no-result',[
                                                        'file_name' => 'comment.png',
                                                        'title' => trans('lms/public.prerequisites_no_result'),
                                                        'hint' => trans('lms/public.prerequisites_no_result_hint'),
                                                    ])
                                                @endif
                                            </div>
                                        </div>
                                    </section>

                                    <section class="mt-30">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h2 class="section-title after-line">{{ trans('lms/public.faq') }}</h2>
                                            <button id="webinarAddFAQ" type="button" class="btn btn-primary btn-sm mt-3">{{ trans('lms/public.add_faq') }}</button>
                                        </div>

                                        <div class="row mt-10">
                                            <div class="col-12">
                                                @if(!empty($faqs) and !$faqs->isEmpty())
                                                    <div class="table-responsive">
                                                        <table class="table table-striped text-center font-14">

                                                            <tr>
                                                                <th>{{ trans('lms/public.title') }}</th>
                                                                <th>{{ trans('lms/public.answer') }}</th>
                                                                <th></th>
                                                            </tr>

                                                            @foreach($faqs as $faq)
                                                                <tr>
                                                                    <th>{{ $faq->title }}</th>
                                                                    <td>
                                                                        <button type="button" class="js-get-faq-description btn btn-sm btn-gray200">{{ trans('lms/public.view') }}</button>
                                                                        <input type="hidden" value="{{ $faq->answer }}"/>
                                                                    </td>

                                                                    <td class="text-right">
                                                                        <button type="button" data-faq-id="{{ $faq->id }}" data-webinar-id="{{ !empty($webinar) ? $webinar->id : '' }}" class="edit-faq btn-transparent text-primary mt-1" data-toggle="tooltip" data-placement="top" title="{{ trans('lms/admin/main.edit') }}">
                                                                            <i class="fa fa-edit"></i>
                                                                        </button>

                                                                        @include('lms.admin.includes.delete_button',['url' => '/admin/faqs/'. $faq->id .'/delete', 'btnClass' => ' mt-1'])
                                                                    </td>
                                                                </tr>
                                                            @endforeach

                                                        </table>
                                                    </div>
                                                @else
                                                    @include('lms.admin.includes.no-result',[
                                                        'file_name' => 'faq.png',
                                                        'title' => trans('lms/public.faq_no_result'),
                                                        'hint' => trans('lms/public.faq_no_result_hint'),
                                                    ])
                                                @endif
                                            </div>
                                        </div>
                                    </section>

                                    @foreach(\App\Models\LMS\WebinarExtraDescription::$types as $webinarExtraDescriptionType)
                                        <section class="mt-30">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h2 class="section-title after-line">{{ trans('lms/update.'.$webinarExtraDescriptionType) }}</h2>
                                                <button id="add_new_{{ $webinarExtraDescriptionType }}" type="button" class="btn btn-primary btn-sm mt-3">{{ trans('lms/update.add_'.$webinarExtraDescriptionType) }}</button>
                                            </div>

                                            @php
                                                $webinarExtraDescriptionValues = $webinar->webinarExtraDescription->where('type',$webinarExtraDescriptionType);
                                            @endphp

                                            <div class="row mt-10">
                                                <div class="col-12">
                                                    @if(!empty($webinarExtraDescriptionValues) and count($webinarExtraDescriptionValues))
                                                        <div class="table-responsive">
                                                            <table class="table table-striped text-center font-14">

                                                                <tr>
                                                                    @if($webinarExtraDescriptionType == \App\Models\LMS\WebinarExtraDescription::$COMPANY_LOGOS)
                                                                        <th>{{ trans('lms/admin/main.icon') }}</th>
                                                                    @else
                                                                        <th>{{ trans('lms/public.title') }}</th>
                                                                    @endif
                                                                    <th></th>
                                                                </tr>

                                                                @foreach($webinarExtraDescriptionValues as $extraDescription)
                                                                    <tr>
                                                                        @if($webinarExtraDescriptionType == \App\Models\LMS\WebinarExtraDescription::$COMPANY_LOGOS)
                                                                            <td>
                                                                                <img src="{{get_path_lms()}}{{ $extraDescription->value }}" class="webinar-extra-description-company-logos" alt="">
                                                                            </td>
                                                                        @else
                                                                            <td>{{ $extraDescription->value }}</td>
                                                                        @endif

                                                                        <td class="text-right">
                                                                            <button type="button" data-item-id="{{ $extraDescription->id }}" data-webinar-id="{{ !empty($webinar) ? $webinar->id : '' }}" class="edit-extraDescription btn-transparent text-primary mt-1" data-toggle="tooltip" data-placement="top" title="{{ trans('lms/admin/main.edit') }}">
                                                                                <i class="fa fa-edit"></i>
                                                                            </button>

                                                                            @include('lms.admin.includes.delete_button',['url' => '/admin/webinar-extra-description/'. $extraDescription->id .'/delete', 'btnClass' => ' mt-1'])
                                                                        </td>
                                                                    </tr>
                                                                @endforeach

                                                            </table>
                                                        </div>
                                                    @else
                                                        @include('lms.admin.includes.no-result',[
                                                             'file_name' => 'faq.png',
                                                             'title' => trans("update.{$webinarExtraDescriptionType}_no_result"),
                                                             'hint' => trans("update.{$webinarExtraDescriptionType}_no_result_hint"),
                                                        ])
                                                    @endif
                                                </div>
                                            </div>
                                        </section>
                                    @endforeach

                                    <section class="mt-30">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h2 class="section-title after-line">{{ trans('lms/public.quiz_certificate') }}</h2>
                                            <button id="webinarAddQuiz" type="button" class="btn btn-primary btn-sm mt-3">{{ trans('lms/public.add_quiz') }}</button>
                                        </div>
                                        <div class="row mt-10">
                                            <div class="col-12">
                                                @if(!empty($webinarQuizzes) and !$webinarQuizzes->isEmpty())
                                                    <div class="table-responsive">
                                                        <table class="table table-striped text-center font-14">

                                                            <tr>
                                                                <th>{{ trans('lms/public.title') }}</th>
                                                                <th>{{ trans('lms/public.questions') }}</th>
                                                                <th>{{ trans('lms/public.total_mark') }}</th>
                                                                <th>{{ trans('lms/public.pass_mark') }}</th>
                                                                <th>{{ trans('lms/public.certificate') }}</th>
                                                                <th></th>
                                                            </tr>

                                                            @foreach($webinarQuizzes as $webinarQuiz)
                                                                <tr>
                                                                    <th>{{ $webinarQuiz->title }}</th>
                                                                    <td>{{ $webinarQuiz->quizQuestions->count() }}</td>
                                                                    <td>{{ $webinarQuiz->quizQuestions->sum('grade') }}</td>
                                                                    <td>{{ $webinarQuiz->pass_mark }}</td>
                                                                    <td>{{ $webinarQuiz->certificate ? trans('lms/public.yes') : trans('lms/public.no') }}</td>
                                                                    <td>
                                                                        <button type="button" data-webinar-quiz-id="{{ $webinarQuiz->id }}" data-webinar-id="{{ !empty($webinar) ? $webinar->id : '' }}" class="edit-webinar-quiz btn-transparent text-primary mt-1" data-toggle="tooltip" data-placement="top" title="{{ trans('lms/admin/main.edit') }}">
                                                                            <i class="fa fa-edit"></i>
                                                                        </button>

                                                                        @include('lms.admin.includes.delete_button',['url' => '/admin/webinar-quiz/'. $webinarQuiz->id .'/delete', 'btnClass' => ' mt-1'])
                                                                    </td>
                                                                    @endforeach
                                                                </tr>

                                                        </table>
                                                    </div>
                                                @else
                                                    @include('lms.admin.includes.no-result',[
                                                        'file_name' => 'cert.png',
                                                        'title' => trans('lms/public.quizzes_no_result'),
                                                        'hint' => trans('lms/public.quizzes_no_result_hint'),
                                                    ])
                                                @endif
                                            </div>
                                        </div>
                                    </section>
                                @endif --}}

                                {{-- <section class="mt-3">
                                    <h2 class="section-title after-line">{{ trans('lms/public.message_to_reviewer') }}</h2>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group mt-15">
                                                <textarea name="message_for_reviewer" rows="10" class="form-control">{{ (!empty($webinar) && $webinar->message_for_reviewer) ? $webinar->message_for_reviewer : old('message_for_reviewer') }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </section> --}}

                                <input type="hidden" name="draft" value="no" id="forDraft"/>


                                        <button type="submit" class="btn btn-success">Lưu và tiếp tục</button>

                                        {{-- @if(!empty($webinar))
                                            <button type="button" id="saveReject" class="btn btn-warning">{{ trans('lms/public.reject') }}</button>

                                            @include('lms.admin.includes.delete_button',[
                                                    'url' => '/admin/webinars/'. $webinar->id .'/delete',
                                                    'btnText' => trans('lms/public.delete'),
                                                    'hideDefaultClass' => true,
                                                    'btnClass' => 'btn btn-danger'
                                                    ])
                                        @endif --}}
                                </div>
                            </form>


                            {{-- @include('lms.admin.webinars.modals.prerequisites')
                            @include('lms.admin.webinars.modals.quizzes')
                            @include('lms.admin.webinars.modals.ticket')
                            @include('lms.admin.webinars.modals.chapter')
                            @include('lms.admin.webinars.modals.session')
                            @include('lms.admin.webinars.modals.file')
                            @include('lms.admin.webinars.modals.interactive_file')
                            @include('lms.admin.webinars.modals.faq')
                            @include('lms.admin.webinars.modals.testLesson')
                            @include('lms.admin.webinars.modals.assignment')
                            @include('lms.admin.webinars.modals.extra_description') --}}

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
