@extends('Admin.master')
@section('content')

<div class="card">
    
    <div class="card-header">
      <h3 class="card-title">
        
         <h2>{{$order->category->name}}</h2>
      </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <label>جناب:</label>  <span>{{$order->firstName}} {{$order->lastName}}</span><br>
      <label>ایمیل:</label>  <span>{{$order->email}}</span><br>
      <label>شماره تماس:</label>  <span>{{$order->mobile}}</span><br>
    
        <br>
    <div  class="container">
        <div  class="container">
            {!!$order->body!!}
        </div>
    </div>

    </div>
    <!-- /.card-body -->
  </div>
    
@endsection