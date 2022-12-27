<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>PORTFOLIO</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('front.includes.style')

</head>

<body>

<!-- ======= Mobile nav toggle button ======= -->
<!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
<i class="bi bi-list mobile-nav-toggle d-lg-none"></i>

@include('front.includes.header')

@include('front.includes.hero-section')

<main id="main">
    @include('front.includes.about')
    @include('front.includes.facts')
    @include('front.includes.skills')
    @include('front.includes.resume')
    @include('front.includes.portfolio')
    @include('front.includes.services')
    @include('front.includes.testimonial')
    @include('front.includes.contact')
</main>
<!-- End #main -->

@include('front.includes.footer')


<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


@include('front.includes.script')

</body>
</html>
