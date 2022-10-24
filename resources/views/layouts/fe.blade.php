<!DOCTYPE html>
<html lang="en">

@include('components.frontend.head')

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="71">

@include('components.frontend.header')
    <!-- home section -->
    @include('components.frontend.homeSection')
    <!-- end home section -->

    <!-- about-me section -->
    @include('components.frontend.aboutSection')
    <!-- end about-me -->

    <!-- start service -->
    @include('components.frontend.serviceSection')
    <!-- end service -->

    <!-- start counter -->
    {{-- @include('components.frontend.counterSection') --}}
    <!-- end counter -->

    <!-- start my-work -->
    @include('components.frontend.myworkSection')
    <!-- end my-work -->

    <!-- start pricing -->
    {{-- @include('components.frontend.pricingSection') --}}
    <!-- end pricing -->

    <!-- start testimonial -->
    @include('components.frontend.testimonialSection')
    <!-- end testimonial -->

    <!-- start blog -->
    {{-- @include('components.frontend.blogSection') --}}
    <!-- end blog -->

    <!-- start contact -->
    @include('components.frontend.contactSection')
    <!-- end contact -->

   @include('components.frontend.footer')

</body>

</html>