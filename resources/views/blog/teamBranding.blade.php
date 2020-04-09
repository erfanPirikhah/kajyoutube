@extends('blog.master')

@section('content')

<div class=" container">

    <div class="col text-center">
        <div class="sec-heading mx-auto">
            <h2>{{ __('index.part.title') }}</h2>
            <h6>{{ __('index.part.body') }} </h6>
         
        </div>
    </div>
    
    <div id="poro">
    <h3>{{__('team.title1')}}</h3>
    <p>{{__('team.body1')}}</p>
    </div>

    <br><br><br>

    <div id="Wireframing">
        <h3>{{__('team.title2')}}</h3>
        <p>{{__('team.body2')}}</p>
    </div>
    <br><br><br>
    <div>
        <h3>{{__('team.title3')}}</h3>
        <p>{{__('team.body3')}}</p>
    </div>

    <br><br><br>
    <div>
        <h3>{{__('team.title4')}}</h3>
        <p>{{__('team.body4')}}</p>
    </div>

    <br><br><br>
    <div>
        <h3>{{__('team.title5')}}</h3>
        <p>{{__('team.body5')}}</p>
    </div>

    <br><br><br>
    <div>
        <h3>{{__('team.title6')}}</h3>
        <p>{{__('team.body6')}}</p>
    </div>

    <br><br><br>
    <div>
        <h3>{{__('team.title9')}}</h3>
        <p>{{__('team.body9')}}</p>
    </div>
    <br><br><br> 
    
    <div>
        <h3>{{__('team.title7')}}</h3>
        <p>{{__('team.body7')}}</p>
    </div>
    <br><br><br>
    <div>
        <h3>{{__('team.title8')}}</h3>
        <p>{{__('team.body8')}}</p>
    </div>
    <br><br><br>
   
    
    <div>
        <h3>{{__('team.title10')}}</h3>
        <p>{{__('team.body10')}}</p>
    </div>
</div>

@endsection