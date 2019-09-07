@extends('layouts.app')

@section('content')
	@include('layouts.main-banner')

	<div id="how-it-helps" style="background: hsl(0, 0%, 95%);">
		<div class="container pt-64 pb-64">
			<div class="row">
				<div class="col-12">
					<h1 class="text-center roboto">How It Helps You Improve Your Tennis</h1>
				</div>
			</div>

			<div class="row mt-32">
				<div class="col-lg-6 col-md-6 col-sm-12 col-12">
					<div class="help-box">
						<div class="set-bg image" data-setbg="https://thumbs.gfycat.com/ExhaustedImpassionedEgret-size_restricted.gif"></div>
						<div class="info">
							<h5 class="mb-2">Drills and Workouts Just for You</h5>
							<p class="mb-0">Based on how you do in practice and matches, it will recommend different drills and workouts that will help you the most. Have a purpose for each practice session.</p>
						</div>
					</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-32-mobile">
					<div class="help-box">
						<div class="set-bg image" data-setbg="https://media.giphy.com/media/11yLeZvSCMa6cg/giphy.gif"></div>
						<div class="info">
							<h5 class="mb-2">Learn Strategies Based on Your Style</h5>
							<p class="mb-0">By analyzing the data entered during practice and matches, the system will recommend you strategies that work well with your strengths. Play smarter with solid strategies.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="row mt-32">
				<div class="col-lg-6 col-md-6 col-sm-12 col-12">
					<div class="help-box">
						<div class="set-bg image" data-setbg="https://media1.tenor.com/images/ff037bf8096b2fbe117428313d8331ed/tenor.gif"></div>
						<div class="info">
							<h5 class="mb-2">Visually See How You're Improving</h5>
							<p class="mb-0">You no longer have to guess if you're getting better. With the data that you enter, you can visually see how much you've improved over time. Be confident when going into a match.</p>
						</div>
					</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-32-mobile">
					<div class="help-box">
						<div class="set-bg image" data-setbg="https://labblog.uofmhealth.org/sites/lab/files/2017-05/MichiganMed_L_ExerciseBrain.gif"></div>
						<div class="info">
							<h5 class="mb-2">Quickly Improve Your Mental Strength</h5>
							<p class="mb-0">What good are polished strokes if your nerves destroy them in a match? Don't let that happen to you. We've got content that'll help you master the psychological side of tennis.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

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

	<div id="pricing" style="background: hsl(0, 0%, 95%);">
		<div class="container pt-64 pb-64">
			<div class="row">
				<div class="col-12">
					<h2 class="text-center">How Much Will It Cost?</h2>
				</div>
			</div>

			<div class="row mt-32">
				<div class="col-lg-4 col-md-4 col-sm-12 col-12">
					<table style="width: 100%;">
						<thead>
							<tr>
								<th style="background: #cd7f32; border-radius: 8px 8px 0px 0px; padding: 16px;">
									<h3 class="text-center mb-1 roboto white">Bronze</h3>
									<h5 class="text-center mb-0 lato white">$24/mo</h5>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td style="background: white; padding: 16px;">
									<p class="text-center mb-0 roboto"><i class="fas fa-check green" style="display: inline-block; float: left; margin-top: 0.25em;"></i> Customized Drills</p>
								</td>
							</tr>

							<tr>
								<td style="background: white; padding: 16px;">
									<p class="text-center mb-0 roboto"><i class="fas fa-check green" style="display: inline-block; float: left; margin-top: 0.25em;"></i> Customized Workouts</p>
								</td>
							</tr>

							<tr>
								<td style="background: #EAEAEA; padding: 16px;">
									<p class="text-center mb-0 roboto"><i class="fas fa-times red" style="display: inline-block; float: left; margin-top: 0.25em;"></i> Access to Mental Strength Content</p>
								</td>
							</tr>

							<tr>
								<td style="background: #EAEAEA; padding: 16px; border-radius: 0px 0px 8px 8px;">
									<p class="text-center mb-0 roboto"><i class="fas fa-times red" style="display: inline-block; float: left; margin-top: 0.25em;"></i> View Improvement Graphs</p>
								</td>
							</tr>

							<tr>
								<td style="background: #EAEAEA; padding: 16px; border-radius: 0px 0px 8px 8px;">
									<p class="text-center mb-0 roboto"><i class="fas fa-times red" style="display: inline-block; float: left; margin-top: 0.25em;"></i> Custom Strategies</p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-12 col-12 mt-32-mobile">
					<table style="width: 100%;">
						<thead>
							<tr>
								<th style="background: #C0C0C0; border-radius: 8px 8px 0px 0px; padding: 16px;">
									<h3 class="text-center mb-1 roboto white">Silver</h3>
									<h5 class="text-center mb-0 lato white">$48/mo</h5>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td style="background: white; padding: 16px;">
									<p class="text-center mb-0 roboto"><i class="fas fa-check green" style="display: inline-block; float: left; margin-top: 0.25em;"></i> Customized Drills</p>
								</td>
							</tr>

							<tr>
								<td style="background: white; padding: 16px;">
									<p class="text-center mb-0 roboto"><i class="fas fa-check green" style="display: inline-block; float: left; margin-top: 0.25em;"></i> Customized Workouts</p>
								</td>
							</tr>

							<tr>
								<td style="background: white; padding: 16px;">
									<p class="text-center mb-0 roboto"><i class="fas fa-check green" style="display: inline-block; float: left; margin-top: 0.25em;"></i> Access to Mental Strength Content</p>
								</td>
							</tr>

							<tr>
								<td style="background: #EAEAEA; padding: 16px; border-radius: 0px 0px 8px 8px;">
									<p class="text-center mb-0 roboto"><i class="fas fa-times red" style="display: inline-block; float: left; margin-top: 0.25em;"></i> View Improvement Graphs</p>
								</td>
							</tr>

							<tr>
								<td style="background: #EAEAEA; padding: 16px; border-radius: 0px 0px 8px 8px;">
									<p class="text-center mb-0 roboto"><i class="fas fa-times red" style="display: inline-block; float: left; margin-top: 0.25em;"></i> Custom Strategies</p>
								</td>
							</tr>

						</tbody>
					</table>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-12 col-12 mt-32-mobile">
					<table style="width: 100%;">
						<thead>
							<tr>
								<th style="background: #D4AF37; border-radius: 8px 8px 0px 0px; padding: 16px;">
									<h3 class="text-center mb-1 roboto white">Gold</h3>
									<h5 class="text-center mb-0 lato white">$64/mo</h5>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td style="background: white; padding: 16px;">
									<p class="text-center mb-0 roboto"><i class="fas fa-check green" style="display: inline-block; float: left; margin-top: 0.25em;"></i> Customized Drills</p>
								</td>
							</tr>

							<tr>
								<td style="background: white; padding: 16px;">
									<p class="text-center mb-0 roboto"><i class="fas fa-check green" style="display: inline-block; float: left; margin-top: 0.25em;"></i> Customized Workouts</p>
								</td>
							</tr>

							<tr>
								<td style="background: white; padding: 16px;">
									<p class="text-center mb-0 roboto"><i class="fas fa-check green" style="display: inline-block; float: left; margin-top: 0.25em;"></i> Access to Mental Strength Content</p>
								</td>
							</tr>

							<tr>
								<td style="background: white; padding: 16px; border-radius: 0px 0px 8px 8px;">
									<p class="text-center mb-0 roboto"><i class="fas fa-check green" style="display: inline-block; float: left; margin-top: 0.25em;"></i> View Improvement Graphs</p>
								</td>
							</tr>

							<tr>
								<td style="background: white; padding: 16px; border-radius: 0px 0px 8px 8px;">
									<p class="text-center mb-0 roboto"><i class="fas fa-check green" style="display: inline-block; float: left; margin-top: 0.25em;"></i> Custom Strategies</p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div id="guarantee" style="background: hsl(0, 0%, 15%);">
		<div class="container pt-64 pb-64">
			<div class="row">
				<div class="col-12">
					<h3 class="text-center white roboto">If Your Skills Don't Start Improving After 2 Weeks, Get Your Money Back</h3>
					<p class="text-center white lato mb-0">We're confident you'll improve after just 2 weeks of practice while using this app. If you don't see any sliver of improvement, we'll send you your money back right away, no questions asked.</p>
				</div>
			</div>
		</div>
	</div>

	<div id="register" style="background: hsl(0,  0%, 95%);">
		<div class="container pt-64 pb-64">
			<div class="row">
				<div class="col-12">
					<h2 class="text-center roboto">Start Improving Your Tennis Skills Today</h2>
					<p class="text-center lato">Not only are we going to give you a 2-week money-back guarantee, we're going to let you try the app for 14 days without ever having to enter a card. We want you to experience first-hand how powerful this app is and how it can improve your game.</p>
				</div>
			</div>

			<div class="row mt-32 justify-content-center">
				<div class="col-lg-7 col-md-8 col-sm-10 col-12">
					<div class="p-32" style="background: white; border: 4px solid #E0E0E0; border-radius: 8px;">
						<div class="form-group row">
							<div class="col-12">
								<h4 class="text-center">Invite Access Only</h4>
								<p class="text-center mb-16">We are currently only letting serious tennis players beta test the app. This is invite only. Drop your email and our team will contact you through email to see if you're a good fit for our beta test and invite you.</p>
							</div>
						</div>

						<div class="form-group row">
							<div class="col-12">
								<label>Email:</label>
								<input type="email" class="form-control" id="email">
								<p id="submit_error" class="red mt-1 mb-0" style="display: none;"><small>Please fill out this field.</small></p>
							</div>
						</div>

						<p id="submit_success" class="green text-center mb-0" style="display: none;">Successfully submitted your email!</p>

						<div class="form-group row mt-16">
							<div class="col-12">
								<button type="button" class="btn btn-success lato centered submit_button">Submit and Get Invite Code</button>
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
		var _token = '{{ csrf_token() }}';

		$('.submit_button').on('click', function() {
			if ($('#email').val() != '') {
				$('#email').css('border', '1px solid green');
				$('#submit_error').hide();

				$.ajax({
					url : '/api/leads/submit',
					type : 'POST',
					data : {
						'_token' : _token,
						'email' : email
					},
					success : function(data) {
						if (data == true) {
							$('#submit_success').show();
						}
					}
				});
			} else {
				$('#email').css('border', '1px solid red');
				$('#submit_error').show();
			}
		});
	</script>
@endsection