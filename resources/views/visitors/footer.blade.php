<footer class="ftco-footer">
    <div class="container pb-4">
        <div class="row">
            <div class="col-lg col-md-6">
                <div class="ftco-footer-widget">
                    <h2 class="ftco-heading-2 d-flex align-items-center">CSS Construction Skill Support</h2>
                    <p>We offer a range of NVQs, construction cards and other construction based learning to help our
                        learners achieve their full potential. We pride ourselves on delivering excellent customer
                        service, attentive technical support and fantastic value for money in all that we do. </p>
                    <ul class="ftco-footer-social list-unstyled mt-4">
                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="ftco-footer-widget">
                    <h2 class="ftco-heading-2">Links</h2>
                    <div class="d-flex">
                        <ul class="list-unstyled mr-md-4">
                            <li><a href="{{ route('index') }}"><span class="fa fa-chevron-right mr-2"></span> Home</a>
                            </li>
                            <li><a href="{{ route('about') }}"><span class="fa fa-chevron-right mr-2"></span> About
                                    Us</a></li>
                            <li><a href="{{ route('constrution') }}"><span class="fa fa-chevron-right mr-2"></span> What
                                    Is
                                    Construction Card?</a></li>

                            <li><a href="{{ route('healthsafety') }}"><span class="fa fa-chevron-right mr-2"></span>
                                    Health &
                                    Safety Courses</a></li>

                        </ul>

                        <ul class="list-unstyled ml-md-5">
                            <li><a href="{{ route('elearning') }}"><span class="fa fa-chevron-right mr-2"></span>
                                    Healthy &amp; Safety</a>
                            </li>
                            <li><a href="{{ route('citb-test') }}"><span class="fa fa-chevron-right mr-2"></span> CITB
                                    Test</a>
                            </li>
                            <li><a href="{{ route('cpcs-card') }}"><span class="fa fa-chevron-right mr-2"></span> CPCS
                                    Card</a>
                            </li>
                            <li><a href="{{ route('nvq-training') }}"><span class="fa fa-chevron-right mr-2"></span> NVQ
                                    Training</a></li>
                        </ul>
                    </div>
                </div>
            </div>



            <div class="col-lg col-md-6">
                <div class="ftco-footer-widget">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <!-- <li><span class="fa fa-map-marker mr-3"></span><span class="text">302 Prateek Center Sanjay Place</span></li> -->
                            <li><a href="#"><span class="fa fa-phone mr-3"></span><span class="text">033 33 390
                                        390</span></a></li>
                            <li><a href="#"><span class="fa fa-paper-plane mr-3"></span><span
                                        class="text">contact@constructionskillsupport.co.uk</span></a></li>
                            <li><a href="#"><span class="fa fa-home mr-3"></span><span class="text">Registered
                                        Address - 71-75 Shelton Street, Covent Garden, London, WC2H 9JQ, United
                                        Kingdom</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="py-3 mb-2 text-center px-3">
        <p class="mb-0">
            Construction Skill Support makes it clear that we are not affiliated with, a member of, or a part of the
            CSCS or the CITB .
        </p>
    </div>

    <!--<div class="container-fluid bg-primary">-->
    <!--	<div class="container">-->
    <!--		<div class="row">-->
    <!--			<div class="col-md-6 aside-stretch py-3">-->
    <!--        	<a href="./term.php">-->
    <!--				<p class="mb-0">-->
    <!--Copyright &copy;<script>
        -- >
        <
        !--document.write(new Date().getFullYear());
        -- >
        <
        !--
    </script> All rights reserved </p>-->
    <!--					Terms and Condtions-->
    <!--                </p>-->
    <!--            </a>-->
    <!--			</div>  -->
    <!--		</div>-->
    <!--	</div>-->
    <!--</div>-->
    <div class="conatiner mx-5 pb-2">
        <div class="row">
            <div class="col-lg-8 col-12">Copyright &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script> All Rights Reserved | CONSTRUCTION SKILL SUPPORT
            </div>
            <div class="col-lg-4 col-12 ">
                <a href="{{ route('faq') }}" style="color: #999999;"> FAQ </a> |
                <a href="{{ route('privacy') }}" style="color: #999999;"> Privacy Policy </a> |
                <a href="{{ route('term') }}" style="color: #999999;"> Terms & Conditions </a> |
                <a href="{{ route('return') }}" style="color: #999999;"> Refund Policy
            </div>
        </div>
    </div>
</footer>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close d-flex align-items-center justify-content-center"
                    data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="fa fa-close"></span>
                </button>
            </div>
            <div class="modal-body p-4 p-md-5">
                <form action="#" class="appointment-form ftco-animate">
                    <h3>Request Quote</h3>
                    <div class="">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Phone">
                        </div>
                    </div>
                    <div class="">
                        <div class="form-group">
                            <div class="form-field">
                                <div class="select-wrap">
                                    <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                    <select name="" id="" class="form-control">
                                        <option value="">Select Your Services</option>
                                        <option value="">Architecture</option>
                                        <option value="">Renovation</option>
                                        <option value="">Construction</option>
                                        <option value="">Interior &amp; Exterior</option>
                                        <option value="">Chemical Research</option>
                                        <option value="">Petroleum &amp; Gas</option>
                                        <option value="">Other Services</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="4" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Request A Quote" class="btn btn-primary py-3 px-4">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
            stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
            stroke-miterlimit="10" stroke="#F96D00" />
    </svg></div>

<a data-toggle="modal" data-target="#exampleModal" href="#exampleModal" class="sticky-btn">Apply Now</a>

 <!-- Modal -->
{{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">We Will Call You Back!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="">
                    <div class="container">
                        <form action="{{ route('form') }}" method="POST" class="appointment-form ftco-animate">
                            @csrf
                            <h3>Request Quote</h3>
                            <div class="">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name" name="fname" >
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name" name="lname" >
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone" name="phone" >
                                </div>
                            </div>
                            <div class="">
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                            <select name="course" id="" class="form-control">
                                                <option value="">Select Courses</option>
                                                <option value="Level 2">Level 2</option>
                                                <option value="Level 3">Level 3</option>
                                                <option value="Level 4">Level 4</option>
                                                <option value="Level 5">Level 5</option>
                                                <option value="Level 6">Level 6</option>
                                                <option value="Level 7">Level 7</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="">
                            <div class="form-group">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                            <select name="card" id="" class="form-control">
                                                <option value="Apply for Construction Card">Apply for Construction Card</option>
                                                <option value="RED APPRENTICE CARD">RED APPRENTICE CARD</option>
                                                <option value="INDUSTRY PLACEMENT CONSTRUCTION CARD">INDUSTRY PLACEMENT CONSTRUCTION CARD</option>
                                                <option value="RED EXPERIENCED WORKER CONSTRUCTION CARD">RED EXPERIENCED WORKER CONSTRUCTION CARD</option>
                                                <option value="RED CONSTRUCTION CARD – EXPERIENCED TECHNICIAN, SUPERVISOR OR MANAGER">RED CONSTRUCTION CARD – EXPERIENCED TECHNICIAN, SUPERVISOR OR MANAGER</option>
                                                <option value="PROVISIONAL RED CONSTRUCTION CARD">PROVISIONAL RED CONSTRUCTION CARD</option>
                                                <option value="RED CONSTRUCTION CARD – TRAINEE">RED CONSTRUCTION CARD – TRAINEE</option>
                                                <option value="WHITE/YELLOW CONSTRUCTION CARD – ACADEMICALLY QUALIFIED PERSON">WHITE/YELLOW CONSTRUCTION CARD – ACADEMICALLY QUALIFIED PERSON</option>
                                            </select>
                                        </div>
                                        <br>
                                <!-- <div class="form-group">
                                    <textarea name="" id="" cols="30" rows="4" class="form-control" placeholder="Message"></textarea>
                                </div> -->
                                <div class="form-group">
                                    <input type="submit" value="Request A Quote" class="btn btn-primary py-3 px-4">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div> --}}
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title p-2" id="exampleModalLabel">Request Quote</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">X</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('form') }}" method="POST" class="appointment-form ftco-animate">
                @csrf
                <div class="">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="First Name" name="fname" >
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Last Name" name="lname" >
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Phone" name="phone" >
                    </div>
                </div>
                <div class="">
                    <div class="form-group">
                        <div class="form-field">
                            <div class="select-wrap">
                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                <select name="course" id="" class="form-control">
                                    <option value="">Select Courses</option>
                                    <option value="Level 2">Level 2</option>
                                    <option value="Level 3">Level 3</option>
                                    <option value="Level 4">Level 4</option>
                                    <option value="Level 5">Level 5</option>
                                    <option value="Level 6">Level 6</option>
                                    <option value="Level 7">Level 7</option>
                                </select>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="">
                <div class="form-group">
                        <div class="form-field">
                            <div class="select-wrap">
                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                <select name="card" id="" class="form-control">
                                    <option value="Apply for Construction Card">Apply for Construction Card</option>
                                    <option value="RED APPRENTICE CARD">RED APPRENTICE CARD</option>
                                    <option value="INDUSTRY PLACEMENT CONSTRUCTION CARD">INDUSTRY PLACEMENT CONSTRUCTION CARD</option>
                                    <option value="RED EXPERIENCED WORKER CONSTRUCTION CARD">RED EXPERIENCED WORKER CONSTRUCTION CARD</option>
                                    <option value="RED CONSTRUCTION CARD – EXPERIENCED TECHNICIAN, SUPERVISOR OR MANAGER">RED CONSTRUCTION CARD – EXPERIENCED TECHNICIAN, SUPERVISOR OR MANAGER</option>
                                    <option value="PROVISIONAL RED CONSTRUCTION CARD">PROVISIONAL RED CONSTRUCTION CARD</option>
                                    <option value="RED CONSTRUCTION CARD – TRAINEE">RED CONSTRUCTION CARD – TRAINEE</option>
                                    <option value="WHITE/YELLOW CONSTRUCTION CARD – ACADEMICALLY QUALIFIED PERSON">WHITE/YELLOW CONSTRUCTION CARD – ACADEMICALLY QUALIFIED PERSON</option>
                                </select>
                            </div>
                            <br>

                    {{-- <div class="form-group">
                        <input type="" value="Request A Quote" class="btn btn-primary py-3 px-4">
                    </div> --}}
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Request A Quote</button>
        </div>
      </div>
    </div>
  </div>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        // Function to open Tawk.to widget
        function openTawkToWidget() {
            if (!Tawk_API || !Tawk_API.toggle) return;
            Tawk_API.toggle();
        }

        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/65f144228d261e1b5f6d146a/1hor74a2s';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');

        // Open Tawk.to widget when the Tawk.to script is loaded
        s1.onload = openTawkToWidget;

        s0.parentNode.insertBefore(s1, s0);
    })();
</script>


<!--End of Tawk.to Script-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="{{ config('app.url') }}/js/jquery.min.js"></script>
<script src="{{ config('app.url') }}/js/jquery-migrate-3.0.1.min.js"></script>
<script src="{{ config('app.url') }}/js/popper.min.js"></script>
<script src="{{ config('app.url') }}/js/bootstrap.min.js"></script>
<script src="{{ config('app.url') }}/js/jquery.easing.1.3.js"></script>
<script src="{{ config('app.url') }}/js/jquery.waypoints.min.js"></script>
<script src="{{ config('app.url') }}/js/jquery.stellar.min.js"></script>
<script src="{{ config('app.url') }}/js/owl.carousel.min.js"></script>
<script src="{{ config('app.url') }}/js/jquery.magnific-popup.min.js"></script>
<script src="{{ config('app.url') }}/js/jquery.animateNumber.min.js"></script>
<script src="{{ config('app.url') }}/js/bootstrap-datepicker.js"></script>
<script src="{{ config('app.url') }}/js/jquery.timepicker.min.js"></script>
<script src="{{ config('app.url') }}/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>

<script src="{{ config('app.url') }}/js/main.js"></script>

@if (Session::has('success'))
    <script>
        swal("Success", "{{ Session::get('success') }}", 'success', {
            buttons: {
                confirm: "OK",
            },
        });
    </script>
@endif
