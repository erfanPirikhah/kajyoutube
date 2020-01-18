@extends('blog.master')

@section('content')

<div class="ct-header ct-header--slider ct-slick-custom-dots text-center overlap-bg" id="home">
    <div class="ct-slick-homepage" data-arrows="true" data-autoplay="true">

        <div class="ct-header slick-slide-animate tablex item" data-background="/blog/img/baner/1.jpg">
            <div class="ct-u-display-tablex">
                <div class="inner">
                   
                </div>
            </div>
        </div>

        <div class="ct-header slick-slide-animate tablex item" data-background="/blog/img/baner/2.jpg">
            <div class="ct-u-display-tablex">
                <div class="inner">
                    
                </div>
            </div>
        </div>
        <div class="ct-header slick-slide-animate tablex item" data-background="/blog/img/baner/3.jpg">
            <div class="ct-u-display-tablex">
                <div class="inner">
                 
                </div>
            </div>
        </div>
        <div class="ct-header slick-slide-animate tablex item" data-background="/blog/img/baner/4.jpg">
            <div class="ct-u-display-tablex">
                <div class="inner">
                   
                </div>
            </div>
        </div>
        <div class="ct-header slick-slide-animate tablex item" data-background="/blog/img/baner/5.jpg">
            <div class="ct-u-display-tablex">
                <div class="inner">
                   
                        
                </div>
            </div>
        </div>
        <div class="ct-header slick-slide-animate tablex item" data-background="/blog/img/baner/6.jpg">
            <div class="ct-u-display-tablex">
                <div class="inner">
                    
                </div>
            </div>
        </div>

        <div class="ct-header tablex item" data-background="/blog/img/baner/7.jpg">
            <div class="ct-u-display-tablex">
                <div class="inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 slider-inner">
                                <h1 class="big">حرکت کسب و کار به جلو</h1>
                                <p>هدف از کسب و کار ایجاد و نگهداری مشتری است.</p>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div><!-- .ct-slick-homepage -->
</div>
<div class="clearfix"></div>  
<!-- ============================ Hero Slider Banner End ================================== -->

<!-- ============================ Make Collaboration Start ================================== -->

<section>
    <div class="container">
    
        <div class="row">
            <div class="col text-center">
                <div class="sec-heading mx-auto">
                    <h2>{{ __('index.part.title') }}</h2>
                    <p>{{ __('index.part.body') }} </p>
                </div>
            </div>
        </div>
        
        <div class="row">
        
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="feature style-3 boxed boxed--lg boxed--border">
                    <i class="ti-desktop icon--lg"></i>
                    <div class="feature__body">
                        <h4>{{ __('index.part.title1') }} </h4>
                        <p>
                            {{ __('index.part.body1') }}
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="feature style-3 boxed boxed--lg boxed--border">

                    <i class="ti-share icon--lg"></i>
                    <div class="feature__body">
                        <h4> {{ __('index.part.title2') }}</h4>
                        <p>
                            {{ __('index.part.body2') }}
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="feature style-3 boxed boxed--lg boxed--border">
                    <i class="ti-thumb-up icon--lg"></i>
                    <div class="feature__body">
                        <h4>{{ __('index.part.title3') }}</h4>
                        <p>
                            {{ __('index.part.body3') }}
                        </p>
                        </div>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="feature style-3 feature--featured boxed boxed--lg boxed--border">
                    <i class="ti-headphone-alt icon--lg"></i>
                    <div class="feature__body">
                        <h4>{{ __('index.part.title4') }} </h4>
                        <p>
                            {{ __('index.part.body4') }}
                        </p>
                        </div>
                </div>
            </div>
            
        </div>
        
    </div>
</section>
<!-- ============================ Make Collaboration End ================================== -->

<!-- ============================ What We Do & Who We Are Start ================================== -->
<section class="p-0">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 p-0 image-block">
                <div class="image-block-holder">
                    <div class="image-block-holder-img" style="background: url(/blog/img/banner-4.jpg);opacity: 1;">
                        <img src="/blog/img/banner-4.jpg" class="img-responsive img-holder" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 p-0">
                <div class="image-block-content bg-theme inverse-color" id="about">
                    <h2>{{__('index.about.kaj.title')}}</h2>
                    <p>{{__('index.about.kaj.body')}}</p>                    
                </div>
            </div>
        </div>
    </div>	
</section>
<!-- ============================ What We Do & Who We Are End ================================== -->
    <br>
<!-- ============================ Features Start ================================== -->
<section class="pd-0 overlay-top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-10 col-sm-12">
                <div class="row mrg-0 bg-white box-shadow pt-5 border--radius">

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="custom-tab icon-style">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="market-analysis-tab" data-toggle="tab" href="#market-analysis" role="tab" aria-controls="market-analysis" aria-selected="true" aria-expanded="true">
                                        <img src="/blog/img/market-analysiss.png" class="img-fluid" alt="">
                                        <h5>{{__('index.feature.program.title')}}</h5>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="email-marketing-tab" data-toggle="tab" href="#email-marketing" role="tab" aria-controls="email-marketing" aria-selected="false" aria-expanded="false">
                                        <img src="/blog/img/email-marketing.png" class="img-fluid" alt="">
                                        <h5>{{__('index.feature.content.title')}}</h5>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="keyword-nalysis-tab" data-toggle="tab" href="#keyword-nalysis" role="tab" aria-controls="keyword-nalysis" aria-selected="false" aria-expanded="false">
                                        <img src="/blog/img/keyword.png" class="img-fluid" alt="">
                                        <h5>{{__('index.feature.writers.title')}}</h5>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="on-page-seo-tab" data-toggle="tab" href="#on-page-seo" role="tab" aria-controls="on-page-seo" aria-selected="false" aria-expanded="false">
                                        <img src="/blog/img/on-page.png" class="img-fluid" alt="">
                                        <h5>{{__('index.feature.google.title')}}</h5>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade active show" id="market-analysis" role="tabpanel" aria-labelledby="market-analysis-tab" aria-expanded="true">
                                    <div class="row align-items-center m-0">
                                        <div class="col-lg-6 col-md-6">
                                            <img src="/blog/img/fffffff.png" class="img-fluid mx-auto" alt="">
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <h2>{{__('index.feature.program.title')}}</h2><br>
                                            <p>{{__('index.feature.program.body')}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="email-marketing" role="tabpanel" aria-labelledby="email-marketing-tab" aria-expanded="false">
                                    <div class="row align-items-center m-0">
                                        <div class="col-lg-6 col-md-6">
                                            <img src="/blog/img/fffffff.png" class="img-fluid mx-auto" alt="">
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <h2>{{__('index.feature.content.title')}}</h2>
                                        <p>{{__('index.feature.content.body')}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="keyword-nalysis" role="tabpanel" aria-labelledby="keyword-nalysis-tab" aria-expanded="false">
                                    <div class="row align-items-center m-0">
                                        <div class="col-lg-6 col-md-6">
                                            <img src="/blog/img/fffffff.png" class="img-fluid mx-auto" alt="">
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <h2>{{__('index.feature.writers.title')}}</h2><br>
                                            <h4>{{__('index.feature.writers.h4')}}</h4><br> 
                                            <p>{{__('index.feature.writers.body')}}</p>
                                       </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="on-page-seo" role="tabpanel" aria-labelledby="on-page-seo-tab" aria-expanded="false">
                                    <div class="row align-items-center m-0">
                                        <div class="col-lg-6 col-md-6">
                                            <img src="/blog/img/fffffff.png" class="img-fluid mx-auto" alt="">
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <h2> {{__('index.feature.google.title')}}</h2>
                                            <p>{{__('index.feature.google.body')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ============================ Advance Features End ================================== -->
<!-- ============================== Portfolio Start ============================ -->

<section id="portfolio">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-12 col-md-12 col-xs-12">
              
                <div class="portfolio-sort">
                 <center><h2>{{__('index.sample')}}</h2></center>   
                    <ul class="sorting clearfix center-grid">
                       
                        <li class="sort-btn" data-filter=".teaser">{{__('index.sample.teaser')}}</li>
                        <li class="sort-btn" data-filter=".program">{{__('index.sample.program')}}</li>
                        <li class="sort-btn" data-filter=".logo">{{__('index.sample.Logo')}}</li>
                        <li class="sort-btn" data-filter=".android">{{__('index.sample.android')}}</li>
                        <li class="sort-btn" data-filter=".poster">{{__('index.sample.poster')}}</li>
                        <li class="sort-btn" data-filter=".animaite">{{__('index.sample.photography')}}</li>
                        <li class="sort-btn" data-filter=".Campaign">{{__('index.sample.Campaign')}}</li>
                    </ul>
                </div>
      
                <div class="row portfolio-gallary" style="position: relative; height: 650px;">
               
                    @foreach (App\Sample::where('category','program')->wherelang(app()->getLocale())->get() as $item)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 port-item  program" style="position: absolute; right: 0%; top: 0px;">
                        <div class="portfolio-wrap portfolio-inner">
                            <a href="{{route('sampleshow',['id'=>$item->id])}}""><img src="{{$item->imageUrl}}" alt="project" style=" width:360px; height:225px"></a>
                            <div class="label">
                                <div class="label-text">
                                   
                                <a href="{{route('sampleshow',['id'=>$item->id])}}" class="text-title">{{$item->name}}</a>
                                 
                                </div>
                                <div class="label-bg"></div>
                            </div>
                            
                        </div>
                    </div>
                    @endforeach

                             
                    @foreach (\App\Sample::where('category','teaser')->wherelang(app()->getLocale())->get() as $item)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 port-item  teaser" style="position: absolute; right: 0%; top: 0px;">
                        <div class="portfolio-wrap portfolio-inner">
                            <a href="{{route('sampleshow',['id'=>$item->id])}}""><img src="{{$item->imageUrl}}" alt="project" style=" width:360px; height:225px"></a>
                            <div class="label">
                                <div class="label-text">
                                <a href="{{route('sampleshow',["id"=>$item->id])}}" class="text-title">{{$item->name}}</a>
                                 
                                </div>
                                <div class="label-bg"></div>
                            </div>
                            
                        </div>
                    </div>
                    @endforeach

                               
                    @foreach (\App\Sample::where('category','logo')->wherelang(app()->getLocale())->get() as $item)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 port-item  logo" style="position: absolute; right: 0%; top: 0px;">
                        <div class="portfolio-wrap portfolio-inner">
                            <a href="{{route('sampleshow',['id'=>$item->id])}}""><img src="{{$item->imageUrl}}" alt="project" style=" width:360px; height:225px"></a>
                            <div class="label">
                                <div class="label-text">
                                <a href="{{route('sampleshow',["id"=>$item->id])}}" class="text-title">{{$item->name}}</a>
                                 
                                </div>
                                <div class="label-bg"></div>
                            </div>
                          
                        </div>
                    </div>
                    @endforeach

                               
                    @foreach (\App\Sample::where('category','android')->wherelang(app()->getLocale())->get() as $item)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 port-item  android" style="position: absolute; right: 0%; top: 0px;">
                        <div class="portfolio-wrap portfolio-inner">
                            <a href="{{route('sampleshow',['id'=>$item->id])}}""><img src="{{$item->imageUrl}}" alt="project" style=" width:360px; height:225px"></a>
                            <div class="label">
                                <div class="label-text">
                                <a href="{{route('sampleshow',["id"=>$item->id])}}" class="text-title">{{$item->name}}</a>
                                 
                                </div>
                                <div class="label-bg"></div>
                            </div>
                            
                        </div>
                    </div>
                    @endforeach

                               
                    @foreach (\App\Sample::where('category','poster')->wherelang(app()->getLocale())->get() as $item)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 port-item  poster" style="position: absolute; right: 0%; top: 0px;">
                        <div class="portfolio-wrap portfolio-inner">
                            <a href="{{route('sampleshow',['id'=>$item->id])}}""><img src="{{$item->imageUrl}}" alt="project" style=" width:360px; height:225px"></a>
                            <div class="label">
                                <div class="label-text">
                                <a href="{{route('sampleshow',["id"=>$item->id])}}" class="text-title">{{$item->name}}</a>
                                 
                                </div>
                                <div class="label-bg"></div>
                            </div>
                            
                        </div>
                    </div>
                    @endforeach

                               
                    @foreach (\App\Sample::where('category','animaite')->wherelang(app()->getLocale())->get() as $item)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 port-item  animaite" style="position: absolute; right: 0%; top: 0px;">
                        <div class="portfolio-wrap portfolio-inner">
                            <a href="{{route('sampleshow',['id'=>$item->id])}}""><img src="{{$item->imageUrl}}" alt="project" style=" width:360px; height:225px"></a>
                            <div class="label">
                                <div class="label-text">
                                <a href="portfolio-detail.html" class="text-title">{{$item->name}}</a>
                                 
                                </div>
                                <div class="label-bg"></div>
                            </div>
                           
                        </div>
                    </div>
                    @endforeach

                               
                    @foreach (\App\Sample::where('category','Campaign')->wherelang(app()->getLocale())->get() as $item)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 port-item  Campaign" style="position: absolute; right: 0%; top: 0px;">
                        <div class="portfolio-wrap portfolio-inner">
                            <a href="{{route('sampleshow',['id'=>$item->id])}}""><img src="{{$item->imageUrl}}" alt="project" style=" width:360px; height:225px"></a>
                            <div class="label">
                                <div class="label-text">
                                <a href="portfolio-detail.html" class="text-title">{{$item->name}}</a>
                                 
                                </div>
                                <div class="label-bg"></div>
                            </div>
                         
                        </div>
                    </div>
                    @endforeach  


                    

                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- ======================== Portfolio End ========================== -->
<!-- ============================ Testimonial Start ================================== -->
<section>
    <div class="container">
    
        <div class="row">
            <div class="col text-center">
                <div class="sec-heading mx-auto">
                <h2>{{__('index.KAJYOUTUB.TEAM')}}</h2>
                </div>
            </div>
        </div>
        
        <div class="row">
        
            <div class="owl-carousel" id="testimonials-two">
                
                <!-- Single Testimonials -->
           
                
               @foreach ($personnels as $personnel)
               <div class="item">
                <div class="testimonial-wrap style-2">
                    <div class="client-thumb-box">
                        <div class="client-thumb-content">
                            <div class="client-thumb">
                                <img src="{{$personnel->imageUrl}}" class="img-responsive img-circle" alt="">
                            </div>
                            <h5 class="mb-0">{{$personnel->name}}</h5>
                            <span>{{$personnel->post}}</span>
                          
                        </div>
                    </div>
                    
                <p>{!!$personnel->body!!}</p>
                    
                </div>
            </div>
                   
               @endforeach
                
            </div>

        </div>
    
    </div>
</section>
<div class="clearfix"></div>
<!-- ============================ Testimonial End ================================== -->



    
@endsection