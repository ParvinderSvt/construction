<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blog |CONSTRUCTION SKILL SUPPORT</title>
    <meta name="description"
        content="We offer a range of NVQs, construction cards and other construction based learning to help our learners achieve their full potential." />
    <link rel="canonical" href="https://mdayurvediccollege.in/demo/construction/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="SG | CONSTRUCTION COMPANY" />
    <meta property="og:description"
        content="We offer a range of NVQs, construction cards and other construction based learning to help our learners achieve their full potential." />
    <meta property="og:url" content="https://mdayurvediccollege.in/demo/construction/" />
    <meta property="og:site_name" content="SG" />
    <meta property="og:image"
        content="https://mdayurvediccollege.in/demo/construction/assets/assets/images/og-logo.jpg" />

    <!-- ============ FAVICON ============ -->

    @include('visitors.head')
</head>

<body>
    @include('visitors.header')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ config('app.url') }}/images/bg_2.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Blog <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-3 bread">Blog</h1>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container my-5">
            <div class="row d-flex">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="" >
                        <img src="{{ Voyager::image($blog->image) }}" alt="CSS" style="width: 80%;height: auto; border-radius:10px;">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <h3 style="font-weight: 500" >{{ $blog->title }}</h3>
                    <p style="font-weight: 500" >{{ $blog->desc }}</p>
                </div>
            </div>
        </div>
    </section>
    @include('visitors.footer')

</body>

</html>
