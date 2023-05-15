@extends('frontend.app')

@push('styles_top')
    <link rel="stylesheet" href="/assets/default/css/css-stars.css">
    <link rel="stylesheet" href="/assets/default/vendors/video/video-js.min.css">
@endpush


@section('content')
    <section class="course-cover-container bg-gray200">
        <img src="{{$course->bg}}" class="img-cover course-cover-img" alt="{{ $course->title }}"/>
    </section>

    <section class="container course-content-section">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="course-content-body user-select-none">
                    <div class="upcoming-course-body-on-cover d-flex flex-column text-white pb-15">
                        <h1 class="font-30">
                            {{ ($course->title) }}
                        </h1>


                        @if(!empty($course->category))
                            <span class="d-block font-16 mt-10">Trong <a href="#" target="_blank" class="font-weight-500 text-decoration-underline text-white">{{ $course->category->name }}</a></span>
                        @endif

                        {{-- <div class="mt-15">
                            <span class="font-14">{{ trans('lms/public.created_by') }}</span>
                            <a href="/lms{{ $course->teacher->getProfileUrl() }}" target="_blank" class="text-decoration-underline text-white font-14 font-weight-500">{{ $course->teacher->full_name }}</a>
                        </div> --}}

                        <div class="mt-auto">
                            @if(!empty($followingUsers) and count($followingUsers))
                                <div class="d-flex align-items-center mt-40">
                                    <div class="d-flex align-items-center overlay-avatars">
                                        @foreach($followingUsers as $followingUser)
                                            <div class="overlay-avatars__item size-40 rounded-circle">
                                                <img src="{{ $followingUser->user->getAvatar(40) }}" alt="{{ $followingUser->full_name }}" class="img-cover rounded-circle">
                                            </div>
                                        @endforeach

                                        @if($followingUsersCount - $followingUsers->count() > 0)
                                            <div class="overlay-avatars__count size-40 rounded-circle d-flex align-items-center justify-content-center font-14 text-gray">
                                                +{{ $followingUsersCount - $followingUsers->count() }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="ml-5">
                                        <span class="d-block font-14 font-weight-bold text-white">{{ $followingUsersCount }} {{ trans('lms/panel.users') }}</span>
                                        <span class="d-block font-12 text-white">{{ trans('lms/update.are_following_this_upcoming_course') }}</span>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

                    {{-- <div class="mt-20">
                        @include('lms.web.default.upcoming_courses.tabs.information')
                    </div> --}}
                </div>
            </div>

            <div class="course-content-sidebar col-12 col-lg-4 mt-25 mt-lg-0">
                <div class="rounded-lg shadow-sm">
                    <div class="course-img {{ $course->video_demo ? 'has-video' :'' }}">

                        <img src="{{$course->image}}" class="img-cover" alt="">

                        {{-- @if($course->video_demo)
                            <div id="webinarDemoVideoBtn"
                                 data-video-path="{{ $course->video_demo_source == 'upload' ?  url($course->video_demo) : $course->video_demo }}"
                                 data-video-source="{{ $course->video_demo_source }}"
                                 class="course-video-icon cursor-pointer d-flex align-items-center justify-content-center">
                                <i data-feather="play" width="25" height="25"></i>
                            </div>
                        @endif --}}
                    </div>

                    <div class="px-20 pb-30">

                        @if(!empty($course->webinar_id))
                            <a href="/lms{{ $course->webinar->getUrl() }}" class="btn btn-primary btn-block mt-20">{{ trans('lms/update.view_course') }}</a>
                        @else
                            @if(!empty($authUser))
                                <button type="button" class="js-follow-upcoming-course btn btn-primary btn-block mt-20" data-path="/upcoming_courses/{{ $course->slug }}/toggleFollow">
                                    Theo dõi
                                </button>
                            @else
                                <a href="/lms/login" class="btn btn-primary btn-block mt-20">Theo dõi</a>
                            @endif
                        @endif

                        <div class="mt-20 d-flex align-items-center justify-content-center text-gray">
                            <i data-feather="bell" width="20" height="20"></i>
                            <span class="ml-5 font-14">Nhận thông báo về khóa học</span>
                        </div>

                        <div class="mt-35">
                            <strong class="d-block text-secondary font-weight-bold">Khóa học hỗ trợ:</strong>

                            {{-- @if($course->downloadable)
                                <div class="mt-20 d-flex align-items-center text-gray">
                                    <i data-feather="download-cloud" width="20" height="20"></i>
                                    <span class="ml-5 font-14 font-weight-500">{{ trans('lms/webinars.downloadable_content') }}</span>
                                </div>
                            @endif

                            @if($course->certificate)
                                <div class="mt-20 d-flex align-items-center text-gray">
                                    <i data-feather="award" width="20" height="20"></i>
                                    <span class="ml-5 font-14 font-weight-500">{{ trans('lms/webinars.official_certificate') }}</span>
                                </div>
                            @endif --}}

                            {{-- @if($course->include_quizzes)
                                <div class="mt-20 d-flex align-items-center text-gray">
                                    <i data-feather="file-text" width="20" height="20"></i>
                                    <span class="ml-5 font-14 font-weight-500">{{ trans('lms/quiz.quizzes') }}</span>
                                </div>
                            @endif

                            @if($course->support)
                                <div class="mt-20 d-flex align-items-center text-gray">
                                    <i data-feather="headphones" width="20" height="20"></i>
                                    <span class="ml-5 font-14 font-weight-500">{{ trans('lms/webinars.instructor_support') }}</span>
                                </div>
                            @endif --}}

                            {{-- @if($course->forum)
                                <div class="mt-20 d-flex align-items-center text-gray">
                                    <i data-feather="headphones" width="20" height="20"></i>
                                    <span class="ml-5 font-14 font-weight-500">{{ trans('lms/update.course_forum') }}</span>
                                </div>
                            @endif --}}
                        </div>

                        <div class="mt-40 p-10 rounded-sm border row align-items-center favorites-share-box">
                            @if(!empty($course->publish_date))
                                <div class="col">
                                    <a href="/lms{{ $course->addToCalendarLink() }}" target="_blank" class="d-flex flex-column align-items-center text-center text-gray">
                                        <i data-feather="calendar" width="20" height="20"></i>
                                        <span class="font-12">{{ trans('lms/public.reminder') }}</span>
                                    </a>
                                </div>
                            @endif

                            <div class="col">
                                <a href="/lms/upcoming_courses/{{ $course->slug }}/favorite" id="favoriteToggle" class="d-flex flex-column align-items-center text-gray">
                                    <i data-feather="heart" class="{{ !empty($isFavorite) ? 'favorite-active' : '' }}" width="20" height="20"></i>
                                    <span class="font-12">Yêu thích</span>
                                </a>
                            </div>

                            <div class="col">
                                <a href="/lms#" class="js-share-course d-flex flex-column align-items-center text-gray">
                                    <i data-feather="share-2" width="20" height="20"></i>
                                    <span class="font-12">Chia sẻ</span>
                                </a>
                            </div>
                        </div>

                        <div class="mt-30 text-center">
                            <button type="button" id="webinarReportBtn" class="font-14 text-gray btn-transparent">Báo cáo khóa học</button>
                        </div>
                    </div>
                </div>

                {{-- @if($course->teacher->offline)
                    <div class="rounded-lg shadow-sm mt-35 d-flex">
                        <div class="offline-icon offline-icon-left d-flex align-items-stretch">
                            <div class="d-flex align-items-center">
                                <img src="/assets/default/img/profile/time-icon.png" alt="offline">
                            </div>
                        </div>

                        <div class="p-15">
                            <h3 class="font-16 text-dark-blue">{{ trans('lms/public.instructor_is_not_available') }}</h3>
                            <p class="font-14 font-weight-500 text-gray mt-15">{{ $course->teacher->offline_message }}</p>
                        </div>
                    </div>
                @endif --}}

                <div class="rounded-lg shadow-sm mt-35 px-25 py-20">
                    <h3 class="sidebar-title font-16 text-secondary font-weight-bold">{{ trans('lms/update.course_specifications') }}</h3>

                    <div class="mt-30">
                        @if(!empty($course->publish_date))
                            <div class="mt-20 d-flex align-items-center justify-content-between text-gray">
                                <div class="d-flex align-items-center">
                                    <i data-feather="calendar" width="20" height="20"></i>
                                    <span class="ml-5 font-14 font-weight-500">{{ trans('lms/update.publish_date') }}:</span>
                                </div>
                                <span class="font-14">{{ dateTimeFormat($course->publish_date, 'j M Y | H:i') }}</span>
                            </div>
                        @endif

                        {{-- @if(!empty($course->duration))
                            <div class="mt-20 d-flex align-items-center justify-content-between text-gray">
                                <div class="d-flex align-items-center">
                                    <i data-feather="clock" width="20" height="20"></i>
                                    <span class="ml-5 font-14 font-weight-500">Thời gian:</span>
                                </div>
                                <span class="font-14">{{ convertMinutesToHourAndMinute($course->duration) }} {{ trans('lms/home.hours') }}</span>
                            </div>
                        @endif --}}

                        {{-- @if(!empty($course->sections))
                            <div class="mt-20 d-flex align-items-center justify-content-between text-gray">
                                <div class="d-flex align-items-center">
                                    <i data-feather="layers" width="20" height="20"></i>
                                    <span class="ml-5 font-14 font-weight-500">{{ trans('lms/update.sections') }}:</span>
                                </div>
                                <span class="font-14">{{ $course->sections }}</span>
                            </div>
                        @endif --}}

                        {{-- @if(!empty($course->parts))
                            <div class="mt-20 d-flex align-items-center justify-content-between text-gray">
                                <div class="d-flex align-items-center">
                                    <i data-feather="film" width="20" height="20"></i>
                                    <span class="ml-5 font-14 font-weight-500">{{ trans('lms/public.parts') }}:</span>
                                </div>
                                <span class="font-14">{{ $course->parts }}</span>
                            </div>
                        @endif

                        @if(!empty($course->capacity))
                            <div class="mt-20 d-flex align-items-center justify-content-between text-gray">
                                <div class="d-flex align-items-center">
                                    <i data-feather="users" width="20" height="20"></i>
                                    <span class="ml-5 font-14 font-weight-500">{{ trans('lms/public.capacity') }}:</span>
                                </div>
                                <span class="font-14">{{ $course->capacity }}</span>
                            </div>
                        @endif


                        <div class="mt-20 d-flex align-items-center justify-content-between text-gray">
                            <div class="d-flex align-items-center">
                                <i data-feather="tag" width="20" height="20"></i>
                                <span class="ml-5 font-14 font-weight-500">{{ trans('lms/public.price') }}:</span>
                            </div>
                            <span class="font-14">{{ (!empty($course->price) and $course->price > 0) ? handlePrice($course->price) : trans('lms/public.free') }}</span>
                        </div>

                        @if(!empty($course->course_progress))
                            <div class="mt-20 d-flex align-items-center justify-content-between text-gray">
                                <div class="d-flex align-items-center">
                                    <i data-feather="trending-up" width="20" height="20"></i>
                                    <span class="ml-5 font-14 font-weight-500">{{ trans('lms/update.progress') }}:</span>
                                </div>
                                <span class="font-14">{{ $course->course_progress }}%</span>
                            </div>

                            <div class="progress upcoming-course-progress mt-15">
                                <span class="progress-bar {{ ($course->course_progress < 50) ? 'less-50' : '' }}" style="width: {{ $course->course_progress }}%"></span>
                            </div>
                        @endif --}}

                    </div>
                </div>

                {{-- organization --}}
                @if($course->creator_id != $course->teacher_id)
                    {{-- @include('lms.web.default.course.sidebar_instructor_profile', ['courseTeacher' => $course->creator]) --}}
                @endif
                {{-- teacher --}}
                {{-- @include('lms.web.default.course.sidebar_instructor_profile', ['courseTeacher' => $course->teacher]) --}}
                {{-- ./ teacher --}}

                {{-- tags --}}
                {{-- @if($course->tags->count() > 0)
                    <div class="rounded-lg tags-card shadow-sm mt-35 px-25 py-20">
                        <h3 class="sidebar-title font-16 text-secondary font-weight-bold">{{ trans('lms/public.tags') }}</h3>

                        <div class="d-flex flex-wrap mt-10">
                            @foreach($course->tags as $tag)
                                <a href="/lms" class="tag-item bg-gray200 p-5 font-14 text-gray font-weight-500 rounded">{{ $tag->title }}</a>
                            @endforeach
                        </div>
                    </div>
                @endif --}}

                {{-- ads --}}
                @if(!empty($advertisingBannersSidebar) and count($advertisingBannersSidebar))
                    <div class="row">
                        @foreach($advertisingBannersSidebar as $sidebarBanner)
                            <div class="rounded-lg sidebar-ads mt-35 col-{{ $sidebarBanner->size }}">
                                <a href="/lms{{ $sidebarBanner->link }}">
                                    <img src="{{get_path_lms()}}{{ $sidebarBanner->image }}" class="img-cover rounded-lg" alt="{{ $sidebarBanner->title }}">
                                </a>
                            </div>
                        @endforeach
                    </div>

                @endif
            </div>
        </div>

        {{-- Ads Bannaer --}}
        {{-- @if(!empty($advertisingBanners) and count($advertisingBanners))
            <div class="mt-30 mt-md-50">
                <div class="row">
                    @foreach($advertisingBanners as $banner)
                        <div class="col-{{ $banner->size }}">
                            <a href="/lms{{ $banner->link }}">
                                <img src="{{get_path_lms()}}{{ $banner->image }}" class="img-cover rounded-sm" alt="{{ $banner->title }}">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif --}}
        {{-- ./ Ads Bannaer --}}
    </section>

    <div id="webinarReportModal" class="d-none">
        <h3 class="section-title after-line font-20 text-dark-blue">Báo cáo khóa học này</h3>

        <form action="/lms/upcoming_courses/{{ $course->id }}/report" method="post" class="mt-25">

            <div class="form-group">
                <label class="text-dark-blue font-14">{{ trans('lms/product.reason') }}</label>
                <select id="reason" name="reason" class="form-control">
                    <option value="" selected disabled>{{ trans('lms/product.select_reason') }}</option>

                    {{-- @foreach(getReportReasons() as $reason)
                        <option value="{{ $reason }}">{{ $reason }}</option>
                    @endforeach --}}
                </select>
                <div class="invalid-feedback"></div>
            </div>

            <div class="form-group">
                <label class="text-dark-blue font-14" for="message_to_reviewer">{{ trans('lms/public.message_to_reviewer') }}</label>
                <textarea name="message" id="message_to_reviewer" class="form-control" rows="10"></textarea>
                <div class="invalid-feedback"></div>
            </div>
            <p class="text-gray font-16">{{ trans('lms/product.report_modal_hint') }}</p>

            <div class="mt-30 d-flex align-items-center justify-content-end">
                <button type="button" class="js-course-report-submit btn btn-sm btn-primary">{{ trans('lms/panel.report') }}</button>
                <button type="button" class="btn btn-sm btn-danger ml-10 close-swl">{{ trans('lms/public.close') }}</button>
            </div>
        </form>
    </div>

    {{-- @include('lms.web.default.course.share_modal',['course' => $course]) --}}
@endsection

@push('scripts_bottom')
    <script src="/assets/default/vendors/video/video.min.js"></script>
    <script src="/assets/default/vendors/video/youtube.min.js"></script>
    <script src="/assets/default/vendors/video/vimeo.js"></script>



    <script src="/assets/default/js/parts/comment.min.js"></script>
    <script src="/assets/default/js/parts/video_player_helpers.min.js"></script>
    <script src="/assets/default/js/parts/upcoming_course_show.min.js"></script>
@endpush
