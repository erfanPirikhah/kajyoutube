@extends('blog.master')

@section('content')


<!-- ============================ Who We Are Start ================================== -->
<section>
    <div class="container">
        
        <div class="row">
            
            <div class="col-lg-6 col-md-6">
                <div class="about-content">
                    <h2>{{$sample->name}}</h2>
                    @if (!$sample->videoUrl=="")
                    <video width="400" controls>
                     <source src="{{$sample->videoUrl}}" type="video/mp4"> 
                      </video>
                        
                    @endif
                   

                    <p>{!!$sample->body!!}</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <img src="{{$sample->imageUrl}}" class="img-fluid mx-auto rounded float-left" alt="">
            </div>
            
        </div>
        
    </div>
</section>
<div class="clearfix"></div>
@endsection