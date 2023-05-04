@extends('admin.layout')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Danh sách khóa học</h1>
            <div class="section-header-breadcrumb">
                {{-- <div class="breadcrumb-item active"><a href="/lms/admin/">{{trans('lms/admin/main.dashboard')}}</a>
                </div>
                <div class="breadcrumb-item"></div>

                <div class="breadcrumb-item"></div> --}}
            </div>
        </div>

        <div class="section-body">

            {{-- <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-file-video"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>{{trans('lms/admin/main.total')}} {{ trans('lms/admin/main.type_'.$classesType.'s') }}</h4>
                            </div>
                            <div class="card-body">
                                {{ $totalWebinars }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="fas fa-eye"></i>
                        </div>

                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>{{trans('lms/admin/main.pending_review')}} {{ trans('lms/admin/main.type_'.$classesType.'s') }}</h4>
                            </div>
                            <div class="card-body">
                                {{ $totalPendingWebinars }}
                            </div>
                        </div>
                    </div>
                </div>

                @if($classesType == 'webinar')
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-info">
                                <i class="fas fa-history"></i>
                            </div>

                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>{{trans('lms/admin/main.inprogress_live_classes')}}</h4>
                                </div>
                                <div class="card-body">
                                    {{ $inProgressWebinars }}
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-info">
                                <i class="fas fa-history"></i>
                            </div>

                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>{{trans('lms/admin/main.total_durations')}}</h4>
                                </div>
                                <div class="card-body">
                                    {{ convertMinutesToHourAndMinute($totalDurations) }} {{ trans('lms/home.hours') }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-dollar-sign"></i></div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>{{trans('lms/admin/main.total_sales')}}</h4>
                            </div>
                            <div class="card-body">
                                {{ $totalSales }}
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <section class="card">
                <div class="card-body">
                    <form method="get" class="mb-0">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">Tìm kiếm</label>
                                    <input name="title" type="text" class="form-control" value="{{ request()->get('title') }}">
                                </div>
                            </div>

                            {{-- <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">{{trans('lms/admin/main.start_date')}}</label>
                                    <div class="input-group">
                                        <input type="date" id="from" class="text-center form-control" name="from" value="{{ request()->get('from') }}" placeholder="Start Date">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">{{trans('lms/admin/main.end_date')}}</label>
                                    <div class="input-group">
                                        <input type="date" id="to" class="text-center form-control" name="to" value="{{ request()->get('to') }}" placeholder="End Date">
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">{{trans('lms/admin/main.filters')}}</label>
                                    <select name="sort" data-plugin-selectTwo class="form-control populate">
                                        <option value="">{{trans('lms/admin/main.filter_type')}}</option>
                                        <option value="has_discount" @if(request()->get('sort') == 'has_discount') selected @endif>{{trans('lms/admin/main.discounted_classes')}}</option>
                                        <option value="sales_asc" @if(request()->get('sort') == 'sales_asc') selected @endif>{{trans('lms/admin/main.sales_ascending')}}</option>
                                        <option value="sales_desc" @if(request()->get('sort') == 'sales_desc') selected @endif>{{trans('lms/admin/main.sales_descending')}}</option>
                                        <option value="price_asc" @if(request()->get('sort') == 'price_asc') selected @endif>{{trans('lms/admin/main.Price_ascending')}}</option>
                                        <option value="price_desc" @if(request()->get('sort') == 'price_desc') selected @endif>{{trans('lms/admin/main.Price_descending')}}</option>
                                        <option value="income_asc" @if(request()->get('sort') == 'income_asc') selected @endif>{{trans('lms/admin/main.Income_ascending')}}</option>
                                        <option value="income_desc" @if(request()->get('sort') == 'income_desc') selected @endif>{{trans('lms/admin/main.Income_descending')}}</option>
                                        <option value="created_at_asc" @if(request()->get('sort') == 'created_at_asc') selected @endif>{{trans('lms/admin/main.create_date_ascending')}}</option>
                                        <option value="created_at_desc" @if(request()->get('sort') == 'created_at_desc') selected @endif>{{trans('lms/admin/main.create_date_descending')}}</option>
                                        <option value="updated_at_asc" @if(request()->get('sort') == 'updated_at_asc') selected @endif>{{trans('lms/admin/main.update_date_ascending')}}</option>
                                        <option value="updated_at_desc" @if(request()->get('sort') == 'updated_at_desc') selected @endif>{{trans('lms/admin/main.update_date_descending')}}</option>
                                    </select>
                                </div>
                            </div>
 --}}

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">Giảng viên</label>
                                    <select name="teacher_ids[]" multiple="multiple" data-search-option="just_teacher_role" class="form-control search-user-select2"
                                            data-placeholder="Search teachers">

                                        {{-- @if(!empty($teachers) and $teachers->count() > 0)
                                            @foreach($teachers as $teacher)
                                                <option value="{{ $teacher->id }}" selected>{{ $teacher->full_name }}</option>
                                            @endforeach
                                        @endif --}}
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">Danh mục</label>
                                    <select name="category_id" data-plugin-selectTwo class="form-control populate">
                                        <option value="">Tất cả danh mục</option>

                                        {{-- @foreach($categories as $category)
                                            @if(!empty($category->subCategories) and count($category->subCategories))
                                                <optgroup label="{{  $category->title }}">
                                                    @foreach($category->subCategories as $subCategory)
                                                        <option value="{{ $subCategory->id }}" @if(request()->get('category_id') == $subCategory->id) selected="selected" @endif>{{ $subCategory->title }}</option>
                                                    @endforeach
                                                </optgroup>
                                            @else
                                                <option value="{{ $category->id }}" @if(request()->get('category_id') == $category->id) selected="selected" @endif>{{ $category->title }}</option>
                                            @endif
                                        @endforeach --}}
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">Trạng thái</label>
                                    <select name="status" data-plugin-selectTwo class="form-control populate">
                                        <option value="">Tất cả trạng thái</option>
                                        {{-- <option value="pending" @if(request()->get('status') == 'pending') selected @endif>{{trans('lms/admin/main.pending_review')}}</option>
                                        @if($classesType == 'webinar')
                                            <option value="active_not_conducted" @if(request()->get('status') == 'active_not_conducted') selected @endif>{{trans('lms/admin/main.publish_not_conducted')}}</option>
                                            <option value="active_in_progress" @if(request()->get('status') == 'active_in_progress') selected @endif>{{trans('lms/admin/main.publish_inprogress')}}</option>
                                            <option value="active_finished" @if(request()->get('status') == 'active_finished') selected @endif>{{trans('lms/admin/main.publish_finished')}}</option>
                                        @else
                                            <option value="active" @if(request()->get('status') == 'active') selected @endif>{{trans('lms/admin/main.published')}}</option>
                                        @endif
                                        <option value="inactive" @if(request()->get('status') == 'inactive') selected @endif>{{trans('lms/admin/main.rejected')}}</option>
                                        <option value="is_draft" @if(request()->get('status') == 'is_draft') selected @endif>{{trans('lms/admin/main.draft')}}</option> --}}
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group mt-1">
                                    <label class="input-label mb-4"> </label>
                                    <input type="submit" class="text-center btn btn-primary w-100" value="Xem kết quả">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>

            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            {{-- @if($authUser->can('admin_webinars_export_excel')) --}}
                                <div class="text-right">
                                    <a href="{{ route('admin.courses.create') }}" class="btn btn-primary">Thêm khóa học</a>
                                </div>
                            {{-- @endif --}}
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped font-14 ">
                                    <tr>
                                        <th>ID</th>
                                        <th class="text-left">Tiêu đề</th>
                                        <th class="text-left">Giảng viên</th>
                                        <th>Giá</th>
                                        {{-- <th>{{trans('lms/admin/main.sales')}}</th>
                                        <th>{{trans('lms/admin/main.income')}}</th> --}}
                                        <th>Học viên</th>
                                        <th>Ngày tạo</th>
                                        {{-- @if($classesType == 'webinar') --}}
                                        {{-- @else --}}
                                            <th>Ngày sửa</th>
                                        {{-- @endif --}}
                                        <th>Trạng thái</th>
                                        <th width="120">Hành động</th>
                                    </tr>

                                    {{-- mẫu --}}
                                    <tr class="text-center">
                                        <td>2010</td>
                                        <td width="18%" class="text-left">
                                            <a class="text-primary mt-0 mb-1 font-weight-bold"
                                                href="https://edulms.di4l.vn/lms/course/bi-quyet-tuyen-chon-nguoi-tai">Bí
                                                quyết tuyển chọn và đãi ngộ người tài</a>
                                            <div class="text-small">Ngôn ngữ</div>
                                        </td>

                                        <td class="text-left">Huỳnh Thị Liên</td>

                                        <td>
                                            Miễn phí
                                        </td>

                                        <td class="font-12">
                                            <a href="https://edulms.di4l.vn/lms/admin/webinars/2010/students"
                                                target="_blank" class="">3</a>
                                        </td>

                                        <td class="font-12">2022 06/21/| 04:14</td>

                                        <td class="font-12">2023 03/29/| 03:48</td>

                                        <td>
                                            <div class="text-success font-600-bold">Đã xuất bản</div>
                                        </td>
                                        <td width="200" class="">
                                            <div class="btn-group dropdown table-actions">
                                                <button type="button"
                                                    class="btn-transparent dropdown-toggle"
                                                    data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </button>
                                                <div
                                                    class="dropdown-menu text-left webinars-lists-dropdown">
                                                    <a href="https://edulms.di4l.vn/lms/admin/webinars/2010/sendNotification"
                                                        target="_blank"
                                                        class="d-flex align-items-center text-dark text-decoration-none btn-transparent btn-sm text-primary mt-1 ">
                                                        <i class="fa fa-bell"></i>
                                                        <span class="ml-2">Gửi thông báo</span>
                                                    </a>

                                                    <a href="https://edulms.di4l.vn/lms/admin/webinars/2010/students"
                                                        target="_blank"
                                                        class="d-flex align-items-center text-dark text-decoration-none btn-transparent btn-sm text-primary mt-1 "
                                                        title="Học viên">
                                                        <i class="fa fa-users"></i>
                                                        <span class="ml-2">Học viên</span>
                                                    </a>

                                                    <a href="https://edulms.di4l.vn/lms/admin/webinars/2010/statistics"
                                                        target="_blank"
                                                        class="d-flex align-items-center text-dark text-decoration-none btn-transparent btn-sm text-primary mt-1 "
                                                        title="Học viên">
                                                        <i class="fa fa-chart-pie"></i>
                                                        <span class="ml-2">Thống kê</span>
                                                    </a>

                                                    <a href="https://edulms.di4l.vn/lms/admin/supports/create?user_id=929"
                                                        target="_blank"
                                                        class="d-flex align-items-center text-dark text-decoration-none btn-transparent btn-sm text-primary mt-1"
                                                        title="Gửi tin nhắn đến giảng viên">
                                                        <i class="fa fa-comment"></i>
                                                        <span class="ml-2">Gửi tin nhắn</span>
                                                    </a>

                                                    <a href="https://edulms.di4l.vn/lms/admin/webinars/2010/edit"
                                                        target="_blank"
                                                        class="d-flex align-items-center text-dark text-decoration-none btn-transparent btn-sm text-primary mt-1 "
                                                        title="Chỉnh sửa">
                                                        <i class="fa fa-edit"></i>
                                                        <span class="ml-2">Chỉnh sửa</span>
                                                    </a>

                                                    <button
                                                        class="btn-transparent text-primary d-flex align-items-center text-dark text-decoration-none btn-transparent btn-sm mt-1 trigger--fire-modal-1"
                                                        data-confirm="Bạn có chắc? | Bạn có muốn tiếp tục không?"
                                                        data-confirm-href="/lms/admin/webinars/2010/delete"
                                                        data-confirm-text-yes="Có"
                                                        data-confirm-text-cancel="Bỏ qua">
                                                        <i class="fa fa-times"></i><span
                                                            class="ml-2">admin/main.delete</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    {{-- @foreach($webinars as $webinar)
                                        <tr class="text-center">
                                            <td>{{ $webinar->id }}</td>
                                            <td width="18%" class="text-left">
                                                <a class="text-primary mt-0 mb-1 font-weight-bold" href="{{ $webinar->getUrl() }}">{{ $webinar->title }}</a>
                                                @if(!empty($webinar->category->title))
                                                    <div class="text-small">{{ $webinar->category->title }}</div>
                                                @else
                                                    <div class="text-small text-warning">{{trans('lms/admin/main.no_category')}}</div>
                                                @endif
                                            </td>

                                            <td class="text-left">{{ $webinar->teacher->full_name }}</td>

                                            <td>
                                                @if(!empty($webinar->price) and $webinar->price > 0)
                                                    <span class="mt-0 mb-1">
                                                        {{ handlePrice($webinar->price, true, true) }}
                                                    </span>

                                                    @if($webinar->getDiscountPercent() > 0)
                                                        <div class="text-danger text-small font-600-bold">{{ $webinar->getDiscountPercent() }}% {{trans('lms/admin/main.off')}}</div>
                                                    @endif
                                                @else
                                                    {{ trans('lms/public.free') }}
                                                @endif
                                            </td>
                                            <td>
                                                <span class="text-primary mt-0 mb-1 font-weight-bold">
                                                    {{ $webinar->sales->count() }}
                                                </span>

                                                @if($classesType == 'webinar')
                                                    <div class="text-small font-600-bold">{{trans('lms/admin/main.capacity')}} : {{ $webinar->getWebinarCapacity() }}</div>
                                                @endif
                                            </td>

                                            <td>{{ addCurrencyToPrice($webinar->sales->sum('total_amount')) }}</td>

                                            <td class="font-12">
                                                <a href="/lms/admin/webinars/{{ $webinar->id }}/students" target="_blank" class="">{{ $webinar->sales->count() }}</a>
                                            </td>

                                            <td class="font-12">{{ dateTimeFormat($webinar->created_at, 'Y M j | H:i') }}</td>

                                            @if($classesType == 'webinar')
                                                <td class="font-12">{{ dateTimeFormat($webinar->start_date, 'Y M j | H:i') }}</td>
                                            @else
                                                <td class="font-12">{{ dateTimeFormat($webinar->updated_at, 'Y M j | H:i') }}</td>
                                            @endif

                                            <td>
                                                @switch($webinar->status)
                                                    @case(\App\Models\LMS\Webinar::$active)
                                                    <div class="text-success font-600-bold">{{ trans('lms/admin/main.published') }}</div>
                                                    @if($webinar->isWebinar())
                                                        @if($webinar->isProgressing())
                                                            <div class="text-warning text-small">({{  trans('lms/webinars.in_progress') }})</div>
                                                        @elseif($webinar->start_date > time())
                                                            <div class="text-danger text-small">({{  trans('lms/admin/main.not_conducted') }})</div>
                                                        @else
                                                            <div class="text-success text-small">({{ trans('lms/public.finished') }})</div>
                                                        @endif
                                                    @endif
                                                    @break
                                                    @case(\App\Models\LMS\Webinar::$isDraft)
                                                    <span class="text-dark">{{ trans('lms/admin/main.is_draft') }}</span>
                                                    @break
                                                    @case(\App\Models\LMS\Webinar::$pending)
                                                    <span class="text-warning">{{ trans('lms/admin/main.waiting') }}</span>
                                                    @break
                                                    @case(\App\Models\LMS\Webinar::$inactive)
                                                    <span class="text-danger">{{ trans('lms/public.rejected') }}</span>
                                                    @break
                                                @endswitch
                                            </td>
                                            <td width="200" class="">
                                                <div class="btn-group dropdown table-actions">
                                                    <button type="button" class="btn-transparent dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v"></i>
                                                    </button>
                                                    <div class="dropdown-menu text-left webinars-lists-dropdown">
                                                        @if($authUser->can('admin_webinar_notification_to_students'))
                                                            <a href="/lms/admin/webinars/{{ $webinar->id }}/sendNotification" target="_blank" class="d-flex align-items-center text-dark text-decoration-none btn-transparent btn-sm text-primary mt-1 ">
                                                                <i class="fa fa-bell"></i>
                                                                <span class="ml-2">{{ trans('lms/notification.send_notification') }}</span>
                                                            </a>
                                                        @endif

                                                        @if($authUser->can('admin_webinar_students_lists'))
                                                            <a href="/lms/admin/webinars/{{ $webinar->id }}/students" target="_blank" class="d-flex align-items-center text-dark text-decoration-none btn-transparent btn-sm text-primary mt-1 " title="{{ trans('lms/admin/main.students') }}">
                                                                <i class="fa fa-users"></i>
                                                                <span class="ml-2">{{ trans('lms/admin/main.students') }}</span>
                                                            </a>
                                                        @endif

                                                        @if($authUser->can('admin_webinar_statistics'))
                                                            <a href="/lms/admin/webinars/{{ $webinar->id }}/statistics" target="_blank" class="d-flex align-items-center text-dark text-decoration-none btn-transparent btn-sm text-primary mt-1 " title="{{ trans('lms/admin/main.students') }}">
                                                                <i class="fa fa-chart-pie"></i>
                                                                <span class="ml-2">{{ trans('lms/update.statistics') }}</span>
                                                            </a>
                                                        @endif

                                                        @if($authUser->can('admin_support_send'))
                                                            <a href="/lms/admin/supports/create?user_id={{ $webinar->teacher->id }}" target="_blank" class="d-flex align-items-center text-dark text-decoration-none btn-transparent btn-sm text-primary mt-1" title="{{ trans('lms/admin/main.send_message_to_teacher') }}">
                                                                <i class="fa fa-comment"></i>
                                                                <span class="ml-2">{{ trans('lms/site.send_message') }}</span>
                                                            </a>
                                                        @endif

                                                        @if($authUser->can('admin_webinars_edit'))
                                                            <a href="/lms/admin/webinars/{{ $webinar->id }}/edit" target="_blank" class="d-flex align-items-center text-dark text-decoration-none btn-transparent btn-sm text-primary mt-1 " title="{{ trans('lms/admin/main.edit') }}">
                                                                <i class="fa fa-edit"></i>
                                                                <span class="ml-2">{{ trans('lms/admin/main.edit') }}</span>
                                                            </a>
                                                        @endif

                                                        @if($authUser->can('admin_webinars_delete'))
                                                            @include('lms.admin.includes.delete_button',[
                                                                    'url' => '/admin/webinars/'.$webinar->id.'/delete',
                                                                    'btnClass' => 'd-flex align-items-center text-dark text-decoration-none btn-transparent btn-sm mt-1',
                                                                    'btnText' => '<i class="fa fa-times"></i><span class="ml-2">'. trans("admin/main.delete") .'</span>'
                                                                    ])
                                                        @endif
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach --}}
                                </table>
                            </div>
                        </div>

                        <div class="card-footer text-center">
                            {{-- {{ $webinars->appends(request()->input())->links() }} --}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection