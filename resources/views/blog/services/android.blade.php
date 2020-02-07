@extends('blog.master')

@section('content')


<div class="container">
        
    <div class="row">
        
        <div class="col-lg-6 col-md-6">
            <div class="about-content">
                <h2>{{__('service.android.title')}}  </h2>

                <ul>
                    <li>{{__('service.android.li1')}}</li>
                    <li>{{__('service.android.li2')}}</li>
                    <li>{{__('service.android.li3')}}</li>
                    <li>{{__('service.android.li4')}}</li>
                    <li>{{__('service.android.li5')}}</li>
                    <li>{{__('service.android.li6')}}</li>
                    <li>{{__('service.android.li7')}}</li>
                    <li>{{__('service.android.li8')}}</li>
                    <li>{{__('service.android.li9')}}</li>
                    <li>{{__('service.android.li10')}}</li>
                    <li>{{__('service.android.li11')}}</li>
                    <li>{{__('service.android.li12')}}</li>
                </ul>
              
               
                 
             
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <img src="/blog/img/home-mockup.png" class="img-fluid mx-auto" alt="">
        </div>
    </div>

    <div>   
        <a href="{{route('order')}}" class="btn btn-success-light btn-rounded mb-2">{{__('service.order')}}<i class="ml-2 ti-arrow-right"></i></a>
        <a href="{{route('sample.android')}}" class="btn btn-warning-light btn-rounded mb-2" style="margin-right:30px">{{__('service.sample')}}<i class="ml-2 ti-arrow-right"></i></a>
    </div> 
    
</div>
</section>



@endsection