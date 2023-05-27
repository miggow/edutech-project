@extends('admin.layout')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Tên lớp học</h4>

        <!-- Tabs -->
        <div class="row">
            <div class="col-xl-12">
                <div class="nav-align-top mb-4">
                    <ul class="nav nav-pills mb-3" role="tablist">
                        <li class="nav-item">
                            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-pills-top-home" aria-controls="navs-pills-top-home"
                                aria-selected="true">
                                Lớp học
                            </button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-pills-top-profile" aria-controls="navs-pills-top-profile"
                                aria-selected="false">
                                Bài giảng
                            </button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-pills-top-messages" aria-controls="navs-pills-top-messages"
                                aria-selected="false">
                                Classroom
                            </button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-pills-top-chat" aria-controls="navs-pills-top-chat"
                                aria-selected="false">
                                Chat
                            </button>
                        </li>
                    </ul>
                    {{-- Thông tin 1 học sinh  --}}
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="navs-pills-top-home" role="tabpanel">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <img class="me-2 my-2" src="../assets1/img/avatars/default-image.jpg" alt="instagram">
                                <div> Học sinh 1</div>
                            </button>
                        </div>
                        {{-- Bài giảng --}}
                        <div class="tab-pane fade" id="navs-pills-top-profile" role="tabpanel">
                            <button class="btn btn-primary mb-2">Tạo bài giảng</button>
                            <div class="col-md col-8">
                                <div class="card mb-3">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img class="me-2 my-2" src="../assets1/img/avatars/default-image.jpg"
                                                alt="instagram">
                                        </div>
                                        <div class="col-md-8">
                                            <a href="{{ route('baigiang.detail') }}">
                                                <div class="card-body">
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">
                                                        This is a wider card with supporting text below as a natural lead-in
                                                        to
                                                        additional content. This content
                                                        is a
                                                        little bit longer.
                                                    </p>
                                                    <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                            ago</small></p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="navs-pills-top-messages" role="tabpanel">
                            <div class="col-md">
                                <div class="card mb-3">
                                    <div class="row g-0">
                                        <div class="col-md-12">
                                            <div class="card-body">
                                                <h5 class="card-title">Chào mừng bạn đến với lớp học</h5>
                                                <p class="card-text">
                                                    Đây là một lớp học vui nhộn
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1" class="form-label">Hãy gửi gì đó đến
                                        lớp</label>
                                    <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <a href="">Đăng</a>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thông tin học sinh</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center"><img class="me-2 my-2 " src="../assets1/img/avatars/default-image.jpg"
                            alt="instagram"></div>
                    <div class="">Tên:</div>
                    <div class="">Email:</div>
                    <div class="">Số điện thoại:</div>
                    <div class="">Địa chỉ:</div>
                    <a class="footer-link" href=""><i class='bx bxl-facebook-square bx-lg'></i></a>
                    <a href="footer-link"><i class='bx bxl-instagram-alt bx-lg'></i></a>
                    <a href="footer-link"><i class='bx bxl-twitter bx-lg'></i></a>
                    <a href="footer-link"><i class='bx bxl-github bx-lg'></i></a>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="/ckeditor/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('textarea[name="content"]'), {
                toolbar: ['undo', 'redo',
                    '|', 'heading',
                    '|', 'fontfamily', 'fontsize', 'fontColor', 'fontBackgroundColor',
                    '|', 'bold', 'italic', 'strikethrough', 'subscript', 'superscript', 'code',
                    '|', 'link', 'uploadImage', 'blockQuote', 'codeBlock',
                    '|', 'bulletedList', 'numberedList', 'todoList', 'outdent', 'indent'
                ],
                shouldNotGroupWhenFull: false
            })
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
