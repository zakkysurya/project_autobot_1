<a href="javascript: void(0);" id="mode" class="mode-btn text-white rounded-end">
    <i class="uil uil-brightness mode-dark mx-auto"></i>
    <i class="uil uil-moon bx-spin mode-light"></i>
</a>
<!--Navbar Start-->
<nav class="navbar navbar-expand-lg fixed-top sticky" id="navbar">
    <div class="container-fluid custom-container">
        <a class="navbar-brand logo text-uppercase" href="index.html">
            <img src="images/logo-light.png" class="logo-light" alt="" height="34">
            <img src="images/logo-dark.png" class="logo-dark" alt="" height="34">
        </a>

        <button class="navbar-toggler me-3 order-2 ms-4" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-label="Toggle navigation">
            <i class="mdi mdi-menu"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ms-auto navbar-center">
                <li class="nav-item active">
                    <a href="#home" class="nav-link active">Home</a>
                </li>
                <li class="nav-item dropdown dropdown-hover">
                    <a href="#aboutme" class="nav-link ">About Us</a>
                </li>
                <li class="nav-item dropdown dropdown-hover">
                    <a href="#service" class="nav-link ">Service</a>
                </li>

                <li class="nav-item dropdown dropdown-hover">
                    <a href="#work" class="nav-link ">Work</a>
                </li>
                <li class="nav-item">
                    <a href="#pricing" class="nav-link">Pricing</a>
                </li>
                <li class="nav-item">
                    <a href="#testi" class="nav-link">Testimonial</a>
                </li>
                <li class="nav-item">
                    <a href="#blog" class="nav-link">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact</a>
                </li>
            </ul>
            <!--end navbar-nav-->
            <div class="ms-auto ps-2 ps-lg-0">
                <a href="" class="btn btn-dark rounded-pill my-3 my-lg-0" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">Login</a>
            </div>
        </div>
    </div>
    <!--end container-->
</nav>
<!-- Navbar End -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sign up</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form class="row g-3 needs-validation">
                    <div class="col-md-6">
                        <label for="validationCustom01" class="form-label">First name <span
                                class="text-primary">*</span></label>
                        <input type="text" class="form-control" id="validationCustom01" value="" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Email <span
                                class="text-primary">*</span></label>
                        <input type="email" class="form-control" id="validationCustom02" value="" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom03" class="form-label">Subject <span
                                class="text-primary">*</span></label>
                        <input type="text" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom05" class="form-label">Password <span
                                class="text-primary">*</span></label>
                        <input type="password" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <label for="validationTextarea" class="form-label">Textarea<span
                                class="text-primary">*</span></label>
                        <textarea class="form-control" id="validationTextarea" required></textarea>
                        <div class="invalid-feedback">
                            You must agree before submitting.
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- end modal -->