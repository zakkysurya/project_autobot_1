<section class="section about-me" id="aboutme">
    <!-- container -->
    <div class="container">
        <div class="about-box">
            <div class="row">

                <div class="col-lg-6 position-relative">
                    <div class="image-round"></div>
                    <div class="about-image p-4 pb-0">
                        <img src="{{$about_me['photo']}}" alt="" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-item p-5">
                        <h2 class="display-5 fw-semibold">About Me</h2>
                        <p class="text-muted fs-14">{{$about_me['self_description']}}</p>

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
                                <ul class="skill-item list-unstyled mt-4">
                                    @foreach ($about_me['skills'] as $item)
                                    <li><i class="mdi mdi-arrow-right me-2"></i>{{$item->name}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">

                                <div class="experience">
                                    @foreach ($about_me['experiences'] as $item)
                                    <div class="row position-relative">
                                        <div class="col-2">
                                            <div class="border-left"></div>
                                        </div>
                                        <div class="col-10">
                                            <div class="mt-4 pt-2">
                                                <h5>{{$item->position}}</h5>
                                                <p class="text-muted fs-15">{{$item->start_year}}-{{$item->end_year}} </p>
                                                <p class="text-muted fs-15"><!----></p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>

                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab">
                                <div class="experience">
                                    @foreach ($about_me['educations'] as $item)
                                    <div class="row position-relative">
                                        <div class="col-2">
                                            <div class="border-left"></div>
                                        </div>
                                        <div class="col-10">
                                            <div class="mt-4 pt-2">
                                                <h5>{{$item->school_name}}({{$item->level}})</h5>
                                                <p class="text-muted fs-15 mb-0">{{$item->start_year}}-{{$item->end_year}} </p>
                                                <p class="text-muted fs-15 mb-0"><!----></p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
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