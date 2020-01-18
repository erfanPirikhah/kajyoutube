@extends('blog.master')

@section('content')
			<!-- ============================ Hero Banner  Start================================== -->

<section>
    <div class="container">
        
        <div class="row">
           @foreach ($rows as $row)
           <div class="col-lg-4 col-md-4">
            <div class="blog-grid-wrap mb-4" data-aos="fade-up" data-aos-duration="1200">
                <div class="blog-grid-thumb">
                <a href="{{Route('sampleshow',["id"=>$row->id])}}"><img src="{{$row->imageUrl}}" class="img-responsive" alt="" /></a>
                
                </div>
                <div class="blog-grid-content">
                <h4 class="cnt-gb-title"><a href="{{Route('sampleshow',["id"=>$row->id])}}">{{$row->name}}</a></h4>
                </div>
                <div class="blog-grid-meta">
                    <div class="gb-info-author">
                        <p><strong>توسط </strong>Admin</p>
                    </div>
 
                </div>
            </div>
        </div>
           @endforeach
        </div>
{{--         
        <div style="text-align: center">
            {{$rows->render()}} 
        </div> --}}
        
    </div>
</section>
<div class="clearfix"></div>
    
@endsection