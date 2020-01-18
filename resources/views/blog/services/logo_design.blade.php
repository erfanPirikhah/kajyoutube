@extends('blog.master')

@section('content')


<section>
    <div class="container">
        
        <div class="row">
            
            <div class="col-lg-6 col-md-6">
                <div class="about-content">
                    <h2>{{__('service.design.title')}}  </h2>
                    <p>{{__('service.design.body')}}</p>
                 <ul>
                     <li>{{__('service.design.li1')}}</li>
                     <li>{{__('service.design.li2')}}</li>
                     <li>{{__('service.design.li3')}}</li>
                     <li>{{__('service.design.li4')}}</li>
                     <li>{{__('service.design.li5')}}</li>
                     <li>{{__('service.design.li6')}}</li>
                     <li>{{__('service.design.li7')}}</li>
                     <li>{{__('service.design.li8')}}</li>
                     <li>{{__('service.design.li9')}}</li>
                     <li>{{__('service.design.li10')}}</li>
                     <li>{{__('service.design.li11')}}</li>
                 </ul>
                </div>
                <br><br>
            </div>
            <div class="col-lg-6 col-md-6">
                <img src="/blog/img/icon-web-design.png" class="img-fluid mx-auto" alt="">
            </div>
            
        <div>   
            <a href="{{route('order')}}" class="btn btn-success-light btn-rounded mb-2">{{__('service.order')}}<i class="ml-2 ti-arrow-right"></i></a>
        </div> 
    </div>
        
    </div>
</section>

@endsection