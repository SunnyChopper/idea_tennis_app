@extends('layouts.app')

@section('content')
	@include('layouts.main-banner')

	<div id="how-it-works">
		<div class="container pt-64 pb-64">
			<div class="row">
				<div class="col-12">
					<h2 class="text-center roboto">How It Works</h2>
				</div>
			</div>

			<div class="row mt-32">
				<div class="col-lg-3 col-md-6 col-sm-12 col-12">
					<div class="icon-box">
						<div class="icon">
							<h3 class="text-center mb-3"><span style="font-size: 48px; color: #2ecc71;"><i class="fas fa-file"></i></span></h3>
							<h4 class="text-center" style="color: #2ecc71;">1. Take Initial Quiz</h4>
							<p class="text-center mb-0"><small>Take the initial quiz to give the system an idea of your strengths and weaknesses. From there, you will be recommended drills, workouts, and content.</small></p>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-12 col-12 mt-32-mobile">
					<div class="icon-box">
						<div class="icon">
							<h3 class="text-center mb-3"><span style="font-size: 48px; color: #2ecc71;"><i class="fas fa-bolt"></i></span></h3>
							<h4 class="text-center" style="color: #2ecc71;">2. Go Practice</h4>
							<p class="text-center mb-0"><small>Once your initial drills, workouts, and content are setup, pick a drill and get to a court. Make sure you track the data that each drill requires for completion.</small></p>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-12 col-12 mt-32-mobile">
					<div class="icon-box">
						<div class="icon">
							<h3 class="text-center mb-3"><span style="font-size: 48px; color: #2ecc71;"><i class="fas fa-search"></i></span></h3>
							<h4 class="text-center" style="color: #2ecc71;">3. Analyze Data</h4>
							<p class="text-center mb-0"><small>Using the data you provide from drills and workouts, we will analyze the data and recommened you new drills, workouts, and content for getting to the next level.</small></p>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-12 col-12 mt-32-mobile">
					<div class="icon-box">
						<div class="icon">
							<h3 class="text-center mb-3"><span style="font-size: 48px; color: #2ecc71;"><i class="fas fa-signal"></i></span></h3>
							<h4 class="text-center" style="color: #2ecc71;">4. See Results</h4>
							<p class="text-center mb-0"><small>Over time, as you collect more data, you'll be able to clearly see how you've been improving as a tennis player and how you can further improve your tennis skills.</small></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="register" style="background: hsl(0,  0%, 95%);">
		<div class="container pt-64 pb-64">
			<div class="row">
				<div class="col-12">
					<h2 class="text-center roboto">Start Improving Your Tennis Skills Today</h2>
					<p class="text-center lato">Try out the platform for 14 days and see if it makes a difference in your game. After your trial is over, it's <u><b>$47/mo</b></u>.</p>
				</div>
			</div>

			<div class="row mt-32 justify-content-center">
				<div class="col-lg-7 col-md-8 col-sm-10 col-12">
					<div class="p-32" style="background: white; border: 4px solid #E0E0E0; border-radius: 8px;">
						<div class="form-group row">
							<div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-8-mobile">
								<label>Email:</label>
								<input type="email" class="form-control" id="email">
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-16-mobile">
								<label>Password:</label>
								<input type="password" class="form-control" id="password">
							</div>
						</div>

						<div class="form-group row mt-32-mobile">
							<div class="col-12">
								<button type="button" class="btn btn-success lato centered submit_button">Access 14-Day Free Trial</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('page_js')
	<script type='text/javascript'>
		
	</script>
@endsection