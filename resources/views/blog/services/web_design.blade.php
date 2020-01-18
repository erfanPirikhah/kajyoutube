@extends('blog.master')

@section('content')


<section>
    <div class="container">
        
        <div class="row">
            
            <div class="col-lg-6 col-md-6">
                <div class="about-content">
                    <h2>{{__('service.program.title')}}</h2>

                        <p>{{__('service.program.body')}}</p>
                        
                 
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <img src="/blog/img/jamron.svg" class="img-fluid mx-auto" alt="">
            </div>
        <a href="{{route('order')}}" class="btn btn-success-light btn-rounded mb-2">{{__('service.order')}}<i class="ml-2 ti-arrow-right"></i></a>
        </div>
        
    </div>
</section>

@endsection