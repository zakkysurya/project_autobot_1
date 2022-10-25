<section class="section my-work" id="work">
    <!-- start container -->
    <div class="container">
        <div class="row">
            <div class="d-flex align-items-center">
                <div class="left-text">
                    <h2 class="mb-0">Portfolio</h2>
                    <!--<p class="fs-15 text-muted">Prefect solution for digital experience</p>-->
                </div>
                <div class="right-text ms-auto">
                    <!--<a href="" class="text-primary border-2 border-primary border-bottom">More Work <img
                            src="images/home/right-arrow-primary.png" alt="" class="img-fluid mb-1 ms-2"></a>-->
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="work-slider" id="work-slider">
                    
                    @foreach ($work as $item)
                    <div class="item">
                        <div class="work-image position-relative">
                            <a href="">
                                <img src="{{$item->images}}" alt="" class="img-fluid">
                                <!--<div class="image-title mt-5 ms-5">
                                    <h4 class="mb-0">Web Design</h4>
                                    <p>E-Commerce</p>
                                </div>-->
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
    <!-- end container -->
</section>