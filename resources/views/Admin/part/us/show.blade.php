@extends('Admin.master')
@section('content')

<div class="card">
    
    <div class="card-header">
      <h3 class="card-title">
        
         <h2>{{$us->description}}</h2>
      </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <h5>{{$us->name}}</h5>
    <h5>{{$us->email}}</h5>
    <h5>{{$us->mobile}}</h5>
        <br>
    <div  class="container">
        <div  class="container">
            {{$us->body}}
        </div>
    </div>

    </div>
    <!-- /.card-body -->
  </div>
    
@endsection