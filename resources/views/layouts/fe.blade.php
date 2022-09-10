<!DOCTYPE html>
<html lang="en">

@include('components.frontend.head')

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="71">

@include('components.frontend.header')
    <!-- home section -->
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
                                                data-type='[ "Harold Anderson.","Freelance Designer.","Graduate based in NYC." ]'>
                                                <span class="wrap text-dark"></span>
                                            </span>
                                        </div>
                                        <p class="mt-3 text-muted">Building simple and beautiful things for complex
                                            interfaces is what I enjoy most about my work. I am also interested in
                                            crafting beautiful minimal products and exploring new worlds.</p>

                                        <div class="icon-item mt-4">
                                            <div class="d-flex">
                                                <a href="#">
                                                    <div class="social-icon facebook avatar-sm">
                                                        <i class="mdi mdi-facebook"></i>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="social-icon instagram avatar-sm">
                                                        <i class="mdi mdi-instagram"></i>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="social-icon twitter avatar-sm">
                                                        <i class="mdi mdi-twitter"></i>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="social-icon linkedin avatar-sm">
                                                        <i class="mdi mdi-linkedin"></i>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="social-icon pinterest avatar-sm">
                                                        <i class="mdi mdi-pinterest"></i>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="home-link d-inline-block mt-5">
                                            <div class="d-flex align-items-center">
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
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="my-image">
                                        <img src="{{url('/fe/images/home/home.png')}}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- slider item -->

                        <div class="item">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="content-item">
                                        <p class="text-primary fw-semibold mb-0">Hello! I AM</p>
                                        <div class="home-title mb-0 text-dark fw-bold h1">
                                            <span class="typewrite " data-period="2000"
                                                data-type='[ "Marie Jons.","Devloper.","Graduate based in NYC." ]'>
                                                <span class="wrap text-dark"></span>
                                            </span>
                                        </div>
                                        <p class="mt-3 text-muted">Building simple and beautiful things for complex
                                            interfaces is what I enjoy most about my work. I am also interested in
                                            crafting beautiful minimal products and exploring new worlds.</p>

                                        <div class="icon-item mt-4">
                                            <div class="d-flex">
                                                <a href="#">
                                                    <div class="social-icon facebook avatar-sm">
                                                        <i class="mdi mdi-facebook"></i>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="social-icon instagram avatar-sm">
                                                        <i class="mdi mdi-instagram"></i>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="social-icon twitter avatar-sm">
                                                        <i class="mdi mdi-twitter"></i>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="social-icon linkedin avatar-sm">
                                                        <i class="mdi mdi-linkedin"></i>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="social-icon pinterest avatar-sm">
                                                        <i class="mdi mdi-pinterest"></i>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="home-link d-flex align-items-center mt-5">
                                            <div class="btn-link">
                                                <a href="" class="text-dark h6">
                                                    <div class="read-link"><span>See my work </span></div>
                                                </a>
                                            </div>
                                            <div class="btn-link-icon">
                                                <img src="{{url('/fe/images/home/right-arrow.png')}}" alt="" class="img-fluid ms-3">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="my-image">
                                        <img src="{{url('/fe/images/home/home-2.png')}}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- slider item -->
                        <div class="item">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="content-item">
                                        <p class="text-danger fw-semibold mb-0">Hello! I AM</p>
                                        <div class="home-title mb-0 text-dark fw-bold h1">
                                            <span class="typewrite " data-period="2000"
                                                data-type='[ "Ray Glam.","Web Enthusiast.","Graduate based in NYC." ]'>
                                                <span class="wrap text-dark"></span>
                                            </span>
                                        </div>
                                        <p class="mt-3 text-muted">Building simple and beautiful things for complex
                                            interfaces is what I enjoy most about my work. I am also interested in
                                            crafting beautiful minimal products and exploring new worlds.</p>

                                        <div class="icon-item mt-4">
                                            <div class="d-flex">
                                                <a href="#">
                                                    <div class="social-icon facebook avatar-sm">
                                                        <i class="mdi mdi-facebook"></i>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="social-icon instagram avatar-sm">
                                                        <i class="mdi mdi-instagram"></i>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="social-icon twitter avatar-sm">
                                                        <i class="mdi mdi-twitter"></i>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="social-icon linkedin avatar-sm">
                                                        <i class="mdi mdi-linkedin"></i>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="social-icon pinterest avatar-sm">
                                                        <i class="mdi mdi-pinterest"></i>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="home-link d-flex align-items-center mt-5">
                                            <div class="btn-link">
                                                <a href="" class="text-dark h6">
                                                    <div class="read-link btn-link-denger"><span>See my work </span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="btn-link-icon">
                                                <img src="{{url('/fe/images/home/right-arrow.png')}}" alt="" class="img-fluid ms-3">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="my-image">
                                        <img src="{{url('/fe/images/home/home-3.png')}}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- slider item -->
                        <div class="item">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="content-item">
                                        <p class="text-blue fw-semibold mb-0">Hello! I AM</p>
                                        <h1 class="home-title mb-0 text-dark fw-bold">
                                            <span class="typewrite " data-period="2000"
                                                data-type='[ "Ray Glam.","Web Enthusiast.","Graduate based in NYC." ]'>
                                                <span class="wrap text-dark"></span>
                                            </span>
                                        </h1>
                                        <p class="mt-3 text-muted">Building simple and beautiful things for complex
                                            interfaces is what I enjoy most about my work. I am also interested in
                                            crafting beautiful minimal products and exploring new worlds.</p>

                                        <div class="icon-item mt-4">
                                            <div class="d-flex">
                                                <a href="#">
                                                    <div class="social-icon facebook avatar-sm">
                                                        <i class="mdi mdi-facebook"></i>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="social-icon instagram avatar-sm">
                                                        <i class="mdi mdi-instagram"></i>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="social-icon twitter avatar-sm">
                                                        <i class="mdi mdi-twitter"></i>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="social-icon linkedin avatar-sm">
                                                        <i class="mdi mdi-linkedin"></i>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="social-icon pinterest avatar-sm">
                                                        <i class="mdi mdi-pinterest"></i>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="home-link d-flex align-items-center mt-5">
                                            <div class="btn-link">
                                                <a href="" class="text-dark h6">
                                                    <div class="read-link btn-link-blue"><span>See my work </span></div>
                                                </a>
                                            </div>
                                            <div class="btn-link-icon">
                                                <img src="{{url('/fe/images/home/right-arrow.png')}}" alt="" class="img-fluid ms-3">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="my-image">
                                        <img src="{{url('/fe/images/home/home-4.png')}}" alt="" class="img-fluid">
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
    <!-- end home section -->

    <!-- about-me section -->
    <section class="section about-me" id="aboutme">
        <!-- container -->
        <div class="container">
            <div class="about-box">
                <div class="row">

                    <div class="col-lg-6 position-relative">
                        <div class="image-round"></div>
                        <div class="about-image p-4 pb-0">
                            <img src="{{url('/fe/images/about.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="about-item p-5">
                            <h2 class="display-5 fw-semibold">About Me</h2>
                            <p class="text-muted fs-14">It is a long established fact that a reader will be distracted
                                by the readable content of a page when looking at its layout. The point of using normal
                                distribution of letters, as opposed to using 'Content here, content here', making it
                                look like readable English..</p>

                            <ul class="nav nav-pills mb-3 mt-4 pt-2" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                        aria-selected="true">Skills</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile" type="button" role="tab"
                                        aria-controls="pills-profile" aria-selected="false">Experience</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-contact" type="button" role="tab"
                                        aria-controls="pills-contact" aria-selected="false">Education</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab">

                                    <div class="skill-item mt-4 pt-2">
                                        <div class="d-flex justify-content-between">
                                            <h6>Development</h6>
                                            <h6>65%</h6>
                                        </div>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="65"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 65%;"></div>
                                        </div>
                                    </div>

                                    <div class="skill-item mt-4 pt-2">
                                        <div class="d-flex justify-content-between">
                                            <h6>Design</h6>
                                            <h6>95%</h6>
                                        </div>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="95"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 95%;"></div>
                                        </div>
                                    </div>

                                    <div class="skill-item mt-4 pt-2">
                                        <div class="d-flex justify-content-between">
                                            <h6>Branding</h6>
                                            <h6>80%</h6>
                                        </div>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="80"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                    aria-labelledby="pills-profile-tab">

                                    <div class="experience">
                                        <div class="row position-relative">
                                            <div class="col-2">
                                                <div class="border-left"></div>
                                            </div>
                                            <div class="col-10">
                                                <div class="mt-4 pt-2">
                                                    <h5>Developer</h5>
                                                    <p class="text-muted fs-15">2000-2004 (4 year Experience)</p>
                                                    <p class="text-muted fs-15">There are many variations of passages of
                                                        Lorem Ipsum available, but the majority have fered altation in
                                                        some form, by injmour, or randomised words which don't look even
                                                        slightlievable. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                    aria-labelledby="pills-contact-tab">
                                    <div class="experience">
                                        <div class="row position-relative">
                                            <div class="col-2">
                                                <div class="border-left"></div>
                                            </div>
                                            <div class="col-10">
                                                <div class="mt-4 pt-2">
                                                    <h5>Basic Computer Application</h5>
                                                    <p class="text-muted fs-15 mb-0">1996-1998 (3 year)</p>
                                                    <p class="text-muted fs-15 mb-0">There are many variations of
                                                        passages of Lorem Ipsum available.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row position-relative">
                                            <div class="col-2">
                                                <div class="border-left"></div>
                                            </div>
                                            <div class="col-10">
                                                <div class="mt-4 pt-2">
                                                    <h5>Mastar Computer Application</h5>
                                                    <p class="text-muted fs-15 mb-0">1999-2000 (2 year)</p>
                                                    <p class="text-muted fs-15">The majority have fered altation in some
                                                        form, by injmour, or randomised words which don't look even
                                                        slightlievable. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- end container -->
    </section>
    <!-- end about-me -->

    <!-- start service -->
    <section class="section service" id="service">
        <!-- start container -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-5">
                        <h6 class="mb-0 text-muted fs-15">WHAT WE OFFER</h6>
                        <h2>Affordable Services</h2>
                        <p class="para-width text-muted mb-0 fs-15">A Private Limited is the most popular type of
                            partnership Malta. The limited liability is, in fact, the only type of company allowed by
                            Companies.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="info-item box-shadow mt-4 pt-2">
                        <div class="p-4">
                            <div class="research avatar-sm bg-soft-purple text-center">
                                <i class="mdi mdi-cached fs-24 text-purple"></i>
                            </div>
                            <h6 class="mt-4">Research & Analysis</h6>
                            <p class="text-muted fs-15">We use a customized application specifically designed a testing
                                gnose to keep away for people.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="info-item box-shadow mt-4 pt-2">
                        <div class="p-4">
                            <div class="research avatar-sm bg-soft-danger text-center">
                                <i class="mdi mdi-comment-plus-outline fs-24 text-danger"></i>
                            </div>
                            <h6 class="mt-4">Web Development</h6>
                            <p class="text-muted fs-15">We use a customized application specifically designed a testing
                                gnose to keep away for people.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="info-item box-shadow mt-4 pt-2">
                        <div class="p-4">
                            <div class="research avatar-sm bg-soft-warning text-center">
                                <i class="mdi mdi-layers fs-24 text-warning"></i>
                            </div>
                            <h6 class="mt-4">Network Management</h6>
                            <p class="text-muted fs-15 ">We use a customized application specifically designed a testing
                                gnose to keep away for people.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="info-item box-shadow mt-4 pt-2">
                        <div class="p-4">
                            <div class="research avatar-sm bg-soft-blue text-center">
                                <i class="mdi mdi-inbox-arrow-up fs-24 text-blue"></i>
                            </div>
                            <h6 class="mt-4">UI/UX Development</h6>
                            <p class="text-muted fs-15">We use a customized application specifically designed a testing
                                gnose to keep away for people.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="info-item box-shadow mt-4 pt-2">
                        <div class="p-4">
                            <div class="research avatar-sm bg-soft-primary text-center">
                                <i class="mdi mdi-chart-line fs-24 text-primary"></i>
                            </div>
                            <h6 class="mt-4">Mobile App Development</h6>
                            <p class="text-muted fs-15">We use a customized application specifically designed a testing
                                gnose to keep away for people.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="info-item box-shadow mt-4 pt-2">
                        <div class="p-4">
                            <div class="research avatar-sm bg-soft-pink text-center">
                                <i class="mdi mdi-email-open fs-24 text-pink"></i>
                            </div>
                            <h6 class="mt-4">Network Management</h6>
                            <p class="text-muted fs-15">We use a customized application specifically designed a testing
                                gnose to keep away for people.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end container -->
    </section>
    <!-- end service -->

    <!-- start counter -->
    <section class="section counter" id="counter">
        <!-- start container -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-4">
                        <h6 class="mb-0 text-muted fs-15">Counter</h6>
                        <h2>Our Achievement</h2>
                        <p class="para-width text-muted mb-0 fs-15">A Private Limited is the most popular type of
                            partnership Malta. The limited liability is, in fact, the only type of company allowed by
                            Companies.</p>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="counter-item">
                        <div class="counter-icon text-center">
                            <img src="{{url('/fe/images/counter/heart.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="counter-velue text-center mt-3">
                            <h2 class="counter_value fw-bold d-inline-block mb-0" data-bs-target="800">0</h2><span
                                class="h2 fw-bold">K</span><span class="h2"> +</span>
                        </div>
                        <div class="text-center">
                            <p class="text-muted fw-semibold fs-15">Happy Clients</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="counter-item">
                        <div class="counter-icon text-center">
                            <img src="{{url('/fe/images/counter/blueprint.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="counter-velue text-center mt-3">
                            <h2 class="counter_value fw-bold d-inline-block mb-0" data-bs-target="400">0</h2>
                        </div>
                        <div class="text-center">
                            <p class="text-muted fw-semibold fs-15">Project Done</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="counter-item">
                        <div class="counter-icon text-center">
                            <img src="{{url('/fe/images/counter/star.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="counter-velue text-center mt-3">
                            <h2 class="counter_value fw-bold d-inline-block mb-0" data-bs-target="1000">0</h2><span
                                class="h2 fw-bold">K</span><span class="h2"> +</span>
                        </div>
                        <div class="text-center">
                            <p class="text-muted fw-semibold fs-15">Clients Review</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="counter-item">
                        <div class="counter-icon text-center">
                            <img src="{{url('/fe/images/counter/idea.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="counter-velue text-center mt-3">
                            <h2 class="counter_value fw-bold d-inline-block mb-0" data-bs-target="20">0</h2><span
                                class="h2"> +</span>
                        </div>
                        <div class="text-center">
                            <p class="text-muted fw-semibold fs-15">Year Experience</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end counter -->

    <!-- start my-work -->
    <section class="section my-work" id="work">
        <!-- start container -->
        <div class="container">
            <div class="row">
                <div class="d-flex align-items-center">
                    <div class="left-text">
                        <h2 class="mb-0">My Latest Work</h2>
                        <p class="fs-15 text-muted">Prefect solution for digital experience</p>
                    </div>
                    <div class="right-text ms-auto">
                        <a href="" class="text-primary border-2 border-primary border-bottom">More Work <img
                                src="images/home/right-arrow-primary.png" alt="" class="img-fluid mb-1 ms-2"></a>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="work-slider" id="work-slider">
                        <div class="item">
                            <div class="work-image position-relative">
                                <a href="">
                                    <img src="{{url('/fe/images/work/img-1.png')}}" alt="" class="img-fluid">
                                    <div class="image-title mt-5 ms-5">
                                        <h4 class="mb-0">Web Design</h4>
                                        <p>E-Commerce</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- slider item -->
                        <div class="item">
                            <div class="work-image">
                                <a href="">
                                    <img src="{{url('/fe/images/work/img-2.png')}}" alt="" class="img-fluid">
                                    <div class="image-title mt-5 ms-5">
                                        <h4 class="mb-0">NFT Web Design</h4>
                                        <p>NFT Maerketplace</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- slider item -->
                        <div class="item">
                            <div class="work-image">
                                <a href="">
                                    <img src="{{url('/fe/images/work/img-3.png')}}" alt="" class="img-fluid">
                                    <div class="image-title mt-5 ms-5 text-white">
                                        <h4 class="mb-0">App Design</h4>
                                        <p class="text-white-50">Mobile App </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- slider item -->
                        <div class="item">
                            <div class="work-image">
                                <a href="">
                                    <img src="{{url('/fe/images/work/img-4.png')}}" alt="" class="img-fluid">
                                    <div class="image-title mt-5 ms-5 text-white">
                                        <h4 class="mb-0">Web Design</h4>
                                        <p class="text-white-50">E-Commerce</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end my-work -->

    <!-- start pricing -->
    <section class="section pricing" id="pricing">

        <!-- start container -->
        <div class="container">

            <div class="shape-1">
                <img src="{{url('/fe/images/testi/shape.png')}}" alt="" class="img-fluid">
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-4">
                        <h6 class="mb-0 text-muted fs-15">Pricing</h6>
                        <h2>Choose your Plan</h2>
                        <p class="para-width text-muted mb-0 fs-15">A Private Limited is the most popular type of
                            partnership Malta. The limited liability is, in fact, the only type of company allowed by
                            Companies.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-pills mb-3 justify-content-center align-items-end mt-4 pt-2" id="pills-tab1"
                        role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-basic-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-basic" type="button" role="tab" aria-controls="pills-basic"
                                aria-selected="true">
                                <span class="nav-icon">
                                    <i class="mdi mdi-account fs-24"></i>
                                </span>
                                <span class="fs-16 mb-0 fw-bold d-block">Individual</span>
                                <span class="fs-14 text-muted mb-0">For Monthly Project</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-professional-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-professional" type="button" role="tab"
                                aria-controls="pills-professional" aria-selected="false">
                                <span class="nav-icon">
                                    <i class="mdi mdi-wallet-travel fs-24"></i>
                                </span>
                                <span class="fs-16 mb-0 fw-bold d-block">Professional</span>
                                <span class="fs-14 text-muted mb-0">For Yearly Project</span>
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent1">
                        <div class="tab-pane fade show active" id="pills-basic" role="tabpanel"
                            aria-labelledby="pills-basic-tab">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="pricing-item ">
                                        <div class="top-bar p-4 pb-3">
                                            <div class="d-flex align-items-center">
                                                <div class="price-icon text-primary">
                                                    <i class="mdi mdi-airballoon fs-32"></i>
                                                </div>
                                                <div class="price-title ms-3">
                                                    <h6 class="mb-0">Basic Plan</h6>
                                                </div>
                                            </div>

                                            <div class="price-tag">
                                                <h2 class="text-dark mb-0 fs-40"><sup
                                                        class="fs-22 fw-semibold">$</sup>09<sup
                                                        class="fs-16 fw-semibold"> /month</sup></h2>
                                            </div>
                                        </div>
                                        <div class="bottom-bar p-4 pt-3">
                                            <ul class="list-unstyled ">
                                                <li><i class="mdi mdi-check fs-20 align-middle me-2 text-primary"></i>2
                                                    App and
                                                    project</li>
                                                <li class="mt-2"><i
                                                        class="mdi mdi-check fs-20 align-middle me-2 text-primary"></i>400
                                                    Gb/s
                                                    storange</li>
                                                <li class="mt-2"><i
                                                        class="mdi mdi-check fs-20 align-middle me-2 text-primary"></i>Free
                                                    coustom domain
                                                </li>
                                                <li class="mt-2"><i
                                                        class="mdi mdi-check fs-20 align-middle me-2 text-primary"></i>Chat
                                                    Support
                                                </li>
                                                <li class="mt-2"><i
                                                        class="mdi mdi-check fs-20 align-middle me-2 text-primary"></i>No
                                                    transaction fees
                                                </li>
                                                <li class="mt-2"><i
                                                        class="mdi mdi-check fs-20 align-middle me-2 text-primary"></i>Unlimited
                                                    Storage
                                                </li>

                                            </ul>

                                            <div class="pricing-button">
                                                <a href="" class="btn btn-primary w-100 mt-3 box-shadow"><i
                                                        class="mdi mdi-check-all me-2"></i>Choose
                                                    plane</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="pricing-item active-border">
                                        <div class="top-bar p-4 pb-3">
                                            <div class="d-flex align-items-center">
                                                <div class="price-icon text-primary">
                                                    <i class="mdi mdi-airplane fs-32"></i>
                                                </div>
                                                <div class="price-title ms-3">
                                                    <h6 class="mb-0">Startup Plan</h6>
                                                </div>
                                            </div>

                                            <div class="price-tag">
                                                <h2 class="text-dark mb-0 fs-40"><sup
                                                        class="fs-22 fw-semibold">$</sup>49<sup
                                                        class="fs-16 fw-semibold"> /month</sup></h2>
                                            </div>
                                        </div>
                                        <div class="bottom-bar p-4 pt-3">
                                            <ul class="list-unstyled ">
                                                <li><i class="mdi mdi-check fs-20 align-middle me-2 text-primary"></i>2
                                                    App and
                                                    project</li>
                                                <li class="mt-2"><i
                                                        class="mdi mdi-check fs-20 align-middle me-2 text-primary"></i>400
                                                    Gb/s
                                                    storange</li>
                                                <li class="mt-2"><i
                                                        class="mdi mdi-check fs-20 align-middle me-2 text-primary"></i>Free
                                                    coustom domain
                                                </li>
                                                <li class="mt-2"><i
                                                        class="mdi mdi-check fs-20 align-middle me-2 text-primary"></i>Chat
                                                    Support
                                                </li>
                                                <li class="mt-2"><i
                                                        class="mdi mdi-check fs-20 align-middle me-2 text-primary"></i>No
                                                    transaction fees
                                                </li>
                                                <li class="mt-2"><i
                                                        class="mdi mdi-check fs-20 align-middle me-2 text-primary"></i>Unlimited
                                                    Storage
                                                </li>
                                            </ul>

                                            <div class="pricing-button">
                                                <a href="" class="btn btn-dark w-100 mt-3 text-white"><i
                                                        class="mdi mdi-check-all me-2"></i>Choose
                                                    plane</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="pricing-item ">
                                        <div class="top-bar p-4 pb-3">
                                            <div class="d-flex align-items-center">
                                                <div class="price-icon text-primary">
                                                    <i class="mdi mdi-rocket fs-32"></i>
                                                </div>
                                                <div class="price-title ms-3">
                                                    <h6 class="mb-0">Enterprise Plan</h6>
                                                </div>
                                            </div>

                                            <div class="price-tag">
                                                <h2 class="text-dark mb-0 fs-40"><sup
                                                        class="fs-22 fw-semibold">$</sup>99<sup
                                                        class="fs-16 fw-semibold"> /month</sup></h2>
                                            </div>
                                        </div>
                                        <div class="bottom-bar p-4 pt-3">
                                            <ul class="list-unstyled ">
                                                <li><i class="mdi mdi-check fs-20 align-middle me-2 text-primary"></i>2
                                                    App and
                                                    project</li>
                                                <li class="mt-2"><i
                                                        class="mdi mdi-check fs-20 align-middle me-2 text-primary"></i>400
                                                    Gb/s
                                                    storange</li>
                                                <li class="mt-2"><i
                                                        class="mdi mdi-check fs-20 align-middle me-2 text-primary"></i>Free
                                                    coustom domain
                                                </li>
                                                <li class="mt-2"><i
                                                        class="mdi mdi-check fs-20 align-middle me-2 text-primary"></i>Chat
                                                    Support
                                                </li>
                                                <li class="mt-2"><i
                                                        class="mdi mdi-check fs-20 align-middle me-2 text-primary"></i>No
                                                    transaction fees
                                                </li>
                                                <li class="mt-2"><i
                                                        class="mdi mdi-check fs-20 align-middle me-2 text-primary"></i>Unlimited
                                                    Storage
                                                </li>

                                            </ul>

                                            <div class="pricing-button">
                                                <a href="" class="btn btn-primary w-100 mt-3 box-shadow"><i
                                                        class="mdi mdi-check-all me-2"></i>Choose
                                                    plane</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-professional" role="tabpanel"
                            aria-labelledby="pills-professional-tab">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="pricing-item  active-border">
                                        <div class="top-bar p-4 pb-3">
                                            <div class="d-flex align-items-center">
                                                <div class="price-icon text-primary">
                                                    <i class="mdi mdi-airballoon fs-32"></i>
                                                </div>
                                                <div class="price-title ms-3">
                                                    <h6 class="mb-0">Basic Plan</h6>
                                                </div>
                                            </div>

                                            <div class="price-tag">
                                                <h2 class="text-dark mb-0 fs-40"><sup
                                                        class="fs-22 fw-semibold">$</sup>199<sup
                                                        class="fs-16 fw-semibold"> /Year</sup></h2>
                                            </div>
                                        </div>
                                        <div class="bottom-bar p-4 pt-3">
                                            <ul class="list-unstyled ">
                                                <li><i class="mdi mdi-check fs-20 align-middle me-2 text-primary"></i>2
                                                    App and
                                                    project</li>
                                                <li class="mt-2"><i
                                                        class="mdi mdi-check fs-20 align-middle me-2 text-primary"></i>400
                                                    Gb/s
                                                    storange</li>
                                                <li class="mt-2"><i
                                                        class="mdi mdi-check fs-20 align-middle me-2 text-primary"></i>Free
                                                    coustom domain
                                                </li>
                                                <li class="mt-2"><i
                                                        class="mdi mdi-check fs-20 align-middle me-2 text-primary"></i>Chat
                                                    Support
                                                </li>
                                                <li class="mt-2"><i
                                                        class="mdi mdi-check fs-20 align-middle me-2 text-primary"></i>No
                                                    transaction fees
                                                </li>
                                                <li class="mt-2"><i
                                                        class="mdi mdi-check fs-20 align-middle me-2 text-primary"></i>Unlimited
                                                    Storage
                                                </li>

                                            </ul>

                                            <div class="pricing-button">
                                                <a href="" class="btn btn-dark w-100 mt-3 box-shadow text-white"><i
                                                        class="mdi mdi-check-all me-2"></i>Choose
                                                    plane</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="pricing-item">
                                        <div class="top-bar p-4 pb-3">
                                            <div class="d-flex align-items-center">
                                                <div class="price-icon text-primary">
                                                    <i class="mdi mdi-airplane fs-32"></i>
                                                </div>
                                                <div class="price-title ms-3">
                                                    <h6 class="mb-0">Basic Plan</h6>
                                                </div>
                                            </div>

                                            <div class="price-tag">
                                                <h2 class="text-dark mb-0 fs-40"><sup
                                                        class="fs-22 fw-semibold">$</sup>249<sup
                                                        class="fs-16 fw-semibold"> /year</sup></h2>
                                            </div>
                                        </div>
                                        <div class="bottom-bar p-4 pt-3">
                                            <ul class="list-unstyled ">
                                                <li><i class="mdi mdi-check fs-20 align-middle me-2 text-primary"></i>2
                                                    App and
                                                    project</li>
                                                <li class="mt-2"><i
                                                        class="mdi mdi-check fs-20 align-middle me-2 text-primary"></i>400
                                                    Gb/s
                                                    storange</li>
                                                <li class="mt-2"><i
                                                        class="mdi mdi-check fs-20 align-middle me-2 text-primary"></i>Free
                                                    coustom domain
                                                </li>
                                                <li class="mt-2"><i
                                                        class="mdi mdi-check fs-20 align-middle me-2 text-primary"></i>Chat
                                                    Support
                                                </li>
                                                <li class="mt-2"><i
                                                        class="mdi mdi-check fs-20 align-middle me-2 text-primary"></i>No
                                                    transaction fees
                                                </li>
                                                <li class="mt-2"><i
                                                        class="mdi mdi-check fs-20 align-middle me-2 text-primary"></i>Unlimited
                                                    Storage
                                                </li>
                                            </ul>

                                            <div class="pricing-button">
                                                <a href="" class="btn btn-primary w-100 mt-3"><i
                                                        class="mdi mdi-check-all me-2"></i>Choose
                                                    plane</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="pricing-item ">
                                        <div class="top-bar p-4 pb-3">
                                            <div class="d-flex align-items-center">
                                                <div class="price-icon text-primary">
                                                    <i class="mdi mdi-rocket fs-32"></i>
                                                </div>
                                                <div class="price-title ms-3">
                                                    <h6 class="mb-0">Basic Plan</h6>
                                                </div>
                                            </div>

                                            <div class="price-tag">
                                                <h2 class="text-dark mb-0 fs-40"><sup
                                                        class="fs-22 fw-semibold">$</sup>299<sup
                                                        class="fs-16 fw-semibold"> /year</sup></h2>
                                            </div>
                                        </div>
                                        <div class="bottom-bar p-4 pt-3">
                                            <ul class="list-unstyled ">
                                                <li><i class="mdi mdi-check fs-20 align-middle me-2 text-primary"></i>2
                                                    App and
                                                    project</li>
                                                <li class="mt-2"><i
                                                        class="mdi mdi-check fs-20 align-middle me-2 text-primary"></i>400
                                                    Gb/s
                                                    storange</li>
                                                <li class="mt-2"><i
                                                        class="mdi mdi-check fs-20 align-middle me-2 text-primary"></i>Free
                                                    coustom domain
                                                </li>
                                                <li class="mt-2"><i
                                                        class="mdi mdi-check fs-20 align-middle me-2 text-primary"></i>Chat
                                                    Support
                                                </li>
                                                <li class="mt-2"><i
                                                        class="mdi mdi-check fs-20 align-middle me-2 text-primary"></i>No
                                                    transaction fees
                                                </li>
                                                <li class="mt-2"><i
                                                        class="mdi mdi-check fs-20 align-middle me-2 text-primary"></i>Unlimited
                                                    Storage
                                                </li>

                                            </ul>

                                            <div class="pricing-button">
                                                <a href="" class="btn btn-primary w-100 mt-3 box-shadow"><i
                                                        class="mdi mdi-check-all me-2"></i>Choose
                                                    plane</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->

        <div class="shape-2">
            <img src="{{url('/fe/images/testi/shape-2.png')}}" alt="" class="img-fluid">
        </div>

        <div class="shape-3 ">
            <img src="{{url('/fe/images/testi/shape-3.png')}}" alt="" class="img-fluid">
        </div>

    </section>
    <!-- end pricing -->

    <!-- start testimonial -->
    <section class="section testimonial" id="testi">
        <div class="shape-1">
            <img src="{{url('/fe/images/testi/shape.png')}}" alt="" class="img-fluid">
        </div>
        <!-- start container -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-5">
                        <h6 class="mb-0 text-muted fs-15 text-uppercase">Testimonial</h6>
                        <h2>People talk about us</h2>
                        <p class="para-width text-muted mb-0 fs-15">A Private Limited is the most popular type of
                            partnership Malta. The limited liability is, in fact, the only type of company allowed by
                            Companies.</p>
                    </div>
                </div>
            </div>

            <!-- Slider main container -->
            <div class="swiper-container py-5">
                <div class="swiper-wrapper pt-3">
                    <!-- start slider -->
                    <div class="swiper-slide border-radius position-relative ">
                        <div class="user-image">
                            <img src="{{url('/fe/images/team/img1.png')}}" alt="" class="avatar-md rounded-circle">
                        </div>
                        <div class="text-center mt-4">
                            <p class="f-16 text-muted fs-15">" We use a customized application specifically designed a
                                testing gnose to keep away for people. "
                            </p>
                        </div>
                        <hr>
                        <div class="user-info text-center">
                            <div class="user-info">
                                <h5 class="text-black mb-0">Janice C. Campbe</h5>
                                <p class="mb-0 text-muted fs-14">Embedded analytics</p>
                            </div>
                        </div>
                    </div>
                    <!-- end slider -->

                    <!-- start slider -->
                    <div class="swiper-slide border-radius position-relative ">
                        <div class="user-image">
                            <img src="{{url('/fe/images/team/img2.png')}}" alt="" class="avatar-md rounded-circle">
                        </div>
                        <div class="text-center mt-4">
                            <p class="f-16 text-muted fs-15">" We use a customized application specifically designed a
                                testing gnose to keep away for people. "
                            </p>
                        </div>
                        <hr>
                        <div class="user-info text-center">
                            <div class="user-info">
                                <h5 class="text-black mb-0">Janice C. Campbe</h5>
                                <p class="mb-0 text-muted fs-14">Embedded analytics</p>
                            </div>
                        </div>
                    </div>
                    <!-- end slider -->

                    <!-- start slider -->
                    <div class="swiper-slide border-radius position-relative ">
                        <div class="user-image">
                            <img src="{{url('/fe/images/team/img3.png')}}" alt="" class="avatar-md rounded-circle">
                        </div>
                        <div class="text-center mt-4">
                            <p class="f-16 text-muted fs-15">" We use a customized application specifically designed a
                                testing gnose to keep away for people. "
                            </p>
                        </div>
                        <hr>
                        <div class="user-info text-center">
                            <div class="user-info">
                                <h5 class="text-black mb-0">Janice C. Campbe</h5>
                                <p class="mb-0 text-muted fs-14">Embedded analytics</p>
                            </div>
                        </div>
                    </div>
                    <!-- end slider -->

                    <!-- start slider -->
                    <div class="swiper-slide border-radius position-relative ">
                        <div class="user-image">
                            <img src="{{url('/fe/images/team/img4.png')}}" alt="" class="avatar-md rounded-circle">
                        </div>
                        <div class="text-center mt-4">
                            <p class="f-16 text-muted fs-15">" We use a customized application specifically designed a
                                testing gnose to keep away for people. "
                            </p>
                        </div>
                        <hr>
                        <div class="user-info text-center">
                            <div class="user-info">
                                <h5 class="text-black mb-0">Janice C. Campbe</h5>
                                <p class="mb-0 text-muted fs-14">Embedded analytics</p>
                            </div>
                        </div>
                    </div>
                    <!-- end slider -->

                    <!-- start slider -->
                    <div class="swiper-slide border-radius position-relative ">
                        <div class="user-image">
                            <img src="{{url('/fe/images/team/img5.png')}}" alt="" class="avatar-md rounded-circle">
                        </div>
                        <div class="text-center mt-4">
                            <p class="f-16 text-muted fs-15">" We use a customized application specifically designed a
                                testing gnose to keep away for people. "
                            </p>
                        </div>
                        <hr>
                        <div class="user-info text-center">
                            <div class="user-info">
                                <h5 class="text-black mb-0">Janice C. Campbe</h5>
                                <p class="mb-0 text-muted fs-14">Embedded analytics</p>
                            </div>
                        </div>
                    </div>
                    <!-- end slider -->
                </div>

                <!-- navigation buttons -->
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <div class="shape-2">
            <img src="{{url('/fe/images/testi/shape-2.png')}}" alt="" class="img-fluid">
        </div>

        <div class="shape-3">
            <img src="{{url('/fe/images/testi/shape-3.png')}}" alt="" class="img-fluid">
        </div>
        <!-- end container -->
    </section>
    <!-- end testimonial -->

    <!-- start blog -->
    <section class="section blog" id="blog">
        <!-- start container -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-4">
                        <h6 class="mb-0 text-muted fs-15">Blog</h6>
                        <h2>Our Regular News</h2>
                        <p class="para-width text-muted mb-0 fs-15">A Private Limited is the most popular type of
                            partnership Malta. The limited liability is, in fact, the only type of company allowed by
                            Companies.</p>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-4 mt-4 pt-2">
                    <div class="blog-item p-4 box-shadow">
                        <div class="blog-image">
                            <img src="{{url('/fe/images/blog/img-1.png')}}" alt="" class="img-fluid">
                            <div class="blog-image-icon bg-blue">
                                <i class="mdi mdi-lan fs-24"></i>
                            </div>
                        </div>
                        <div class="blog-content mt-5">
                            <!-- <p class="text-muted fw-semibold mb-2">May 25, 2021</p> -->
                            <a href="" ><h5>We makes UI/UX design very easy for you.</h5></a>
                            <p class="fs-15 text-muted">He nicked it tickety boo harry the cras bargy chap mush spiffing
                                spend a penny.</p>
                            <a href="" class="text-dark fw-semibold">Learn more <i
                                    class="mdi mdi-arrow-right fs-16"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 pt-2">
                    <div class="blog-item p-4 box-shadow">
                        <div class="blog-image">
                            <img src="{{url('/fe/images/blog/img-2.png')}}" alt="" class="img-fluid">
                            <div class="blog-image-icon bg-secondary">
                                <i class="mdi mdi-responsive fs-24"></i>
                            </div>
                        </div>
                        <div class="blog-content mt-5">
                            <!-- <p class="text-muted fw-semibold mb-2">May 25, 2021</p> -->
                            <a href=""><h5>Current world design trends know easily.</h5></a>
                            <p class="fs-15 text-muted">He nicked it tickety boo harry the cras bargy chap mush spiffing
                                spend a penny.</p>
                            <a href="" class="text-dark fw-semibold">Learn more <i
                                    class="mdi mdi-arrow-right fs-16"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 pt-2">
                    <div class="blog-item p-4 box-shadow">
                        <div class="blog-image">
                            <img src="{{url('/fe/images/blog/img-3.png')}}" alt="" class="img-fluid">
                            <div class="blog-image-icon bg-primary">
                                <i class="mdi mdi-vector-combine fs-24"></i>
                            </div>
                        </div>
                        <div class="blog-content mt-5">
                            <!-- <p class="text-muted fw-semibold mb-2">May 25, 2021</p> -->
                            <a href=""><h5>We calculate clients demand for research.</h5></a>
                            <p class="fs-15 text-muted">He nicked it tickety boo harry the cras bargy chap mush spiffing
                                spend a penny.</p>
                            <a href="" class="text-dark fw-semibold">Learn more <i
                                    class="mdi mdi-arrow-right fs-16"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end blog -->

    <!-- start contact -->
    <section class="contact pt-5 pb-0" id="contact">
        <!-- start container -->
        <div class="container">

            <div class="shape-1">
                <img src="{{url('/fe/images/testi/shape.png')}}" alt="" class="img-fluid">
            </div>

            <div class="contact-item">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="contact-info">
                            <div class="mb-4">
                                <h3>Let's Connect</h3>
                                <p class="text-muted mb-0">Looking for help? Fill the form and start a new adventure.
                                </p>
                            </div>

                            <hr>

                            <div class="info-content mt-4">
                                <h6>Address :</h6>
                                <div class="d-flex">
                                    <div class="icon">
                                        <i class="mdi mdi-home-outline fs-24 text-primary"></i>
                                    </div>
                                    <div class="icon-content ms-3">
                                        <p class="mb-0 fs-15">744 New York Ave, Brooklyn, Kings,<br>
                                            New York 10224</p>
                                    </div>
                                </div>
                            </div>

                            <div class="info-content mt-4 pt-2">
                                <h6>Phone :</h6>
                                <div class="d-flex">
                                    <div class="icon">
                                        <i class="mdi mdi-phone-outline fs-24 text-primary"></i>
                                    </div>
                                    <div class="icon-content ms-3">
                                        <p class="mb-0 fs-15">(+642) 245 356 432</p>
                                        <p class="mb-0 fs-15">(+420) 336 476 328</p>
                                    </div>
                                </div>
                            </div>


                            <div class="info-content mt-4 pt-2">
                                <h6>Support :</h6>
                                <div class="d-flex">
                                    <div class="icon">
                                        <i class="mdi mdi-email-outline fs-24 text-primary"></i>
                                    </div>
                                    <div class="icon-content ms-3">
                                        <p class="mb-0 fs-15">hellosuppot@gmail.com</p>
                                        <p class="mb-0 fs-15">help@.com</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-7 ">
                        <div class="custom-form mt-4 ">
                            <form method="post" name="myForm" onsubmit="return validateForm()">

                                <h6 class="mb-0 text-muted">Let's talk</h6>
                                <h3>Enter your project details</h3>
                                <p class=" fs-15 text-muted">Content here, content here', making it look like
                                    readable English. Many desktop publishing packages.</p>
                                <p id="error-msg" style="opacity: 1;">
                                    <!-- <div class="alert alert-warning">*Please enter a Name*</div> -->
                                </p>


                                <div id="simple-msg"></div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input name="name" id="name" type="text" class="form-control contact-form"
                                                placeholder="Your name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input name="email" id="email" type="email"
                                                class="form-control contact-form" placeholder="Your email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <input type="text" class="form-control contact-form" id="subject"
                                                placeholder="Your Subject..">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <textarea name="comments" id="comments" rows="4"
                                                class="form-control contact-form h-auto"
                                                placeholder="Your message..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-lg-12 d-grid">
                                        <input type="submit" id="submit" name="send"
                                            class="submitBnt btn btn-rounded btn-primary" value="Send Message">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="shape-2">
                <img src="{{url('/fe/images/testi/shape-2.png')}}" alt="" class="img-fluid">
            </div>

            <div class="shape-3 ">
                <img src="{{url('/fe/images/testi/shape-3.png')}}" alt="" class="img-fluid">
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end contact -->

   @include('components.frontend.footer')

</body>

</html>