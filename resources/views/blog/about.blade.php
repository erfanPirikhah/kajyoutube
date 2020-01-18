@extends('blog.master')

@section('content')


<!-- ============================ Who We Are Start ================================== -->
<section>
    <div class="container">
        
        <div class="row">
            
            <div class="col-lg-6 col-md-6">
                <div class="about-content">
                    <h2>{{__('index.about.title')}}</h2>
                    <p>{{__('index.about.body')}}</p>
                   
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <img src="/blog/img/about-4.png" class="img-fluid mx-auto" alt="">
            </div>
            
        </div>
        
    </div>
</section>
<div class="clearfix"></div>
@endsection