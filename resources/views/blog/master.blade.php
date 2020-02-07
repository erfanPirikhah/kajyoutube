<!DOCTYPE html>
<html lang="en">
	
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		{!! SEO::generate() !!}
		
     <title>{{__('index.title')}}</title>
		
	 <link rel="shortcut icon" href="/blog/img/logo-notext-110.png">
        <!-- All Plugins Css -->
        <link href="/blog/css/plugins.css" rel="stylesheet">

        <!-- Custom CSS -->
		@if (app()->getLocale()=='fa')
		<link href="/blog/css/styles.css" rel="stylesheet">
		@elseif(app()->getLocale()=='en')
		<link href="/blog/css/styles-en.css" rel="stylesheet">
		@endif


		
	</head>
	
	
    <body>
	
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader" style="display: none;">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">Themex</p>
            </div>
        </div>
		

		<div class="topbar" id="top">
			<div class="header exchange-logo">
				<div class="container po-relative">
					<nav class="navbar navbar-expand-lg header-nav-bar">
						
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="ti-align-right"></span></button>
						<div class="collapse navbar-collapse hover-dropdown font-14 ml-auto" id="navigation">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item"><a href="/"  class="nav-link">{{__('index.header.home')}}</a> </li>
								
								
								<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('index.header.service')}} <i class="fa fa-angle-down m-l-5"></i></a>
									<ul class="b-none dropdown-menu font-14 animated fadeInUp">
										<li><a class="dropdown-item" href="{{route('webdesign')}}">{{__('index.sample.program')}}</a></li>
										<li><a class="dropdown-item" href="{{route('Content-Generation')}}">{{__('index.sample.Content')}}</a></li>
										<li><a class="dropdown-item" href="{{route('android')}}">{{__('index.sample.android')}}</a></li>
										<li><a class="dropdown-item" href="{{route('logo')}}">{{__('index.sample.Logo')}} </a></li>
										{{-- <li><a class="dropdown-item" href="{{route('pintingdesign')}}">{{__('index.sample.Pinting')}}</a></li> --}}
										<li><a class="dropdown-item" href="{{route('photography')}}">{{__('index.sample.photography')}}</a></li>
										{{-- <li><a class="dropdown-item" href="{{route('socialmedia')}}">{{__('index.sample.social')}}</a></li> --}}
										<li><a class="dropdown-item" href="{{route('banding')}}">{{__('index.sample.Branding')}}</a></li>	
									</ul>
								</li>
								
							
								
								
								
							<li class="nav-item"><a href="{{route('content')}}"  class="nav-link">{{__('index.header.news')}}</a> </li>
							<li class="nav-item"><a href="{{route('sample.all')}}"  class="nav-link">{{__('index.header.sample')}}</a> </li>
							<li class="nav-item"><a href="{{route('order')}}"  class="nav-link">{{__('index.header.order')}}</a> </li>
							<li class="nav-item"><a href="{{route('about')}}"  class="nav-link">{{__('index.header.about')}}</a> </li>
							<li class="nav-item"><a href="{{route('us')}}"  class="nav-link">{{__('index.header.contact')}}</a> </li>

							</ul>
						<div class="act-buttons">
							
						</div>
				
						<div class="languages">
							<select class="form-control " style="height:39px;font-size:11px" onchange="location=this.value">
								<option value="/en" {{ app()->getLocale()=='en'? 'selected' :'' }}>English</option>
								<option value="/fa" {{ app()->getLocale()=='fa'? 'selected' :'' }}>فارسی</option>
							</select>
						</div>
							
							
							
						</div>
					</nav>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
		<!-- ============================================================== -->
		<br><br>	<br>
        <div id="main-wrapper">
		
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
       
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			
			<!-- ============================ Hero Slider Banner  Start================================== -->
                @yield('content');
			<!-- ============================ Footer Start ================================== -->
			<footer class="bg-cover skin-dark-footer" style="background:#faaf40 url(/blog/img/app1.png) no-repeat">
				<div class="ht-80"></div>
				<div>
					<div class="container">
						<div class="row">
							
							<div class="col-lg-3 col-md-6">
								<div class="footer-widget">
									<h4 class="widget-title">#{{__('footer.talkwithme')}}</h4>
									<ul class="footer-menu">
										<li><a href="#">{{__('footer.2')}}</a></li>
										<li><a href="#">{{__('footer.3')}}</a></li>
										<li><a href="#">{{__('footer.5')}}</a></li>
										<li><a href="#">{{__('footer.6')}}</a></li>
									</ul>
								</div>
							</div>		
							<div class="col-lg-3 col-md-6">
								<div class="footer-widget">
									<h4 class="widget-title">{{__('footer.7')}}</h4>
									<ul class="footer-menu">
										<li><a href="#about">{{__('footer.8')}}</a></li>
										<li><a href="#">{{__('footer.9')}}</a></li>
										<li><a href="#">{{__('footer.10')}}</a></li>
										<li><a href="#">{{__('footer.11')}}</a></li>
										<li><a href="#">{{__('footer.12')}}</a></li>
									</ul>
								</div>
							</div>
									
							<div class="col-lg-3 col-md-6">
								<div class="footer-widget">
									<h4 class="widget-title"></h4>
									<p>{{__('footer.address')}}	</p>
										<p>{{__('footer.email')}}</p>
										<p>{{__('footer.phone')}}</p>
								</div>
							</div>
							
							<div class="col-lg-3 col-md-6">
								<div class="footer-widget">
								<h4 class="widget-title">{{__('footer.Follow')}}</h4>
									<ul class="footer-bottom-social">
										<li><a href="https://www.instagram.com/kajyoutub/" target="blank"><i class="fa fa-instagram"></i></a></li>
										<li><a href="#"><i class=""></i></a></li>
									</ul>
									
									
								</div>
							</div>
							
						</div>
					</div>
				</div>
				
				<div class="footer-bottom">
					<div class="container">
						<div class="row align-items-center">
							
							<div class="col-lg-12 col-md-12 text-center">
								<p class="mb-0">© 2019 {{__('index.copy')}}</p>
							</div>
							
						</div>
					</div>
				</div>
			</footer>
			<!-- ============================ Footer End ================================== -->
			
			

		</div>
		@include('sweetalert::alert')
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="/blog/js/jquery.min.js"></script>
		<script src="/blog/js/popper.min.js"></script>
		<script src="/blog/js/bootstrap.min.js"></script>
		<script src="/blog/js/aos.js"></script>
		<script src="/blog/js/perfect-scrollbar.jquery.min.js"></script>
		<script src="/blog/js/owl.carousel.min.js"></script>
		<script src="/blog/js/jquery-rating.js"></script>
		<script src="/blog/js/slick.js"></script>
		<script src="/blog/js/slider-bg.js"></script>
		<script src="/blog/js/lightbox.js"></script> 
		<script src="/blog/js/imagesloaded.js"></script>
		<script src="/blog/js/isotope.min.js"></script>
		<script src="/blog/js/custom.js"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->
		
		<script>
			$(document).ready(function(){
				$('.ct-slick-homepage').slick({
					autoplay: true,
					autoplaySpeed: 3000,
				});
			});
		</script>


	</body>

</html>