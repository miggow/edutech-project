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
                                <a href="{{ route('admin.module.create', $course->id) }}" class="btn btn-primary">Thêm module</a>
                            </div>
                            {{-- @endif --}}
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped font-14 ">
                                    <tr>
                                        <th>ID</th>
                                        <th class="text-left">Tên module</th>
                                        <th>Ngày tạo</th>
                                        <th>Ngày sửa</th>
                                        <th width="120">Hành động</th>
                                    </tr>
                                    @foreach ($modules as $module)
                                        <tr class="text-left">
                                            <td>{{ $module->id }}</td>
                                            <td width="18%" class="text-left">
                                                {{ $module->name }}
                                            </td>
                                            <td class="font-12">
                                                {{ \Carbon\Carbon::parse($module->created_at)->format('d/m/Y') }}</td>

                                            <td class="font-12">
                                                {{ \Carbon\Carbon::parse($module->updated_at)->format('d/m/Y') }}</td>

                                            



                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                                    <div class="dropdown-menu">
                                                        <a href="{{ route('admin.module.edit', $module->id) }}"
                                                            class="d-flex align-items-center text-dark text-decoration-none btn-transparent btn-sm text-primary mt-1 "
                                                            title="Chỉnh sửa">
                                                            <i class="fa fa-edit"></i>
                                                            <span class="ml-2">Chỉnh sửa</span>
                                                        </a>
                                                        <a href="{{route('admin.lesson.index', $module->id)}}"
                                                            class="d-flex align-items-center text-dark text-decoration-none btn-transparent btn-sm text-primary mt-1 "
                                                            title="Lesson">
                                                            <i class="fa fa-edit"></i>
                                                            <span class="ml-2">Bài học</span>
                                                        </a>
                                                        <a
                                                            class="btn-transparent text-primary d-flex align-items-center text-dark text-decoration-none btn-transparent btn-sm mt-1 trigger--fire-modal-1"
                                                            data-confirm="Bạn có chắc? | Bạn có muốn tiếp tục không?"
                                                            data-confirm-href="{{ route('admin.module.delete', $module->id) }}"
                                                            data-confirm-text-yes="Có" data-confirm-text-cancel="Bỏ qua">
                                                            <i class="fa fa-times"></i><span class="ml-2">Xóa</span>
                                                        </a>
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
