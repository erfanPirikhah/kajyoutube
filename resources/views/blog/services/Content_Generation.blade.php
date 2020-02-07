@extends('blog.master')

@section('content')


<section>
    <div class="container">
        
        <div class="row">
            
            <div class="col-lg-6 col-md-6">
                <div class="about-content">
                    <h2>{{__('service.content.title')}}</h2>
                        <h6>{{__('service.content.title1')}}</h6> 
                        <p>{{__('service.content.body1')}}</p>                
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <img src="/blog/img/working-desk.png" class="img-fluid mx-auto" alt="">
            </div>
        </div>
        
    </div>
</section>
<div class="container">
    <div class="row">
        <h6>{{__('service.content.h1')}}</h6>
        <p> {{__('service.content.body2')}} </p>

        <h6>{{__('service.content.h2')}}</h6>

            <ul>
                <li>{{__('service.content.li1')}}</li>
                <li>{{__('service.content.li2')}}</li>
                <li>{{__('service.content.li3')}}</li>
                <li>{{__('service.content.li4')}}</li>
                <li>{{__('service.content.li5')}}</li>
                <li>{{__('service.content.li6')}}</li>
            </ul>
   
            <h6>{{__('service.content.h3')}}</h6>

            <ul>
                <li>{{__('service.content.li7')}}</li>
                <li>{{__('service.content.li8')}}</li>
                <li>{{__('service.content.li9')}}</li>
                <li>{{__('service.content.li10')}}</li>
                <li>{{__('service.content.li11')}}</li>
                <li>{{__('service.content.li12')}}</li>
                <li>{{__('service.content.li13')}}</li>
                <li>{{__('service.content.li14')}}</li>
                <li>{{__('service.content.li15')}}</li>
                
                
            </ul>

            <p>{{__('service.content.body3')}}</p>
   
        </div>

        <a href="{{route('order')}}" class="btn btn-success-light btn-rounded mb-2">{{__('service.order')}}<i class="ml-2 ti-arrow-right"></i></a>
        <a href="{{route('sample.all')}}" class="btn btn-warning-light btn-rounded mb-2" style="margin-right:30px">{{__('service.sample')}}<i class="ml-2 ti-arrow-right"></i></a>


</div>    

@endsection