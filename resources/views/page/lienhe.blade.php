@extends('master')
@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Contacts</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="index">Home</a> / <span>Contacts</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	{{--<div class="beta-map">

		<div class="abs-fullwidth beta-map wow flipInX"><iframe src="https://www.google.com/maps/place/91+%C4%90%C6%B0%E1%BB%9Dng+C%E1%BA%A7u+Di%E1%BB%85n,+Ph%C3%BAc+Di%E1%BB%85n,+T%E1%BB%AB+Li%C3%AAm,+H%C3%A0+N%E1%BB%99i,+Vietnam/@21.0451738,105.7493923,18z/data=!4m5!3m4!1s0x313454ec1a00c13d:0x9911c6037af95f58!8m2!3d21.0450862!4d105.75164" width="600" height="450" frameborder="0" style="border:0" allowfullscreen"></iframe></div>
	</div>--}}
	<div class="container">
		<div id="content" class="space-top-none">

			<div class="space50">&nbsp;</div>
			<div class="row">
				<div class="col-sm-8">
					<h2>Contact Form</h2>
					<div class="space20">&nbsp;</div>
					<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit ani m id est laborum.</p>
					<div class="space20">&nbsp;</div>
					<form action="#" method="post" class="contact-form">
						<div class="form-block">
							<input name="your-name" type="text" placeholder="Your Name (required)">
						</div>
						<div class="form-block">
							<input name="your-email" type="email" placeholder="Your Email (required)">
						</div>
						<div class="form-block">
							<input name="your-subject" type="text" placeholder="Subject">
						</div>
						<div class="form-block">
							<textarea name="your-message" placeholder="Your Message"></textarea>
						</div>
						<div class="form-block">
							<button type="submit" class="beta-btn primary">Send Message <i class="fa fa-chevron-right"></i></button>
						</div>
					</form>
				</div>
				<div class="col-sm-4">
					<h2>Contact Information</h2>
					<div class="space20">&nbsp;</div>

					<h6 class="contact-title">Address</h6>
					<p>
						91 Đường Cầu Diễn, Phúc Diễn, Từ Liêm, Hà Nội, Vietnam <br>

					</p>
					<div class="space20">&nbsp;</div>
					<h6 class="contact-title">Business Enquiries</h6>
					<p>
						Doloremque laudantium, totam rem aperiam, <br>
						inventore veritatio beatae. <br>
						<a href="mailto:biz@betadesign.com">biz@betadesign.com</a>
					</p>
					<div class="space20">&nbsp;</div>
					<h6 class="contact-title">Employment</h6>
					<p>
						We’re always looking for talented persons to <br>
						join our team. <br>
						<a href="hr@betadesign.com">hr@betadesign.com</a>
					</p>
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection
