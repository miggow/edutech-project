@extends('admin.layout')
@section('content')
    <section class="section section container-xxl flex-grow-1 container-p-y">
        <div class="section-header">
            <h1>Danh sách danh mục</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            {{-- @if ($authUser->can('admin_webinars_export_excel')) --}}
                            <div class="text-right">
                                <a href="{{ route('admin.category.create') }}" class="btn btn-primary">Thêm danh mục</a>
                            </div>
                            {{-- @endif --}}
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped font-14 ">
                                    <tr>
                                        <th>ID</th>
                                        <th class="text-left">Tên danh mục</th>
                                        <th class="text-left">Người tạo</th>
                                        <th>Ngày tạo</th>
                                        <th>Ngày sửa</th>
                                        <th>Trạng thái</th>
                                        <th width="120">Hành động</th>
                                    </tr>
                                    @foreach ($categories as $category)
                                        <tr class="text-center">
                                            <td>{{ $category->id }}</td>
                                            <td width="18%" class="text-left">
                                                {{ $category->name }}
                                            </td>
                                            <td width="18%" class="text-left">{{ $category->user->name }}</td>
                                            <td class="font-12">
                                                {{ \Carbon\Carbon::parse($category->created_at)->format('d/m/Y') }}</td>

                                            <td class="font-12">
                                                {{ \Carbon\Carbon::parse($category->updated_at)->format('d/m/Y') }}</td>
                                            <td>
                                                <div class="text-success font-600-bold">
                                                    {{ $category->status == 1 ? 'Đang hoạt động' : 'Ngưng hoạt động' }}
                                                </div>
                                            </td>
                                            <td width="200" class="">
                                                <div class="btn-group dropdown table-actions">
                                                    <button type="button" class="btn-transparent dropdown-toggle"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v"></i>
                                                    </button>
                                                    <div class="dropdown-menu text-left webinars-lists-dropdown">
                                                        {{-- <a href="#" target="_blank"
                                                        class="d-flex align-items-center text-dark text-decoration-none btn-transparent btn-sm text-primary mt-1 ">
                                                        <i class="fa fa-bell"></i>
                                                        <span class="ml-2">Gửi thông báo</span>
                                                    </a> --}}

                                                        {{-- <a href="#" target="_blank"
                                                        class="d-flex align-items-center text-dark text-decoration-none btn-transparent btn-sm text-primary mt-1 "
                                                        title="Học viên">
                                                        <i class="fa fa-users"></i>
                                                        <span class="ml-2">Học viên</span>
                                                    </a> --}}

                                                        {{-- <a href="#" target="_blank"
                                                        class="d-flex align-items-center text-dark text-decoration-none btn-transparent btn-sm text-primary mt-1 "
                                                        title="Học viên">
                                                        <i class="fa fa-chart-pie"></i>
                                                        <span class="ml-2">Thống kê</span>
                                                    </a> --}}

                                                        {{-- <a href="#" target="_blank"
                                                        class="d-flex align-items-center text-dark text-decoration-none btn-transparent btn-sm text-primary mt-1"
                                                        title="Gửi tin nhắn đến giảng viên">
                                                        <i class="fa fa-comment"></i>
                                                        <span class="ml-2">Gửi tin nhắn</span>
                                                    </a> --}}

                                                        <a href="{{ route('admin.category.edit', $category->id) }}"
                                                            class="d-flex align-items-center text-dark text-decoration-none btn-transparent btn-sm text-primary mt-1 "
                                                            title="Chỉnh sửa">
                                                            <i class="fa fa-edit"></i>
                                                            <span class="ml-2">Chỉnh sửa</span>
                                                        </a>
                                                        <button
                                                            class="btn-transparent text-primary d-flex align-items-center text-dark text-decoration-none btn-transparent btn-sm mt-1 trigger--fire-modal-1"
                                                            data-confirm="Bạn có chắc? | Bạn có muốn tiếp tục không?"
                                                            data-confirm-href="{{ route('admin.category.delete', $category->id) }}"
                                                            data-confirm-text-yes="Có" data-confirm-text-cancel="Bỏ qua">
                                                            <i class="fa fa-times"></i><span class="ml-2">Xóa</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach


                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
