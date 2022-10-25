<section class="home" id="home" style="background-image: url({{url('/fe/images/bg-home.png')}});">

    <!-- start container -->
    <div class="container position-relative">
        <div class="row">
            <div class="col-lg-12">
                <div class="home-slider" id="home-slider">
                    <div class="item">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="content-item">
                                    <p class="text-warning fw-semibold mb-0">Hello! I AM</p>
                                    <div class="home-title mb-0 fw-bold h1">
                                        <span class="typewrite " data-period="2000"
                                            data-type='[ "{{$home['full_name']}}", "{{$home['position']}}" ]'>
                                            <span class="wrap text-dark"></span>
                                        </span>
                                    </div>
                                    <p class="mt-3 text-muted">{{$home['job_description']}}</p>

                                    <div class="icon-item mt-4">
                                        <div class="d-flex">
                                            <a href="https://www.facebook.com/{{$home['fb']}}">
                                                <div class="social-icon facebook avatar-sm">
                                                    <i class="mdi mdi-facebook"></i>
                                                </div>
                                            </a>
                                            <a href="https://www.instagram.com/{{$home['ig']}}">
                                                <div class="social-icon instagram avatar-sm">
                                                    <i class="mdi mdi-instagram"></i>
                                                </div>
                                            </a>
                                            <a href="https://www.tweeter.com/{{$home['tweeter']}}">
                                                <div class="social-icon twitter avatar-sm">
                                                    <i class="mdi mdi-twitter"></i>
                                                </div>
                                            </a>
                                            <a href="https://www.linkedin.com/{{$home['linkid']}}">
                                                <div class="social-icon linkedin avatar-sm">
                                                    <i class="mdi mdi-linkedin"></i>
                                                </div>
                                            </a>
                                        </div>

                                    </div>

                                    <div class="home-link d-inline-block mt-5">
                                       <!-- <div class="d-flex align-items-center">
                                            <div class="btn-link ">
                                                <a href="" class="text-dark h6">
                                                    <div class="read-link btn-link-warning"><span>See my work
                                                        </span></div>
                                                </a> 
                                            </div>
                                            <div class="btn-link-icon">
                                                <img src="{{url('/fe/images/home/right-arrow.png')}}" alt=""
                                                    class="img-fluid ms-3">
                                            </div>
                                        </div>-->
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="my-image">
                                    <img src="{{$home['photo']}}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- slider item -->
                </div>
            </div>
        </div>
    </div>
    <!-- end container -->
</section>