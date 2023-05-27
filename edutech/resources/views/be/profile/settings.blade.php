@extends('admin.layout')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4>

        <div class="row">
            <div class="col-md-12">

                <div class="card mb-4">

                    <div class="card-body">
                        <form id="formAccountSettings" method="POST" action="{{ route('settings.update', $user->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <h5 class="card-header">Profile Details</h5>
                                <!-- Account -->
                                <div class="card-body">
                                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                                        <img src="{{ empty($user->image) ? asset('storage/images/default-image.png') : asset($user->image) }}"
                                            alt="user-avatar" class="d-block rounded" height="100" width="100"
                                            id="uploadedAvatar" />
                                        <div class="button-wrapper">
                                            <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                                <span class="d-none d-sm-block">Upload new photo</span>
                                                <i class="bx bx-upload d-block d-sm-none"></i>
                                                <input type="file" name="image" id="upload"
                                                    class="account-file-input" hidden accept="image/png, image/jpeg" />
                                            </label>
                                            <button type="button"
                                                class="btn btn-outline-secondary account-image-reset mb-4">
                                                <i class="bx bx-reset d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Reset</span>
                                            </button>

                                            <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-0" />
                                <br>
                                <div class="mb-3 col-md-6">
                                    <label for="firstName" class="form-label">Name</label>
                                    <input class="form-control" type="text" id="firstName" name="name"
                                        value="{{ $user->name }}" autofocus />
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input class="form-control" type="text" id="email" name="email"
                                        value="{{ $user->email }}" placeholder="john.doe@example.com" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="phoneNumber">Phone Number</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="phoneNumber" name="phone" class="form-control"
                                            placeholder="" value="{{ $user->phone ?? '' }}" />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="address" name="address"
                                        placeholder="Address" />
                                </div>



                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                            </div>
                        </form>
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Tài khoản mạng xã hội</h5>
                                <div class="card-body">
                                    <p>Hiển thị nội dung từ các tài khoản xã hội trên trang web của bạn</p>
                                    <!-- Social Accounts -->
                                    <div class="d-flex mb-3">
                                        <div class="flex-shrink-0">
                                            <img src="../assets/img/icons/brands/facebook.png" alt="facebook"
                                                class="me-3" height="30" />
                                        </div>
                                        <div class="flex-grow-1 row">
                                            <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                                                <h6 class="mb-0">Facebook</h6>
                                                <small class="text-muted">Not Connected</small>
                                            </div>
                                            <div class="col-4 col-sm-5 text-end">
                                                <button type="button" class="btn btn-icon btn-outline-secondary"
                                                    data-bs-toggle="modal" data-bs-target="#basicModal"
                                                    data-user-id="{{ $user->id }}" data-link-type="facebook">
                                                    <i class="bx bx-link-alt"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <div class="flex-shrink-0">
                                            <img src="../assets/img/icons/brands/twitter.png" alt="twitter"
                                                class="me-3" height="30" />
                                        </div>
                                        <div class="flex-grow-1 row">
                                            <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                                                <h6 class="mb-0">Twitter</h6>
                                                <a href="https://twitter.com/Theme_Selection"
                                                    target="_blank">@ThemeSelection</a>
                                            </div>
                                            <div class="col-4 col-sm-5 text-end">
                                                <button type="button" class="btn btn-icon btn-outline-danger">
                                                    <i class="bx bx-trash-alt"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <div class="flex-shrink-0">
                                            <img src="../assets/img/icons/brands/instagram.png" alt="instagram"
                                                class="me-3" height="30" />
                                        </div>
                                        <div class="flex-grow-1 row">
                                            <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                                                <h6 class="mb-0">instagram</h6>
                                                <a href="https://www.instagram.com/themeselection/"
                                                    target="_blank">@ThemeSelection</a>
                                            </div>
                                            <div class="col-4 col-sm-5 text-end">
                                                <button type="button" class="btn btn-icon btn-outline-danger">
                                                    <i class="bx bx-trash-alt"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <div class="flex-shrink-0">
                                            <img src="../assets/img/icons/brands/github.png" alt="github"
                                                class="me-3" height="30" />
                                        </div>
                                        <div class="flex-grow-1 row">
                                            <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                                                <h6 class="mb-0">Github</h6>
                                                <small class="text-muted">Not Connected</small>
                                            </div>
                                            <div class="col-4 col-sm-5 text-end">
                                                <button type="button" class="btn btn-icon btn-outline-secondary">
                                                    <i class="bx bx-link-alt"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- /Social Accounts -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Account -->
                </div>

            </div>
        </div>
    </div>
@endsection
<div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Thêm liên kết</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <label for="nameBasic" class="form-label">Liên kết</label>
                        <input type="text" id="nameBasic" class="form-control" placeholder="Nhập vào liên kết">
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" id="save-social" class="btn btn-primary save-social" data-id="{{$user->id}}">Lưu thay đổi</button>
            </div>
        </div>
    </div>
</div>
<!-- Page JS -->
<script src="{{ asset('assets/js/pages-account-settings-account.js') }}"></script>
@section('js')
    <script>
        $(document).ready(function() {
            $('.save-social').on('click', function(event) {
                event.preventDefault(); // Prevent default form submission
                var formData = {
                    id: $(this).data('id');
                    link: $('#nameBasic').val()
                }; // Get form data
                var csrfToken = $('meta[name="csrf-token"]').attr(
                'content'); // Get CSRF token from meta tag
                $.ajax({
                    url: '/settings-social/' + formData.id,
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken // Set CSRF token in header
                    },
                    data: formData,
                    success: function(response) {
                        // Handle success response
                        $('#basicModal').modal('hide'); // Hide modal
                        // Add any other actions you want to perform after successful save
                    },
                    error: function(xhr) {
                        // Handle error response
                        console.log(xhr.responseText);
                        // Add any other actions you want to perform after error
                    }
                });
            });
        });
    </script>
@endsection
