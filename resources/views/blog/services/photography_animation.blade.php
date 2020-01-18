@extends('blog.master')

@section('content')


<section>
    <div class="container">
        
        <div class="row">
            
            <div class="col-lg-6 col-md-6">
                <div class="about-content">
                    <h2>{{__('service.photo.title')}}  </h2>
                    <h6>{{__('service.photo.h1')}} </h6>
                        <p> {{__('service.photo.body1')}} </p>
                        <ul>
                            <li>{{__('service.photo.li1')}} </li>
                            <li>{{__('service.photo.li2')}} </li>
                            <li>{{__('service.photo.li3')}} </li>
                            <li>{{__('service.photo.li4')}} </li>
                            <li>{{__('service.photo.li5')}} </li>
                            <li>{{__('service.photo.li6')}} </li>
                            <li>{{__('service.photo.li7')}} </li>
                        </ul>
                     
                 
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <img src="/blog/img/7-72692_video-cameras-photography-animation-clip-art-video-camera.png" class="img-fluid mx-auto" alt="">
            </div>
        </div>
        
    </div>
</section>

<section>
    <div class="container">
        
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <img src="/blog/img/4231aa1f7e5acc13ace5fcd30181e909.jpg" class="img-fluid mx-auto" alt="">
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="about-content">
                  
                        </ul>
                       <h5>{{__('service.photo.h2')}} </h5>
                        <h6>{{__('service.photo.step.title1')}} </h6>
                            <p>{{__('service.photo.step.title1')}}</p>                 
                        <h6>{{__('service.photo.step.title2')}}</h6>
                            <p>{{__('service.photo.step.body2')}}</p>                        
                        <h6>{{__('service.photo.step.title3')}}</h6>
                            <p>{{__('service.photo.step.body3')}}</p>
                        <h6>{{__('service.photo.step.title4')}}</h6>
                            <p>{{__('service.photo.step.body4')}}</p>
                        <h6>{{__('service.photo.step.title5')}}</h6>
                            <p>{{__('service.photo.step.body5')}}</p>
                        
                    
                    </div>
            </div>
               
                        <div>   
                            <a href="{{route('order')}}" class="btn btn-success-light btn-rounded mb-2">{{__('service.order')}}<i class="ml-2 ti-arrow-right"></i></a>
                        </div> 
        </div>
        
    </div>
</section>

@endsection