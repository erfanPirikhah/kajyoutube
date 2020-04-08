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

	
		@php
			$local=app()->getLocale()
		@endphp
		
	</head>
	<style>
#loading {
   width: 100%;
   height: 100%;
   top: 0;
   left: 0;
   position: fixed;
   display: block;
   opacity: 0.7;
   background-color: #fff;
   z-index: 99;
   text-align: center;
}
 
#loading-image {
  position: absolute;
    top: 45%;
    left: 45%;
  z-index: 99999999;
}
	</style>
	
    <body>


<div id="loading">
  <img id="loading-image" src="/blog/img/Infinity-1s-200px (1).gif" alt="Loading..." />
</div>


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
								<li class="nav-item"><a href={{"/$local"}}  class="nav-link">{{__('index.header.home')}}</a> </li>
								
								
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
							{{-- <li class="nav-item"><a href="{{route('sample.all')}}"  class="nav-link">{{__('index.header.sample')}}</a> </li> --}}


							<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('service.sample')}} <i class="fa fa-angle-down m-l-5"></i></a>
								<ul class="b-none dropdown-menu font-14 animated fadeInUp">
									<li><a class="dropdown-item" href="{{route('sample.program')}}">{{__('index.sample.program')}}</a></li>
									<li><a class="dropdown-item" href="{{route('sample.teaser')}}">{{__('index.sample.teaser')}}</a></li>
									<li><a class="dropdown-item" href="{{route('sample.logo')}}">{{__('index.sample.Logo')}}</a></li>
									<li><a class="dropdown-item" href="{{route('sample.android')}}">{{__('index.sample.android')}} </a></li>
									<li><a class="dropdown-item" href="{{route('sample.poster')}}">{{__('index.sample.poster')}}</a></li>
									<li><a class="dropdown-item" href="{{route('sample.animaite')}}">{{__('index.sample.photography')}}</a></li>	
									<li><a class="dropdown-item" href="{{route('sample.Campaign')}}">{{__('index.sample.Campaign')}}</a></li>	
								</ul>
							</li>
							


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
			
		<a href="{{route('sample.program')}}">ss</a>
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
										
										<li><a href="#"  data-toggle="modal" data-target=".bd-example-modal-xl">{{__('footer.2')}}</a></li>
										<li><a href="#"  data-toggle="modal" data-target=".bd-example-modal-xl">{{__('footer.3')}}</a></li>
										<li><a href="#"  data-toggle="modal" data-target=".bd-example-modal-xl">{{__('footer.5')}}</a></li>
										<li><a href="#">{{__('footer.6')}}</a></li>
									</ul>
								</div>
							</div>		

							<section class="p-0 overlay-bottom">
						
			
			
			
								<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-xl" role="document">
								  		<div class="modal-content">
											<div class="modal-header">
												<button type="button"  data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										  </button>
								</div>
									<div class="container">
								<br>
									
										<div class="contact-form">
											
											<form action="{{route('us.store')}}" method="post">
												@include('layout.errors')
												<h3>برای دریافت مشاوره ی رایگان فرم زیر را پرکنید</h3>
												@csrf

												<br><br>
												<div class="form-row">
													<div class="form-group col-md-6">
													  <label class="c-og">{{__('index.contact.name')}}</label>
													  <input type="text" name="name" class="form-control"   value="{{ old('nameh')}}">
													</div>
													<div class="form-group col-md-6">
													  <label class="c-og">{{__('index.contact.email')}}</label>
													  <input type="email" name="email" class="form-control"   value="{{ old('email')}}">
													</div>
												</div>
												<div class="form-group">
													<label class="c-og">{{__('index.contact.mobile')}}</label>
													<input type="text" name="mobile" class="form-control"   value="{{ old('mobile')}}">
												</div>
												<div class="form-group">
													<label class="c-og">{{__('index.contact.description')}}</label>
													<input type="text" name="description" class="form-control"  value="{{ old('description')}}">
												</div>
												<div class="form-group">
													<label class="c-og">{{__('index.contact.body')}}</label>
													<textarea class="form-control" name="body" > {{ old('body')}}</textarea>
												</div>
												<button type="submit" class="btn bg-og">{{__('index.contact.send')}}</button>
											</form>
											<br><br>
										</div>
									</div>
								  </div>
								</div>
							  </div>
							</section>
						
							 <div class="clearfix"></div>
							<div class="col-lg-3 col-md-6">
								<div class="footer-widget">
									<h4 class="widget-title">{{__('footer.7')}}</h4>
									<ul class="footer-menu">
										<li><a href="{{route('about')}}">{{__('footer.8')}}</a></li>
										<li><a href="{{route('content')}}">{{__('footer.9')}}</a></li>
										<li><a href="#">{{__('footer.10')}}</a></li>
										<li><a href="{{route('us')}}">{{__('footer.11')}}</a></li>
										<li><a href="#">{{__('footer.12')}}</a></li>
									</ul>
								</div>
							</div>
									
							<div class="col-lg-3 col-md-6">
								<div class="footer-widget">
									<h4 class="widget-title"></h4>
									
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
								<p class="mb-0">© 2020 {{__('index.copy')}}</p>
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

		

<script type="text/javascript">
$(function() {
    $(window).on("load", function() {
        $('#loading').hide();
    });
});
</script>


	</body>

</html>