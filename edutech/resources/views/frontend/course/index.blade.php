@extends('frontend.app')

@push('styles_top')
    <link rel="stylesheet" href="/assets/default/vendors/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/default/vendors/select2/select2.min.css">
@endpush
<style>
    @font-face {
        font-family: 'main-font-family';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url(/uploads/241/lms/store/1/fonts/Inter-Regular.ttf) format('woff2');
    }

    @font-face {
        font-family: 'main-font-family';
        font-style: normal;
        font-weight: bold;
        font-display: swap;
        src: url(/uploads/241/lms/store/1/fonts/Inter-Bold.ttf) format('woff2');
    }

    @font-face {
        font-family: 'main-font-family';
        font-style: normal;
        font-weight: 500;
        font-display: swap;
        src: url(/uploads/241/lms/store/1/fonts/Inter-Medium.ttf) format('woff2');
    }

    @font-face {
        font-family: 'rtl-font-family';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url(/uploads/241/lms/store/1/fonts/Vazir-Regular.woff2) format('woff2');
    }

    @font-face {
        font-family: 'rtl-font-family';
        font-style: normal;
        font-weight: bold;
        font-display: swap;
        src: url(/uploads/241/lms/store/1/fonts/Vazir-Bold.woff2) format('woff2');
    }

    @font-face {
        font-family: 'rtl-font-family';
        font-style: normal;
        font-weight: 500;
        font-display: swap;
        src: url(/uploads/241/lms/store/1/fonts/Vazir-Medium.woff2) format('woff2');
    }

    :root {
        --primary: #35115e;
        --primary-border: #ac8400;
        --primary-hover: #fdee79;
    }
</style>
@section('content')
    <div class="container mt-30">

        <section class="mt-lg-50 pt-lg-20 mt-md-40 pt-md-40">
            <form action="/lms/classes" method="get" id="filtersForm">

                <div id="topFilters" class="shadow-lg border border-gray300 rounded-sm p-10 p-md-20">
                    <div class="row align-items-center">
                        <div class="col-lg-3 d-flex align-items-center">
                            <div class="checkbox-button primary-selected">
                                <input type="radio" name="card" id="gridView" value="grid"
                                    @if (empty(request()->get('card')) or request()->get('card') == 'grid') checked="checked" @endif>
                                <label for="gridView" class="bg-white border-0 mb-0">
                                    <i data-feather="grid" width="25" height="25"
                                        class="@if (empty(request()->get('card')) or request()->get('card') == 'grid') text-primary @endif"></i>
                                </label>
                            </div>

                            <div class="checkbox-button primary-selected ml-10">
                                <input type="radio" name="card" id="listView" value="list"
                                    @if (!empty(request()->get('card')) and request()->get('card') == 'list') checked="checked" @endif>
                                <label for="listView" class="bg-white border-0 mb-0">
                                    <i data-feather="list" width="25" height="25"
                                        class="{{ (!empty(request()->get('card')) and request()->get('card') == 'list') ? 'text-primary' : '' }}"></i>
                                </label>
                            </div>
                        </div>

                        <div class="col-lg-6 d-block d-md-flex align-items-center justify-content-end my-25 my-lg-0">
                            <div
                                class="d-flex align-items-center justify-content-between justify-content-md-center mx-0 mx-md-20 my-20 my-md-0">
                                <label class="mb-0 mr-10 cursor-pointer" for="upcoming">Khóa học sắp tới</label>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" name="upcoming" class="custom-control-input" id="upcoming"
                                        @if (request()->get('upcoming', null) == 'on') checked="checked" @endif>
                                    <label class="custom-control-label" for="upcoming"></label>
                                </div>
                            </div>

                            <div class="d-flex align-items-center justify-content-between justify-content-md-center">
                                <label class="mb-0 mr-10 cursor-pointer" for="free">Miễn phí</label>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" name="free" class="custom-control-input" id="free"
                                        @if (request()->get('free', null) == 'on') checked="checked" @endif>
                                    <label class="custom-control-label" for="free"></label>
                                </div>
                            </div>

                            <div
                                class="d-flex align-items-center justify-content-between justify-content-md-center mx-0 mx-md-20 my-20 my-md-0">
                                <label class="mb-0 mr-10 cursor-pointer" for="discount">Giảm giá</label>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" name="discount" class="custom-control-input" id="discount"
                                        @if (request()->get('discount', null) == 'on') checked="checked" @endif>
                                    <label class="custom-control-label" for="discount"></label>
                                </div>
                            </div>

                            <div class="d-flex align-items-center justify-content-between justify-content-md-center">
                                <label class="mb-0 mr-10 cursor-pointer" for="download">Tải xuống</label>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" name="downloadable" class="custom-control-input" id="download"
                                        @if (request()->get('downloadable', null) == 'on') checked="checked" @endif>
                                    <label class="custom-control-label" for="download"></label>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 d-flex align-items-center">
                            <select name="sort" class="form-control font-14">
                                <option disabled selected>Sắp xếp theo</option>
                                <option value="">Tất cả</option>
                                <option value="newest" @if (request()->get('sort', null) == 'newest') selected="selected" @endif>
                                    Mới nhất</option>
                                <option value="expensive" @if (request()->get('sort', null) == 'expensive') selected="selected" @endif>
                                    Tăng dần</option>
                                <option value="inexpensive" @if (request()->get('sort', null) == 'inexpensive') selected="selected" @endif>
                                    Giảm dần</option>
                                <option value="bestsellers" @if (request()->get('sort', null) == 'bestsellers') selected="selected" @endif>
                                    Best Seller</option>
                                <option value="best_rates" @if (request()->get('sort', null) == 'best_rates') selected="selected" @endif>
                                    Đánh giá</option>
                            </select>
                        </div>

                    </div>
                </div>
                <div class="row mt-20">
                    <div class="col-12 col-lg-8">
                        <div class="row">
                            @foreach ($courses as $course)
                                <div class="col-12 col-lg-6 mt-20">
                                    <div class="webinar-card">
                                        <figure>
                                            <div class="image-box">
                                                <span class="badge badge-primary">Khoá học</span>
                                                <a href="{{ route('detail.course', $course->id) }}">
                                                    <img src="{{ asset($course->image) }}" class="img-cover" alt="">
                                                </a>
                                            </div>
                                            <figcaption class="webinar-card-body">


                                                <a href="{{ route('detail.course', $course->id) }}">
                                                    <h3 class="mt-15 webinar-title font-weight-bold font-16 text-dark-blue">
                                                        {{ $course->title }}</h3>
                                                </a>

                                                <span class="d-block font-14 mt-10">trong @if ($course->category)
                                                        <a href="https://edulms.di4l.vn/lms/categories/hoc-thuat/ngon-ngu"
                                                            target="_blank"
                                                            class="text-decoration-underline">{{ $course->category->name }}</a>
                                                    @endif
                                                </span>


                                                <div class="d-flex justify-content-between mt-20">

                                                    <div class="d-flex align-items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                            height="20" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-calendar webinar-icon">
                                                            <rect x="3" y="4" width="18"
                                                                height="18" rx="2" ry="2"></rect>
                                                            <line x1="16" y1="2" x2="16"
                                                                y2="6"></line>
                                                            <line x1="8" y1="2" x2="8"
                                                                y2="6"></line>
                                                            <line x1="3" y1="10" x2="21"
                                                                y2="10"></line>
                                                        </svg>
                                                        <span
                                                            class="date-published font-14 ml-5">{{ \Carbon\Carbon::parse($course->created_at)->format('d/m/Y') }}</span>
                                                    </div>
                                                </div>
                                                <div class="webinar-price-box mt-25">
                                                    @if ($course->current_price == 0)
                                                        <span class="real font-14">Miễn phí</span>
                                                    @else
                                                        <span class="real font-14">{{ $course->current_price }} VNĐ</span>
                                                    @endif
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="mt-20 p-20 rounded-sm shadow-lg border border-gray300 filters-container">
                            <div class="">
                                <h3 class="category-filter-title font-20 font-weight-bold text-dark-blue">Loại</h3>
                                <div class="pt-10">
                                    <div class="d-flex align-items-center justify-content-between mt-20">
                                        <label class="cursor-pointer" for="filterLanguagebundle">
                                            Gói khoá học
                                        </label>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="type[]" id="filterLanguagebundle"
                                                value="bundle" class="custom-control-input">
                                            <label class="custom-control-label" for="filterLanguagebundle"></label>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-20">
                                        <label class="cursor-pointer" for="filterLanguagewebinar">
                                            Lớp học trực tiếp
                                        </label>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="type[]" id="filterLanguagewebinar"
                                                value="webinar" class="custom-control-input">
                                            <label class="custom-control-label" for="filterLanguagewebinar"></label>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-20">
                                        <label class="cursor-pointer" for="filterLanguagecourse">
                                            Khoá học
                                        </label>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="type[]" id="filterLanguagecourse"
                                                value="course" class="custom-control-input">
                                            <label class="custom-control-label" for="filterLanguagecourse"></label>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-20">
                                        <label class="cursor-pointer" for="filterLanguagetext_lesson">
                                            Khoá học văn bản
                                        </label>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="type[]" id="filterLanguagetext_lesson"
                                                value="text_lesson" class="custom-control-input">
                                            <label class="custom-control-label" for="filterLanguagetext_lesson"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-25 pt-25 border-top border-gray300">
                                <h3 class="category-filter-title font-20 font-weight-bold text-dark-blue">Thêm tuỳ chọn
                                </h3>
                                <div class="pt-10">
                                    <div class="d-flex align-items-center justify-content-between mt-20">
                                        <label class="cursor-pointer" for="filterLanguagesubscribe">Chỉ hiển thị đăng
                                            ký</label>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="moreOptions[]" id="filterLanguagesubscribe"
                                                value="subscribe" class="custom-control-input">
                                            <label class="custom-control-label" for="filterLanguagesubscribe"></label>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-20">
                                        <label class="cursor-pointer" for="filterLanguagecertificate_included">Chỉ hiển
                                            thị chứng chỉ đi
                                            kèm</label>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="moreOptions[]"
                                                id="filterLanguagecertificate_included" value="certificate_included"
                                                class="custom-control-input">
                                            <label class="custom-control-label"
                                                for="filterLanguagecertificate_included"></label>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-20">
                                        <label class="cursor-pointer" for="filterLanguagewith_quiz">Chỉ hiển thị các khóa
                                            học có bài kiểm
                                            tra</label>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="moreOptions[]" id="filterLanguagewith_quiz"
                                                value="with_quiz" class="custom-control-input">
                                            <label class="custom-control-label" for="filterLanguagewith_quiz"></label>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-20">
                                        <label class="cursor-pointer" for="filterLanguagefeatured">Chỉ hiển thị các khóa
                                            học nổi
                                            bật</label>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="moreOptions[]" id="filterLanguagefeatured"
                                                value="featured" class="custom-control-input">
                                            <label class="custom-control-label" for="filterLanguagefeatured"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary btn-block mt-30">Lọc</button>
                        </div>
                    </div>
                </div>


            </form>

            <div class="mt-50 pt-30">
                {{-- {{ $webinars->appends(request()->input())->links('lms.vendor.pagination.panel') }} --}}
            </div>
        </section>
    </div>
@endsection

@push('scripts_bottom')
    <script src="/assets/default/vendors/select2/select2.min.js"></script>
    <script src="/assets/default/vendors/swiper/swiper-bundle.min.js"></script>

    <script src="/assets/default/js/parts/categories.min.js"></script>
@endpush
