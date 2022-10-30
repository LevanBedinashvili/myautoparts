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
		<title>AutoParts - Admin</title>
		<link rel="stylesheet" href="{{ asset('assets/admin/assets/fonts/fonts/font-awesome.min.css') }}">

		<!-- Font Family-->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

		<!-- Bootstrap Css -->
		<link href="{{ asset('assets/admin/assets/plugins/bootstrap-4.3.1-dist/css/bootstrap.min.css') }}" rel="stylesheet" />

		<!-- Dashboard Css -->
		<link href="{{ asset('assets/admin/assets/css/style.css') }}" rel="stylesheet" />
		<link href="{{ asset('assets/admin/assets/css/admin-custom.css') }}" rel="stylesheet" />

		<!-- Sidemenu Css -->
		<link href="{{ asset('assets/admin/assets/css/sidemenu.css') }}" rel="stylesheet" />

		<!-- p-scroll bar css-->
		<link href="{{ asset('assets/admin/assets/plugins/pscrollbar/pscrollbar.css') }}" rel="stylesheet" />

		<link href="{{ asset('assets/admin/assets/plugins/time-picker/jquery.timepicker.css') }}" rel="stylesheet" />
		<link href="{{ asset('assets/admin/assets/plugins/date-picker/spectrum.css') }}" rel="stylesheet" />


		<!-- Data table css -->
		<link href="{{ asset('assets/admin/assets/plugins/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
		<link href="{{ asset('assets/admin/assets/plugins/datatable/jquery.dataTables.min.css') }}" rel="stylesheet" />


		<!---Font icons-->
		<link href="{{ asset('assets/admin/assets/css/icons.css') }}" rel="stylesheet"/>
		<link href="{{ asset('assets/admin/assets/plugins/iconfonts/icons.css') }}" rel="stylesheet" />

		@stack('css')

	</head>
	<body class="app sidebar-mini">


		<div class="page">
			<div class="page-main  h-100">
				<div class="app-header1 header py-1 d-flex">
					<div class="container-fluid">
						<div class="d-flex">
							<a class="header-brand" href="{{Request::root()}}/adminadmin/home">
								<img src="{{ asset('assets/admin/assets/images/brand/logo.png') }}" class="header-brand-img" alt="Claylist logo">
							</a>
							<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
							<div class="header-navicon">
								<a href="#" data-toggle="search" class="nav-link d-lg-none navsearch-icon">
									<i class="fa fa-search"></i>
								</a>
							</div>
							<div class="header-navsearch">
								<a href="#" class=" "></a>
								<form class="form-inline mr-auto">
									<div class="nav-search">
										<input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" >
										<button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
									</div>
								</form>
							</div>
							<div class="d-flex order-lg-2 ml-auto">
								<div class="dropdown d-none d-md-flex" >
									<a  class="nav-link icon full-screen-link">
										<i class="fe fe-maximize-2"  id="fullscreen-button"></i>
									</a>
								</div>




								<div class="dropdown ">
									<a href="#" class="nav-link pr-0 leading-none user-img" data-toggle="dropdown">
										<img src="{{ asset('assets/admin/assets/images/faces/male/25.jpg') }}" alt="profile-img" class="avatar avatar-md brround">
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">

										<a class="dropdown-item" href="{{ route('user.index') }}">
											<i class="dropdown-icon  icon icon-settings"></i> პარამეტრები
										</a>
										<a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
											<i class="dropdown-icon icon icon-power"></i> სისტემიდან გასვლა
										</a>


										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										  </form>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Sidebar menu-->
				<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
				<aside class="app-sidebar doc-sidebar">
					<div class="app-sidebar__user clearfix">
						<div class="dropdown user-pro-body">
							<div>
								<img src="{{ asset('assets/admin/assets/images/faces/male/25.jpg') }}" alt="user-img" class="avatar avatar-lg brround">

							</div>
							<div class="user-info">
								{{-- <h2>{{ Auth::user()->name }}</h2> --}}
								<span>{{ Auth::user()->name }}</span>
							</div>
						</div>
					</div>
					<ul class="side-menu">



						<li>
							<a class="side-menu__item" href="{{Request::root()}}/adminadmin/home"><i class="side-menu__icon fa fa-home"></i><span class="side-menu__label">მთავარი</span></a>
						</li>

						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
								<i class="side-menu__icon fa fa-align-justify"></i>
								<span class="side-menu__label"> კატეგორიები</span>
								<i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="{{Request::root()}}/adminadmin/categories" class="slide-item">დამატებული კატეგორიები</a>
								</li>
								<li>
									<a href="{{Request::root()}}/adminadmin/category_add" class="slide-item">ახალი კატეგორიის დამატება</a>
								</li>
							</ul>
                        </li>

                        <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
								<i class="side-menu__icon fa fa-align-justify"></i>
								<span class="side-menu__label"> ქვეკატეგორიები</span>
								<i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="{{Request::root()}}/adminadmin/sub_categories" class="slide-item"> დამატებული ქვეკატეგორიები</a>
								</li>
								<li>
									<a href="{{Request::root()}}/adminadmin/sub_add" class="slide-item">ახალი ქვეკატეგორიის დამატება</a>
								</li>
							</ul>
                        </li>

                        <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
								<i class="side-menu__icon fa fa-bars"></i>
								<span class="side-menu__label"> ავტონაწილები</span>
								<i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
                                <li>
									<a href="{{Request::root()}}/adminadmin/products_all" class="slide-item">დამატებული ავტონაწილები</a>
								</li>
								<li>
									<a href="{{Request::root()}}/adminadmin/product_add" class="slide-item">ახალი ავტონაწილის დამატება</a>
								</li>
							</ul>
                        </li>

						{{-- <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-window-restore"></i>
								<span class="side-menu__label">გალერია</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="{{Request::root()}}/adminadmin/media/photo" class="slide-item">ფოტო გალერეა</a>
								</li>
								<li>
									<a href="{{Request::root()}}/adminadmin/media/video" class="slide-item">ვიდეო გალერეა</a>
                                </li>
							</ul>
                        </li> --}}

						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-wikipedia-w"></i>
								<span class="side-menu__label">სიახლეები</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
                                <li>
									<a href="{{Request::root()}}/adminadmin/media/blogs" class="slide-item">სიახლეები</a>
								</li>
								<li>
									<a href="{{Request::root()}}/adminadmin/media/blogs_add" class="slide-item">სიახლის დამატება</a>
								</li>
							</ul>
                        </li>

						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
								<i class="side-menu__icon fa fa-address-book"></i>
								<span class="side-menu__label">ჩვენს შესახებ</span>
								<i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="{{Request::root()}}/adminadmin/about" class="slide-item">დეტალები</a>
								</li>

							</ul>
                        </li>

						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
								<i class="side-menu__icon fa fa-id-card"></i>
								<span class="side-menu__label">კონტაქტი</span>
								<i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="{{Request::root()}}/adminadmin/contact" class="slide-item">დეტალები</a>
								</li>

							</ul>
                        </li>

						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-cogs"></i>
								<span class="side-menu__label">სხვადასხვა</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item" href="{{ route('user.index') }}">არსებული მომხმარებლები</a></li>
								<li><a class="slide-item" href="{{ route('user.create') }}">მომხმარებლის დამატება</a></li>

							</ul>
						</li>
					</ul>

				</aside>
             @yield('content')
			</div>

			<!--footer-->
			<footer class="footer">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
							ლევან ბედინაშვილი 598 90 64 84. საავტორო უფლებები დაცულია.
						</div>
					</div>
				</div>
			</footer>
			<!-- End Footer-->
		</div>

		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-rocket"></i></a>

        <script src="http://code.jquery.com/jquery-3.4.1.js"></script>

		<!-- Dashboard Core -->
		<script src="{{ asset('assets/admin/assets/plugins/bootstrap-4.3.1-dist/js/popper.min.js') }}"></script>
		<script src="{{ asset('assets/admin/assets/plugins/bootstrap-4.3.1-dist/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('assets/admin/assets/js/vendors/jquery.sparkline.min.js') }}"></script>
		<script src="{{ asset('assets/admin/assets/js/vendors/selectize.min.js') }}"></script>
		<script src="{{ asset('assets/admin/assets/js/vendors/jquery.tablesorter.min.js') }}"></script>
		<script src="{{ asset('assets/admin/assets/js/vendors/circle-progress.min.js') }}"></script>
		<script src="{{ asset('assets/admin/assets/plugins/rating/jquery.rating-stars.js') }}"></script>

		<!--Counters -->
		<script src="{{ asset('assets/admin/assets/plugins/counters/counterup.min.js') }}"></script>
		<script src="{{ asset('assets/admin/assets/plugins/counters/waypoints.min.js"') }}"></script>

		<!-- Fullside-menu Js-->
		<script src="{{ asset('assets/admin/assets/plugins/toggle-sidebar/sidemenu.js') }}"></script>





		<!-- CHARTJS CHART -->
		<script src="{{ asset('assets/admin/assets/plugins/chart/Chart.bundle.js"') }}"></script>
		<script src="{{ asset('assets/admin/assets/plugins/chart/utils.js') }}"></script>

		<!-- p-scroll bar Js-->
		<script src="{{ asset('assets/admin/assets/plugins/pscrollbar/pscrollbar.js') }}"></script>
		<script src="{{ asset('assets/admin/assets/plugins/pscrollbar/pscroll.js') }}"></script>

		<!-- ECharts Plugin -->
		<script src="{{ asset('assets/admin/assets/plugins/echarts/echarts.js') }}"></script>
		<script src="{{ asset('assets/admin/assets/plugins/echarts/echarts.js') }}"></script>
		<script src="{{ asset('assets/admin/assets/js/index1.js') }}"></script>

		<!-- Custom Js-->
		<script src="{{ asset('assets/admin/assets/js/admin-custom.js') }}"></script>

		<!-- Data tables -->
		<script src="{{ asset('assets/admin/assets/plugins/datatable/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('assets/admin/assets/plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>
		<script src="{{ asset('assets/admin/assets/js/datatable.js') }}"></script>


		<script src="{{ asset('assets/admin/assets/plugins/time-picker/jquery.timepicker.js')}}"></script>
		<script src="{{ asset('assets/admin/assets/plugins/time-picker/toggles.min.js') }}"></script>

		<script src="{{ asset('assets/admin/assets/plugins/date-picker/spectrum.js') }}"></script>
		<script src="{{ asset('assets/admin/assets/plugins/date-picker/jquery-ui.js') }}"></script>
		<script src="{{ asset('assets/admin/assets/plugins/input-mask/jquery.maskedinput.js') }}"></script>


		<script src="{{ asset('assets/admin/assets/plugins/counters/counterup.min.js') }}"></script>
		<script src="{{ asset('assets/admin/assets/plugins/counters/waypoints.min.js') }}"></script>



@stack('js')

<script>

function printContent(el){
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
}

</script>





	</body>
</html>
