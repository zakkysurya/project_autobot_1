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
                    <h2>People talk about me</h2>
                    <!--<p class="para-width text-muted mb-0 fs-15">A Private Limited is the most popular type of
                        partnership Malta. The limited liability is, in fact, the only type of company allowed by
                        Companies.</p> -->
                </div>
            </div>
        </div>

        <!-- Slider main container -->
        <div class="swiper-container py-5">
            <div class="swiper-wrapper pt-3">
                <!-- start slider -->
                @foreach ($testimonial as $item)
                <div class="swiper-slide border-radius position-relative ">
                    <div class="user-image">
                        <img src="{{$item->image}}" alt="" class="avatar-md rounded-circle">
                    </div>
                    <div class="text-center mt-4">
                        <p class="f-16 text-muted fs-15">{{$item->text}}</p>
                    </div>
                    <hr>
                    <div class="user-info text-center">
                        <div class="user-info">
                            <h5 class="text-black mb-0">{{$item->name}}</h5>
                            <p class="mb-0 text-muted fs-14">{{$item->position}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
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