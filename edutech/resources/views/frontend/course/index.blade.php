@extends('frontend.app')

@section('content')
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row mx-0 justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center position-relative mb-5">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">KHÓA HỌC</h6>
                    <h1 class="display-4">CÁC KHÓA HỌC CỦA CHÚNG TÔI</h1>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($courses as $course)
            <div class="col-lg-4 col-md-6 pb-4">
                <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="{{route('detail.course', $course->id)}}">
                    <img class="img-fluid" src="{{asset($course->image)}}" alt="">
                    <div class="courses-text">
                        <h4 class="text-center text-white px-3">{{$course->title}}</h4>
                        <div class="border-top w-100 mt-3">
                            <div class="d-flex justify-content-between p-4">
                                <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                                <span class="text-white"><i class="fa fa-star mr-2"></i>4.5
                                    <small>(250)</small></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            {{-- <div class="col-12">
                <nav aria-label="Page navigation">
                    <ul class="pagination pagination-lg justify-content-center mb-0">
                      <li class="page-item disabled">
                        <a class="page-link rounded-0" href="#" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                          <span class="sr-only">Previous</span>
                        </a>
                      </li>
                      <li class="page-item active"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link rounded-0" href="#" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                          <span class="sr-only">Next</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
            </div> --}}
        </div>
    </div>
</div>
@endsection
