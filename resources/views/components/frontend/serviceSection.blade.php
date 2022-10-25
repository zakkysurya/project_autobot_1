<section class="section service" id="service">
    <!-- start container -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center mb-5">
                    <!--<h6 class="mb-0 text-muted fs-15">WHAT WE OFFER</h6>-->
                    <h2>Services</h2>
                    <!--<p class="para-width text-muted mb-0 fs-15">A Private Limited is the most popular type of
                        partnership Malta. The limited liability is, in fact, the only type of company allowed by
                        Companies.</p>-->
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($services as $item)
            <div class="col-lg-4">
                <div class="info-item box-shadow mt-4 pt-2">
                    <div class="p-4">
                        <div class="research avatar-sm bg-soft-purple text-center">
                            <i class="mdi {{$item->icon}} fs-24"></i>
                        </div>
                        <h6 class="mt-4">{{$item->service_name}}</h6>
                        <p class="text-muted fs-15">{{$item->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
    <!-- end container -->
</section>