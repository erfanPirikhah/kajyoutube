@extends('blog.master')

@section('content')


<section>
    <div class="container">
        
        <div class="row">
            
            <div class="col-lg-6 col-md-6">
                <div class="about-content">
                    <h2>{{__('service.branding.title')}} </h2>
                    <p>{{__('service.branding.body')}}</p>
                 
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <img src="/blog/img/about-4.png" class="img-fluid mx-auto" alt="">
            </div>
            <div>   
                <a href="{{route('order')}}" class="btn btn-success-light btn-rounded mb-2">{{__('service.order')}}<i class="ml-2 ti-arrow-right"></i></a>
                <a href="{{route('sample.teaser')}}" class="btn btn-warning-light btn-rounded mb-2" style="margin-right:30px">{{__('service.sample')}}<i class="ml-2 ti-arrow-right"></i></a>

            </div>      
          </div>
        
    </div>
</section>

@endsection