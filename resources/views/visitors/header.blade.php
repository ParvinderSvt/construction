<div class="big-nav">
	<div class="container">
		<div class="row d-flex align-items-start align-items-center px-3 px-md-0">
			<div class="col-md-4 d-flex mb-2 mb-md-0">
				<a class="navbar-brand d-flex align-items-center" href="{{ route('index') }}">
					<!-- <span class="flaticon flaticon-crane"></span> -->
					<img class="sg-logo" src="{{ config('app.url') }}/images/logocss.jpg">
					<span class="ml-2" style="font-size: 38px;letter-spacing: 2px;">CSS <small style="letter-spacing: 0px;">Construction SKILL SUPPORT

						</small></span>
				</a>
			</div>
			<div class="col-md-4 d-flex topper mb-md-0 mb-2 align-items-center sm-hide">
				<div class="icon d-flex justify-content-center align-items-center">
					<span class="fa fa-phone"></span>
				</div>
				<div class="pr-md-4 pl-md-3 pl-3 text">

					<a href="tel:03333390390" style="font-size: 20px;margin-bottom: 0;">033 33 390 390</a>
					<p class="con"> <span></span> <span>Mon-Fri (8:00 AM To 7:00 PM) </span></p>
				</div>
			</div>
			<div class="col-md-4 d-flex topper mb-md-0 align-items-center sm-hide">
				<div class="icon d-flex justify-content-center align-items-center"><span class="fa fa-envelope"></span>
				</div>
				<div class="text pl-3 pl-md-3">
					<p class="hr"><span>Email us :</span></p>
					<a href="mailto:contact@constructionskillsupport.co.uk" class="email-button">contact@constructionskillsupport.co.uk</a>
				</div>
			</div>
		</div>
	</div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light small-nav" id="ftco-navbar">
	<div class="container d-flex align-items-center">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="fa fa-bars"></span> Menu
		</button>
		<div class="collapse navbar-collapse" id="ftco-nav">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item"><a href="{{ route('index') }}" class="nav-link">Home</a></li>
				<li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About Us</a></li>
				<li class="nav-item"><a href="{{ route('constrution') }}" class="nav-link">What Is Construction Card?</a></li>
				<li class="nav-item"><a href="{{ route('healthsafety') }}" class="nav-link">Health &amp; Safety Courses</a></li>

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						ELearning
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="{{ route('elearning') }}">Healthy &amp; Safety</a>
						<a class="dropdown-item" href="{{ route('business') }}">Business Skills</a>
						<a class="dropdown-item" href="{{ route('healthsocial') }}">Health &amp; Social Care</a>
					</div>
				</li>
				<li class="nav-item"><a href="{{ route('citb-test') }}" class="nav-link">CITB Test</a></li>
				<li class="nav-item"><a href="{{ route('cpcs-card') }}" class="nav-link">CPCS Card</a></li>
				<li class="nav-item"><a href="{{ route('nvq-training') }}" class="nav-link">NVQ Training</a></li>
			</ul>
		</div>
	</div>
</nav>
