@extends('blog.master')

@section('content')
			<!-- ============================ Hero Banner  Start================================== -->

<section  id="portfolio">
    <div class="container"> 
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
           
            <div class="row portfolio-gallary" style="position: relative; height: 650px;">

               
              @foreach ($items as $item)
        
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 port-item  " style="position: absolute; right: 0%; top: 0px;">
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
                </div>
            </div>
        </div>
        
        {{-- <div style="text-align: center">
            {{$item ->render()}} 
        </div> --}}
        
    </div>
</section>
<div class="clearfix"></div>
    
@endsection