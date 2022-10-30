<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="დამზადებულია ITWEB ში">
    <meta name="author" content="დამზადებულია ITWEB ში">
    <meta name="keywords" content="კომპანია ITWEB.GE  დამზადებულია საქართველოში">

    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

    <!-- Title -->
    <title>VGIO CLEANER</title>

	<link rel="stylesheet" href="{{ asset('assets/admin/assets/fonts/fonts/font-awesome.min.css') }}">

	<!-- Bootstrap Css -->
	<link href="{{ asset('assets/admin/assets/plugins/bootstrap-4.3.1-dist/css/bootstrap.min.css') }}" rel="stylesheet" />

	<!-- Sidemenu Css -->
	<link href="{{ asset('assets/admin/assets/css/sidemenu.css') }}" rel="stylesheet" />

	<!-- Dashboard css -->
	<link href="{{ asset('assets/admin/assets/css/style.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/admin/assets/css/admin-custom.css') }}" rel="stylesheet" />

	<!-- c3.js Charts Plugin -->
	<link href="../assets/plugins/charts-c3/c3-chart.css" rel="stylesheet" />

	<!---Font icons-->
	<link href="{{ asset('assets/admin/assets/css/icons.css') }}" rel="stylesheet"/>
	<link href="{{ asset('assets/admin/assets/plugins/iconfonts/icons.css') }}" rel="stylesheet" />

	</head>
	<body class="construction-image">



		<!--Page-->
		<div class="page  h-100">
			<div class="page-content z-index-10">
				<div class="container">
					<div class="row">
						<div class="col-xl-4 col-md-12 col-md-12 d-block mx-auto">
							<div class="card mb-0">
								<div class="card-header">
									<h3 class="card-title">ავტორიზაცია</h3>
								</div>

								<div class="card-body">
									<form method="POST" action="{{ route('login') }}">
                                        @csrf


										<div class="form-group">
											<label class="form-label text-dark">ელფოსტა</label>
											<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

										</div>
										<div class="form-group">
											<label class="form-label text-dark">პაროლი</label>
											<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

										</div>
										<div class="form-footer mt-2">
											<button type="submit" class="btn btn-primary btn-block">
												შესვლა
											</button>
										</div>



									<div class="text-center  mt-3 text-dark">
										გიორგი ვეფხვაძე 595 78 34 34
									</div>
								</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>





		<!-- Dashboard Core -->
		<script src="{{ asset('assets/admin/assets/js/vendors/jquery-3.2.1.min.js') }}"></script>
		<script src="{{ asset('assets/admin/assets/plugins/bootstrap-4.3.1-dist/js/popper.min.js') }}"></script>
		<script src="{{ asset('assets/admin/assets/plugins/bootstrap-4.3.1-dist/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('assets/admin/assets/js/vendors/jquery.sparkline.min.js') }}"></script>
		<script src="{{ asset('assets/admin/assets/js/vendors/selectize.min.js') }}"></script>
		<script src="{{ asset('assets/admin/assets/js/vendors/jquery.tablesorter.min.js') }}"></script>
		<script src="{{ asset('assets/admin/assets/js/vendors/circle-progress.min.js') }}"></script>
		<script src="{{ asset('assets/admin/assets/plugins/rating/jquery.rating-stars.js') }}"></script>

		<!-- p-scroll bar Js-->
		<script src="{{ asset('assets/admin/assets/plugins/pscrollbar/pscrollbar.js') }}"></script>
		<script src="{{ asset('assets/admin/assets/plugins/pscrollbar/pscroll.js') }}"></script>

			<!-- Fullside-menu Js-->
			<script src="{{ asset('assets/admin/assets/plugins/toggle-sidebar/sidemenu.js') }}"></script>

	<!--Counters -->
	<script src="{{ asset('assets/admin/assets/plugins/counters/counterup.min.js') }}"></script>
	<script src="{{ asset('assets/admin/assets/plugins/counters/waypoints.min.js"') }}"></script>


	<!-- Custom Js-->
	<script src="{{ asset('assets/admin/assets/js/admin-custom.js') }}"></script>

	</body>
</html>
