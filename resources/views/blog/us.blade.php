@extends('blog.master')

@section('content')

    <!-- ============================ Hero Banner  Start================================== -->
			<div >
				<div class="container">
					<div class="col-lg-12 col-md-12">
						<div class="pt-caption text-center mt-5">
							<h1  style="color:#faaf40">در تماس باشید</h1>
							<p><a href="index-2.html"  style="color:#faaf40">خانه</a><span class="current-page"  style="color:#faaf40">تماس با ما</span></p>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<!-- ============================ Hero Banner End ================================== -->
			
			<!-- ============================ Who We Are Start ================================== -->
			<section>
				<div class="container">
					
					<div class="row">
						
						<div class="col-lg-5 col-md-5 bg-og">
							<div class="contact-address light-text">
							
								
								<div class="add-box">
									<div class="add-icon-box">
										<i class="ti-map-alt"></i>
									</div>
									<div class="add-text-box">
										<h4>{{__('index.contact.address')}}</h4>
										{{__('index.contact.anzali')}}
									</div>
								</div>
								
								<div class="add-box">
									<div class="add-icon-box">
										<i class="ti-email"></i>
									
									</div>
									<div class="add-text-box">
										<h4>{{__('index.contact.email')}}</h4>
										info@kajyoutube.com
									
									</div>
								</div>
								<div class="add-box">
									<div class="add-icon-box">
										<i class="ti-headphone"></i>
									</div>
									<div class="add-text-box">
										<h4>{{__('index.contact.phone')}}</h4>
										021-41256226
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-7 col-md-7">
							<div class="contact-form">
								@include('layout.errors')
                                <form action="{{route('us.store')}}" method="post">
                                    @csrf
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
							</div>
						</div>
						
					</div>
					
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- ============================ Who We Are End ================================== -->

    
@endsection