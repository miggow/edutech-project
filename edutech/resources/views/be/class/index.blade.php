@extends('admin.layout')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            Class
        </h4>
        <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#basicModal">
            Thêm lớp học
        </button>
        <br>
        <div class="row">
            {{-- một lớp học --}}
            <div class="col-md-6 col-xl-4">
                    <a href="{{ route('class.show') }}" class="card bg-primary text-white mb-3">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h5 class="card-title text-white">Tên lớp học</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up.</p>
                        </div>
                    </a>
            </div>
            {{-- <div class="col-md-6 col-xl-4">
                <div class="card bg-secondary text-white mb-3">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title text-white">Secondary card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card bg-success text-white mb-3">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title text-white">Success card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card bg-danger text-white mb-3">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title text-white">Danger card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card bg-warning text-white mb-3">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title text-white">Warning card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card bg-info text-white mb-3">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title text-white">Info card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up.</p>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Thêm lớp học</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameBasic" class="form-label">Tên lớp học</label>
                            <input type="text" id="nameBasic" class="form-control" placeholder="Nhập tên lớp học">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary">Lưu</button>
                </div>
            </div>
        </div>
    </div>
@endsection
