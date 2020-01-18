@extends('Admin.master')

@section('content')


<div class="col-12">
 


    <div class="card">
      <div class="card-header">
          

        <div style="float: left">
          <a href="{{Route('content.create')}}" class="btn btn-info btn-xs  " style="font-family:iransans">افزودن<i class="fa fa-plus" style="margin-top:5px"></i></a>
        </div>

        <form class="form-inline ml-3" action="{{route('search.content')}}">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" name="search" type="search" placeholder="جستجو" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </div>
        </form>
      </div>


  
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover">
          <tbody><tr>
            <th>شماره</th>
            <th>تصویر</th>
            <th>عنوان</th>
            <th>توضیحات</th>
            <th>زبان</th>
            <th>تنظیمات</th>

          </tr>
          @foreach ($rows as $row)
            <tr>
              <td>{{$n++}}</td>
              <td><img src="{{$row->imageUrl}}" alt="" style="width:70px; height:50px;" class="rounded" ></td>
              <td><a href="{{Route('contentshow',["slug"=>$row->slug])}}">{{$row->title}}</a></td>
              <td>{{Str_limit($row->description,30)}}</td>
              <td>{{$row->lang}}</td>
            
              <th>
        

               <form action="{{Route('content.destroy',["slug"=>$row->slug])}}"  method="post">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <div class="btn btn-group btn-xs">
                  <a href="{{Route('content.edit',["slug"=>$row->slug])}}" class="btn btn-primary btn-sm">ویرایش</a>
                  <button type="submit" class="btn btn-danger btn-sm" > حذف</button>
                </div>
                  </form>
              
               </th>
               
            </tr>
              
          @endforeach

        </tbody></table>
      </div>
      <!-- /.card-body -->
    </div>
    <div style="text-align: center">
      {{$rows->render()}} 
  </div>
    <!-- /.card -->
  </div>



    
@endsection