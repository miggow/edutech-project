@extends('admin.layout')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Danh sách khóa học</h4>
        {{-- @if ($authUser->can('admin_webinars_export_excel')) --}}
        <div class="text-right">
            <a href="{{ route('admin.course.create') }}" class="btn btn-primary">Thêm khóa học</a>
        </div>
        {{-- @endif --}}
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        {{-- <th>ID</th> --}}
                        <th class="text-left">Tiêu đề</th>
                        <th class="text-left">Giảng viên</th>
                        <th>Giá</th>
                        <th>Giá khuyến mãi</th>
                        {{-- <th>{{trans('lms/admin/main.sales')}}</th>
                                        <th>{{trans('lms/admin/main.income')}}</th> --}}
                        <th>Học viên</th>
                        <th>Ngày tạo</th>
                        {{-- @if ($classesType == 'webinar') --}}
                        {{-- @else --}}
                        <th>Ngày sửa</th>
                        {{-- @endif --}}
                        <th>Trạng thái</th>
                        <th width="120">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                        <tr>

                            <td>
                                <strong>
                                    {{ $course->title }}
                                </strong>
                                <div class="text-small">
                                    {{ empty($course->category) ? '' : $course->category->name }}</div>
                            </td>
                            <td class="text-left">Huỳnh Thị Liên</td>
                            <td>{{ $course->current_price == 0 ? 'Miễn phí' : number_format($course->current_price, 0, '', '.') }}
                            </td>
                            <td>{{ number_format($course->previous_price, 0, '', '.') ?? 'Không có' }}</td>
                            <td class="font-12">
                                <a href="#" target="_blank" class="">3</a>
                            </td>
                            <td class="font-12">
                                {{ \Carbon\Carbon::parse($course->created_at)->format('d/m/Y') }}</td>

                            <td class="font-12">
                                {{ \Carbon\Carbon::parse($course->updated_at)->format('d/m/Y') }}</td>
                            <td>
                                <div
                                    class="{{ $course->status == 1 ? 'badge bg-label-success me-1' : 'badge bg-label-warning me-1' }}">
                                    {{ $course->status == 1 ? 'Đang hoạt động' : 'Ngưng hoạt động' }}</div>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('admin.course.edit', $course->id) }}"><i
                                                class="bx bx-edit-alt me-2"></i>Edit</a>
                                        <a class="dropdown-item" href="{{ route('admin.course.delete', $course->id) }}"><i
                                                class="bx bx-trash me-2"></i>Delete</a>
                                        <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#basicModal"
                                            data-id="{{ $course->id }}"><i class='bx bxs-folder-plus me-2'></i>Module
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameBasic" class="form-label">Name</label>
                            <input type="text" id="nameBasic" class="form-control" placeholder="Enter Name">
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="emailBasic" class="form-label">Email</label>
                            <input type="email" id="emailBasic" class="form-control" placeholder="xxxx@xxx.xx">
                        </div>
                        <div class="col mb-0">
                            <label for="dobBasic" class="form-label">DOB</label>
                            <input type="date" id="dobBasic" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
