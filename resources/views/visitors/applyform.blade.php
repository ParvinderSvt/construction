<!DOCTYPE html>
<html lang="en">
<head>
	<title>Apply Form |CONSTRUCTION SKILL SUPPORT</title>
    <meta name="description" content="We offer a range of NVQs, construction cards and other construction based learning to help our learners achieve their full potential." />
    <link rel="canonical" href="https://mdayurvediccollege.in/demo/construction/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="SG | CONSTRUCTION COMPANY" />
    <meta property="og:description" content="We offer a range of NVQs, construction cards and other construction based learning to help our learners achieve their full potential." />
    <meta property="og:url" content="https://mdayurvediccollege.in/demo/construction/" />
    <meta property="og:site_name" content="SG" />
    <meta property="og:image" content="https://mdayurvediccollege.in/demo/construction/assets/assets/images/og-logo.jpg" />

    <!-- ============ FAVICON ============ -->

   @include('visitors.head')
    </head>

<body>
	@include('visitors.header')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end justify-content-start">
				<div class="col-md-9 ftco-animate pb-5">
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Apply Form <i class="fa fa-chevron-right"></i></span></p>
					<h1 class="mb-3 bread">Apply Form</h1>
				</div>
			</div>
		</div>
	</section>

    <!-- <section class="ftco-section bg-light">
		<div class="container">

			<div class="row d-flex">
				<div class="col-lg-6">
					<div class="">
						<form action="#" class="appointment-form ftco-animate fadeInUp ftco-animated">
							<h3>Request Quote</h3>
							<div class="">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="First Name" autocomplete="off">
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
									<textarea name="" id="" cols="30" rows="4" class="form-control" placeholder="Message"></textarea>
								</div>
								<div class="form-group">
									<input type="submit" value="Request A Quote" class="btn btn-primary py-3 px-4">
								</div>
							</div>
						</form>
					</div>
				</div>
<-- </section> -->
<!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true" class="fa fa-close"></span>
				</button>
			</div> -->
			<div class="modal-body p-4 p-md-5">
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


	@include('visitors.footer')

	</body>
	</html>

