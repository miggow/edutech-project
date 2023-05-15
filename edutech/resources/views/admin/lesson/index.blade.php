@extends('admin.layout')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Danh sách bài học</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            {{-- @if ($authUser->can('admin_webinars_export_excel')) --}}
                            <div class="text-right">
                                <a href="{{ route('admin.lesson.create', $module->id) }}" class="btn btn-primary">Thêm bài học</a>
                            </div>
                            {{-- @endif --}}
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped font-14 ">
                                    <tr>
                                        <th>ID</th>
                                        <th class="text-left">Tên Bài học</th>
                                        <th>Thời lượng</th>
                                        <th>Ngày tạo</th>
                                        <th>Ngày sửa</th>
                                        <th width="120">Hành động</th>
                                    </tr>
                                    @foreach ($lessons as $lesson)
                                        <tr class="text-center">
                                            <td>{{ $lesson->id }}</td>
                                            <td width="18%" class="text-left">
                                                {{ $lesson->name }}
                                            </td>
                                            <td>{{ $lesson->duration }}</td>
                                            <td class="font-12">
                                                {{ \Carbon\Carbon::parse($lesson->created_at)->format('d/m/Y') }}</td>

                                            <td class="font-12">
                                                {{ \Carbon\Carbon::parse($lesson->updated_at)->format('d/m/Y') }}</td>

                                            <td width="200" class="">
                                                <div class="btn-group dropdown table-actions">
                                                    <button type="button" class="btn-transparent dropdown-toggle"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v"></i>
                                                    </button>
                                                    <div class="dropdown-menu text-left webinars-lists-dropdown">
                                                        <a href="{{ route('admin.lesson.edit', $lesson->id) }}"
                                                            class="d-flex align-items-center text-dark text-decoration-none btn-transparent btn-sm text-primary mt-1 "
                                                            title="Chỉnh sửa">
                                                            <i class="fa fa-edit"></i>
                                                            <span class="ml-2">Chỉnh sửa</span>
                                                        </a>

                                                        <button
                                                            class="btn-transparent text-primary d-flex align-items-center text-dark text-decoration-none btn-transparent btn-sm mt-1 trigger--fire-modal-1"
                                                            data-confirm="Bạn có chắc? | Bạn có muốn tiếp tục không?"
                                                            data-confirm-href="{{ route('admin.lesson.delete', $lesson->id) }}"
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
