<!DOCTYPE html>
<html lang="en">

<head>
    <title>CSS|CONSTRUCTION SKILL SUPPORT</title>
    <meta name="description"
        content="We offer a range of NVQs, construction cards and other construction based learning to help our learners achieve their full potential." />
    <link rel="canonical" href="https://www.constructionskillsupport.co.uk/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="CSS | CONSTRUCTION COMPANY" />
    <meta property="og:description"
        content="We offer a range of NVQs, construction cards and other construction based learning to help our learners achieve their full potential." />
    <meta property="og:url" content="https://www.constructionskillsupport.co.uk/" />
    <meta property="og:site_name" content="SG" />
    <meta property="og:image" content="https://www.constructionskillsupport.co.uk/images/logocss.jpg" />



    <!-- ============ FAVICON ============ -->

    @include('visitors.head')

    <style>
        .gtco-testimonials {
            position: relative;
            margin-top: 30px;

            h2 {
                font-size: 30px;
                text-align: center;
                color: #333333;
                margin-bottom: 50px;
            }

            .owl-stage-outer {
                padding: 30px 0;
            }

            .owl-nav {
                display: none;
            }

            .owl-dots {
                text-align: center;

                span {
                    position: relative;
                    height: 10px;
                    width: 10px;
                    border-radius: 50%;
                    display: block;
                    background: #fff;
                    border: 2px solid #011b37;
                    margin: 0 5px;
                }

                .active {
                    box-shadow: none;

                    span {
                        background: #011b37;
                        box-shadow: none;
                        height: 12px;
                        width: 12px;
                        margin-bottom: -1px;
                    }
                }
            }

            .card {
                background: #fff;
                box-shadow: 0 8px 30px -7px #c9dff0;
                margin: 0 20px;
                padding: 0 10px;
                border-radius: 20px;
                border: 0;

                .card-img-top {
                    max-width: 100%;
                    margin: 15px auto 0;
                    box-shadow: 0 8px 20px -4px #95abbb;
                    width: 90%;
                    height: 70%;
                }

                h5 {
                    color: #011b37;
                    font-size: 21px;
                    line-height: 1.3;

                    span {
                        font-size: 18px;
                        color: #666666;
                    }
                }

                p {
                    font-size: 18px;
                    color: #555;
                    padding-bottom: 15px;
                }
            }

            .active {
                opacity: 0.5;
                transition: all 0.3s;
            }

            .center {
                opacity: 1;

                h5 {
                    font-size: 24px;

                    span {
                        font-size: 20px;
                    }
                }

                .card-img-top {
                    max-width: 100%;
                    margin: 15px auto 0;
                    box-shadow: 0 8px 20px -4px #95abbb;
                    width: 90%;
                    height: 70%;
                }
            }
        }

        @media (max-width: 767px) {
            .gtco-testimonials {
                margin-top: 20px;
            }
        }

        .owl-carousel {
            .owl-nav button {

                &.owl-next,
                &.owl-prev {
                    outline: 0;
                }
            }

            button.owl-dot {
                outline: 0;
            }
        }
    </style>
</head>

<body>
    @include('visitors.header')
    <!-- <div class="py-1 top d-md-block d-none">
  <div class="container">
   <div class="row">
    <div class="col-sm text-center text-md-left mb-md-0 mb-2 pr-md-4 d-flex topper align-items-center">
     <p class="mb-0 w-100">
      <span class="fa fa-paper-plane"></span>
      <span class="text">sg@email.com</span>
     </p>
    </div>
    <div class="col-sm justify-content-center d-flex mb-md-0 mb-2">
     <div class="social-media">
      <p class="mb-0 d-flex">
       <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
       <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
       <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
       <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
      </p>
     </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-7 d-flex topper align-items-center text-lg-right justify-content-end">
     <p class="mb-0 register-link"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Enquire Now</a></p>
    </div>
   </div>
  </div>
 </div>
 <div class="pt-4 pb-5"> -->

    <!-- END nav -->

    <section class="hero-wrap js-fullheight"
        style="background-image: url('images/working-hard-building-man-construction-worker.webp');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
                <div class="col-lg-6 ftco-animate">
                    <div class="mt-5">
                        <h1 class="mb-4">We Build <br>Great Workers</h1>
                        <p class="mb-4">A learning community dedicated to building respectful and responsible citizens
                            and empowering all learners.</p>
                        <p><a href="#our_services" class="btn btn-primary">Our Services</a>
                            <!-- <a href="#" class="btn btn-white" data-toggle="modal" data-target="#exampleModalCenter">Request Form</a> -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2">
        <div class="container">
            <div class="row no-gutters d-flex">
                <div class="col-lg-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-flex">
                        <div class="icon justify-content-center align-items-center d-flex"><span
                                class="flaticon-engineer-1"></span></div>
                        <div class="media-body pl-4">
                            <h3 class="heading mb-3">Quality Education</h3>
                            <p>Our courses help students develop competence to excel in the construction sector,
                                ensuring safety, sustainability, and excellence in every project.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services services-2 d-flex">
                        <div class="icon justify-content-center align-items-center d-flex"><span
                                class="flaticon-worker-1"></span></div>
                        <div class="media-body pl-4">
                            <h3 class="heading mb-3">Professional Liability</h3>
                            <p>CSS bears professional liability for ensuring curriculum accuracy, instructor competence,
                                and student safety.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-flex">
                        <div class="icon justify-content-center align-items-center d-flex"><span
                                class="flaticon-engineer"></span></div>
                        <div class="media-body pl-4">
                            <h3 class="heading mb-3">Best Prices</h3>
                            <p>CSS prioritize affordability while providing comprehensive learning experiences,
                                accessible resources, and expert guidance. We strive to make construction education
                                accessible to all aspiring professionals.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section" id="about-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="about-wrap img w-100" style="background-image: url(images/about.jpg);">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-crane"></span></div>
                    </div>
                </div>
                <div class="col-md-6 py-5 pl-md-5">
                    <div class="row justify-content-center mb-4 pt-md-4">
                        <div class="col-md-12 heading-section ftco-animate">
                            <h2 class="mb-4">Who We Are</h2>
                            <div class="d-flex about">
                                <div class="icon"><span class="flaticon-hammer"></span></div>
                                <h3>What Construction Skill Support
                                    Can Do For <br>Construction Cards</h3>
                            </div>
                            <p style="color: black;">
                                Construction Support is a leading provider of construction based training. We offer a
                                range of NVQs, construction cards and other construction based learning to help our
                                learners achieve their full potential. We pride ourselves on delivering excellent
                                customer service, attentive technical support and fantastic value for money in all that
                                we do.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="ftco-section bg-half-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate" id="our_services">
                    <span class="subheading">Our Services</span>
                    <h2 class="what-we-do">What We Do</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="services-wrap ftco-animate">
                        <div class="img" style="background-image: url(images/services-1.jpg);"></div>
                        <div class="text">
                            <div class="icon"><span class="flaticon-architect"></span></div>
                            <h2>Construction Card</h2>
                            <a href="construtioncard.php" class="btn-custom">Apply Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services-wrap ftco-animate">
                        <div class="img" style="background-image: url(images/services-2.jpg);"></div>
                        <div class="text">
                            <div class="icon"><span class="flaticon-worker"></span></div>
                            <h2>CITB Test</h2>
                            <a href="citb-test.php" class="btn-custom">Apply Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services-wrap ftco-animate">
                        <div class="img" style="background-image: url(images/services-3.jpg);"></div>
                        <div class="text">
                            <div class="icon"><span class="flaticon-hammer"></span></div>
                            <h2>CPCS CARD</h2>
                            <a href="cpcs-card.php" class="btn-custom">Apply Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services-wrap ftco-animate">
                        <div class="img" style="background-image: url(images/services-2.jpg);"></div>
                        <div class="text">
                            <div class="icon"><span class="flaticon-worker"></span></div>
                            <h2>NVQ Course</h2>

                            <a href="nvq-training.php" class="btn-custom">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter">
        <div class="img image-overlay" style="background-image: url(imaConstruction Support is ages/about-3.jpg);">
        </div>
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6 py-5 bg-secondary aside-stretch">
                    <div class="heading-section heading-section-white p-4 pl-md-0 py-md-5 pr-md-5">
                        <span class="subheading">Train with us</span>
                        <h2 class="mb-4">We Offer the Best Training Across UK</h2>

                        <p>Our training courses aim to equip our learners with the skills, knowledge and experience
                            required for a career in the construction industry. We provide training for contractors,
                            subcontractors and organisations looking to recruit from the labour market. We are a company
                            with a proven track record in the construction industry, delivering high-quality training
                            and support services. Our team have worked within the sector for many years and as such,
                            have an in depth understanding of what is required to excel within this field. We are
                            committed to helping people succeed in their careers, whatever they might be.</p>
                        <p>We have NVQ courses available to achieve any construction card, including Green Laborer, Red
                            Trainee, Blue Skilled Worker, Black Manager, Gold Advanced Craft & Gold Supervisor.</p>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div class="row">
                        <div class="col-md-12 d-flex counter-wrap ftco-animate">
                            <div class="block-18 bg-primary d-flex align-items-center justify-content-between">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-engineer"></span></div>
                                <div class="text">
                                    <strong class="number">50+</strong>
                                    <span>Courses We Offer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex counter-wrap ftco-animate">
                            <div class="block-18 d-flex align-items-center justify-content-between">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-worker-1"></span></div>
                                <div class="text">
                                    <strong class="number">2500+</strong>
                                    <span>Passout Students</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="ftco-section">
  <div class="container">
   <div class="row justify-content-center mb-5 pb-3">
    <div class="col-md-7 text-center heading-section ftco-animate">
     <span class="subheading">Our Global Work Industries</span>
     <h2 class="mb-4">Latest Projects</h2>
    </div>
   </div>
   <div class="row">
    <div class="col-md-4">
     <div class="project">
      <a href="images/project-1.jpg" class="img image-popup d-flex align-items-center" style="background-image: url(images/project-1.jpg);">
       <div class="icon d-flex align-items-center justify-content-center mb-5"><span class="fa fa-plus"></span></div>
      </a>
      <div class="text">
       <span class="subheading">Building</span>
       <h3>Building A Condominium</h3>
       <p><span class="fa fa-map-marker mr-1"></span> San Francisco, California, USA</p>
      </div>
     </div>
    </div>
    <div class="col-md-4">
     <div class="project">
      <a href="images/project-1.jpg" class="img image-popup d-flex align-items-center" style="background-image: url(images/project-1.jpg);">
       <div class="icon d-flex align-items-center justify-content-center mb-5"><span class="fa fa-plus"></span></div>
      </a>
      <div class="text">
       <span class="subheading">Building</span>
       <h3>Building A Condominium</h3>
       <p><span class="fa fa-map-marker mr-1"></span> San Francisco, California, USA</p>
      </div>
     </div>
    </div>
    <div class="col-md-4">
     <div class="project">
      <a href="images/project-1.jpg" class="img image-popup d-flex align-items-center" style="background-image: url(images/project-1.jpg);">
       <div class="icon d-flex align-items-center justify-content-center mb-5"><span class="fa fa-plus"></span></div>
      </a>
      <div class="text">
       <span class="subheading">Building</span>
       <h3>Building A Condominium</h3>
       <p><span class="fa fa-map-marker mr-1"></span> San Francisco, California, USA</p>
      </div>
     </div>
    </div>

    <div class="col-md-4">
     <div class="project">
      <a href="images/project-1.jpg" class="img image-popup d-flex align-items-center" style="background-image: url(images/project-1.jpg);">
       <div class="icon d-flex align-items-center justify-content-center mb-5"><span class="fa fa-plus"></span></div>
      </a>
      <div class="text">
       <span class="subheading">Building</span>
       <h3>Building A Condominium</h3>
       <p><span class="fa fa-map-marker mr-1"></span> San Francisco, California, USA</p>
      </div>
     </div>
    </div>
    <div class="col-md-4">
     <div class="project">
      <a href="images/project-1.jpg" class="img image-popup d-flex align-items-center" style="background-image: url(images/project-1.jpg);">
       <div class="icon d-flex align-items-center justify-content-center mb-5"><span class="fa fa-plus"></span></div>
      </a>
      <div class="text">
       <span class="subheading">Building</span>
       <h3>Building A Condominium</h3>
       <p><span class="fa fa-map-marker mr-1"></span> San Francisco, California, USA</p>
      </div>
     </div>
    </div>
    <div class="col-md-4">
     <div class="project">
      <a href="images/project-1.jpg" class="img image-popup d-flex align-items-center" style="background-image: url(images/project-1.jpg);">
       <div class="icon d-flex align-items-center justify-content-center mb-5"><span class="fa fa-plus"></span></div>
      </a>
      <div class="text">
       <span class="subheading">Building</span>
       <h3>Building A Condominium</h3>
       <p><span class="fa fa-map-marker mr-1"></span> San Francisco, California, USA</p>
      </div>
     </div>
    </div>
   </div>
  </div>
 </section> -->

    <section class="ftco-section ftco-no-pt ftco-no-pb testimony-section img">
        <div class="overlay"></div>
        <div class="container">
            <div class="row ftco-animate justify-content-center">
                <div class="col-md-6 p-4 pl-md-0 py-md-5 pr-md-5 aside-stretch d-flex align-items-center">
                    <div class="heading-section heading-section-white">
                        <span class="subheading" style="color:#fff;">Read Testimonials</span>
                        <h2 class="mb-4" style="font-size: 50px;">It's always a joy to hear that the work we do has
                            positively reviews</h2>
                    </div>
                </div>
                <div class="col-md-6 pl-md-5 py-4 py-md-5 aside-stretch-right">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap py-4 pb-5 d-flex justify-content-between align-items-end">
                                <div class="user-img" style="background-image:>
									<span class=" quote d-flex
                                    align-items-center justify-content-center">
                                    <!-- <i class="fa fa-quote-left"></i> -->
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-4">Exceptional courses! I gained practical skills and industry
                                        insights that helped me secure a job in construction. Highly recommend CSS!</p>
                                    <p class="name">James Smith</p>
                                    <span class="position">Guests</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4 pb-5 d-flex justify-content-between align-items-end">
                                <div class="user-img" style="background-image:>
									<span class=" quote d-flex
                                    align-items-center justify-content-center">
                                    <!-- <i class="fa fa-quote-left"></i> -->
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-4">I'm impressed with the level of professionalism and expertise of
                                        the instructors. The courses are well-structured, easy to follow, and have
                                        greatly enhanced my knowledge in Health and Safety at construction site.</p>
                                    <p class="name">William Johnson</p>
                                    <span class="position">Guests</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4 pb-5 d-flex justify-content-between align-items-end">
                                <div class="user-img" style="background-image:>
									<span class=" quote d-flex
                                    align-items-center justify-content-center">
                                    <!-- <i class="fa fa-quote-left"></i> -->
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-4">Enrolling in Construction Skill Support Limited was a
                                        game-changer for me. After completing my NVQ Level 2 I feel confident and ready
                                        to embark on a successful career in construction.</p>
                                    <p class="name">Benjamin Williams</p>
                                    <span class="position">Guests</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4 pb-5 d-flex justify-content-between align-items-end">
                                <div class="user-img" style="background-image:>
									<span class=" quote d-flex
                                    align-items-center justify-content-center">
                                    <!-- <i class="fa fa-quote-left"></i> -->
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-4">The quality of education provided by this company exceeded my
                                        expectations. The instructors are knowledgeable, passionate, and dedicated to
                                        helping students succeed.</p>
                                    <p class="name">Thomas Brown</p>
                                    <span class="position">Guests</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4 pb-5 d-flex justify-content-between align-items-end">
                                <div class="user-img" style="background-image: >
									<span class=" quote d-flex
                                    align-items-center justify-content-center">
                                    <!-- <i class="fa fa-quote-left"></i> -->
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-4">I couldn't be happier with my decision to enroll in Level 1 Award
                                        in Health and Safety with CSS. The curriculum is comprehensive, up-to-date, and
                                        relevant to the industry's needs.</p>
                                    <p class="name">Alexander Jones</p>
                                    <span class="position">Guests</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Blogs Section --}}
    <section class="ftco-section bg-half-light">
        <div class="container">
            <div class="row justify-content-center pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate" id="our_services">
                    <h2 class="what-we-do">Blogs</h2>
                </div>
            </div>
            <div class="gtco-testimonials">
                <div class="owl-carousel owl-carousel1 owl-theme">
                    @foreach ($blogs as $blog)
                        <div>
                            <a href="{{ route('blog', $blog->id) }}">
                                <div class="card text-center">
                                    <img class="card-img-top" src="{{ Voyager::image($blog->image) }}"
                                        alt="">
                                    <div class="card-body">
                                        <h5>
                                            {{ implode(' ', array_slice(str_word_count($blog->title, 2), 0, 5)) }}
                                        </h5>
                                        <p class="card-text">
                                            {{ implode(' ', array_slice(str_word_count($blog->desc, 2), 0, 20)) }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">

            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="">
                        <form action="{{ route('enquiry') }}" method="POST" class="appointment-form ftco-animate fadeInUp ftco-animated">
                            @csrf
                            <h3>Apply Now</h3>
                            <div class="">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name"
                                        autocomplete="off" name="fname" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name" name="lname" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone" name="phone" required>
                                </div>
                            </div>

                            <div class="">
                                <div class="form-group">
                                    <textarea name="message" id="" cols="30" rows="4" class="form-control" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Request A Quote" class="btn btn-primary py-3 px-4">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6">
                    <h4>FAST AND EASY ONLINE COURSE TO APPLY CSCS GREEN AND OTHER CARDS</h4>
                    <p>The first step is to complete the construction card application form and submit it to the us.
                        Upon reciving your application we will ask for your contact details, qualifications, and
                        experience in the construction industry. Once your application has been received, you will be
                        required to complete the CITB Health, Safety and Environment Test. This is an online
                        multiple-choice test which requires you to demonstrate your understanding of health and safety
                        in the workplace. After you have passed the test, you will then be able to submit your
                        application to the construction office and receive your card. It is important to remember that
                        your construction card must be renewed every five years to stay valid.</p>
                </div>
            </div>
        </div>
    </section>
    <script>
        (function() {
            "use strict";

            var carousels = function() {
                $(".owl-carousel1").owlCarousel({
                    loop: true,
                    center: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    margin: 0,
                    responsiveClass: true,
                    nav: false,
                    responsive: {
                        0: {
                            items: 1,
                            nav: false
                        },
                        680: {
                            items: 2,
                            nav: false,
                            loop: false
                        },
                        1000: {
                            items: 3,
                            nav: true
                        }
                    }
                });
            };

            (function($) {
                carousels();
            })(jQuery);
        })();
    </script>
    @include('visitors.footer')

</body>

</html>
