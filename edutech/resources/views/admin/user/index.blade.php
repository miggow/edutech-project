@extends('admin.layout')
@section('content')
    <section class="section container-xxl flex-grow-1 container-p-y">
        <div class="section-header">
            <h1>Danh sách người dùng</h1>
        </div>

        <div class="section-body ">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-header">
                                {{-- @if ($authUser->can('admin_webinars_export_excel')) --}}
                                <div class="text-right">
                                    <a href="{{ route('admin.user.create') }}" class="btn btn-primary">Thêm người dùng</a>
                                </div>
                                {{-- @endif --}}
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped font-14 ">
                                    <tr>
                                        <th>ID</th>
                                        <th class="text-left">Tên</th>
                                        <th class="text-left">Chức vụ</th>
                                        {{-- <th>{{trans('lms/admin/main.sales')}}</th>
                                        <th>{{trans('lms/admin/main.income')}}</th> --}}
                                        <th>Email</th>
                                        <th>Số điện thoại</th>
                                        {{-- @if ($classesType == 'webinar') --}}
                                        {{-- @else --}}

                                        {{-- @endif --}}
                                        <th>Trạng thái</th>
                                        <th width="120">Hành động</th>
                                    </tr>
                                    @foreach ($users as $user)
                                        <tr>
                                            {{-- id --}}
                                            <td>{{ $user->id }}</td>
                                            {{-- Name --}}
                                            <td class="text-left">{{ $user->name }}</td>
                                            @if ($user->role == 0)
                                                <td class="text-left">Học sinh</td>
                                            @elseif($user->role == 1)
                                                <td class="text-left">Giảng viên</td>
                                            @elseif($user->role == 2)
                                                <td class="text-left">Admin</td>
                                            @endif
                                            {{-- Email --}}
                                            <td>{{ $user->email }}</td>
                                            {{-- phone --}}
                                            <td>{{ $user->phone }}</td>
                                            @if ($user->status == 0)
                                                <td>Ngưng hoạt động</td>
                                            @else
                                                <td>Hoạt động</td>
                                            @endif
                                            
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown"><i
                                                            class="bx bx-dots-vertical-rounded"></i></button>
                                                    <div class="dropdown-menu">
                                                       
                                                        <a href="{{ route('admin.user.edit.status', $user->id) }}"
                                                            class="d-flex align-items-center text-dark text-decoration-none btn-transparent btn-sm text-primary mt-1 "
                                                            title="Quản lý truy cập">
                                                            <i class="fa fa-edit"></i>
                                                            <span class="ml-2">Quản lý truy cập</span>
                                                        </a>
                                                        <a href="{{ route('admin.user.edit', $user->id) }}"
                                                            class="d-flex align-items-center text-dark text-decoration-none btn-transparent btn-sm text-primary mt-1 "
                                                            title="Vai trò người dùng">
                                                            <i class="fa fa-edit"></i>
                                                            <span class="ml-2">Vai trò người dùng</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>



                                        </tr>
                                    @endforeach
                                    {{-- mẫu --}}
                                    {{-- <tr class="text-center">
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
                                    </tr> --}}
                                    {{-- @foreach ($webinars as $webinar)
                                        <tr class="text-center">
                                            <td>{{ $webinar->id }}</td>
                                            <td width="18%" class="text-left">
                                                <a class="text-primary mt-0 mb-1 font-weight-bold" href="{{ $webinar->getUrl() }}">{{ $webinar->title }}</a>
                                                @if (!empty($webinar->category->title))
                                                    <div class="text-small">{{ $webinar->category->title }}</div>
                                                @else
                                                    <div class="text-small text-warning">{{trans('lms/admin/main.no_category')}}</div>
                                                @endif
                                            </td>

                                            <td class="text-left">{{ $webinar->teacher->full_name }}</td>

                                            <td>
                                                @if (!empty($webinar->price) and $webinar->price > 0)
                                                    <span class="mt-0 mb-1">
                                                        {{ handlePrice($webinar->price, true, true) }}
                                                    </span>

                                                    @if ($webinar->getDiscountPercent() > 0)
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

                                                @if ($classesType == 'webinar')
                                                    <div class="text-small font-600-bold">{{trans('lms/admin/main.capacity')}} : {{ $webinar->getWebinarCapacity() }}</div>
                                                @endif
                                            </td>

                                            <td>{{ addCurrencyToPrice($webinar->sales->sum('total_amount')) }}</td>

                                            <td class="font-12">
                                                <a href="/lms/admin/webinars/{{ $webinar->id }}/students" target="_blank" class="">{{ $webinar->sales->count() }}</a>
                                            </td>

                                            <td class="font-12">{{ dateTimeFormat($webinar->created_at, 'Y M j | H:i') }}</td>

                                            @if ($classesType == 'webinar')
                                                <td class="font-12">{{ dateTimeFormat($webinar->start_date, 'Y M j | H:i') }}</td>
                                            @else
                                                <td class="font-12">{{ dateTimeFormat($webinar->updated_at, 'Y M j | H:i') }}</td>
                                            @endif

                                            <td>
                                                @switch($webinar->status)
                                                    @case(\App\Models\LMS\Webinar::$active)
                                                    <div class="text-success font-600-bold">{{ trans('lms/admin/main.published') }}</div>
                                                    @if ($webinar->isWebinar())
                                                        @if ($webinar->isProgressing())
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
                                                        @if ($authUser->can('admin_webinar_notification_to_students'))
                                                            <a href="/lms/admin/webinars/{{ $webinar->id }}/sendNotification" target="_blank" class="d-flex align-items-center text-dark text-decoration-none btn-transparent btn-sm text-primary mt-1 ">
                                                                <i class="fa fa-bell"></i>
                                                                <span class="ml-2">{{ trans('lms/notification.send_notification') }}</span>
                                                            </a>
                                                        @endif

                                                        @if ($authUser->can('admin_webinar_students_lists'))
                                                            <a href="/lms/admin/webinars/{{ $webinar->id }}/students" target="_blank" class="d-flex align-items-center text-dark text-decoration-none btn-transparent btn-sm text-primary mt-1 " title="{{ trans('lms/admin/main.students') }}">
                                                                <i class="fa fa-users"></i>
                                                                <span class="ml-2">{{ trans('lms/admin/main.students') }}</span>
                                                            </a>
                                                        @endif

                                                        @if ($authUser->can('admin_webinar_statistics'))
                                                            <a href="/lms/admin/webinars/{{ $webinar->id }}/statistics" target="_blank" class="d-flex align-items-center text-dark text-decoration-none btn-transparent btn-sm text-primary mt-1 " title="{{ trans('lms/admin/main.students') }}">
                                                                <i class="fa fa-chart-pie"></i>
                                                                <span class="ml-2">{{ trans('lms/update.statistics') }}</span>
                                                            </a>
                                                        @endif

                                                        @if ($authUser->can('admin_support_send'))
                                                            <a href="/lms/admin/supports/create?user_id={{ $webinar->teacher->id }}" target="_blank" class="d-flex align-items-center text-dark text-decoration-none btn-transparent btn-sm text-primary mt-1" title="{{ trans('lms/admin/main.send_message_to_teacher') }}">
                                                                <i class="fa fa-comment"></i>
                                                                <span class="ml-2">{{ trans('lms/site.send_message') }}</span>
                                                            </a>
                                                        @endif

                                                        @if ($authUser->can('admin_webinars_edit'))
                                                            <a href="/lms/admin/webinars/{{ $webinar->id }}/edit" target="_blank" class="d-flex align-items-center text-dark text-decoration-none btn-transparent btn-sm text-primary mt-1 " title="{{ trans('lms/admin/main.edit') }}">
                                                                <i class="fa fa-edit"></i>
                                                                <span class="ml-2">{{ trans('lms/admin/main.edit') }}</span>
                                                            </a>
                                                        @endif

                                                        @if ($authUser->can('admin_webinars_delete'))
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
