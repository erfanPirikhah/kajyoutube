@extends('Admin.master')

@section('content')


<div class="col-12">
 
    <div class="card">
      <div class="card-header">
        <div style="float: left">
          <a href="{{Route('personnel.create')}}" class="btn btn-info btn-xs  " style="font-family:iransans">افزودن<i class="fa fa-plus" style="margin-top:5px"></i></a>
        </div>

        
      </div>
    
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover">
          <tbody><tr>
            <th>شماره</th>
            <th>تصویر </th>
            <th>نام</th>
            <th>سمت </th>
            <th>زبان </th>
            <th>تنظیمات </th>

          </tr>
          @foreach ($rows as $row)
            <tr>
              <td>{{$n++}}</td>
              <td><img src="{{$row->imageUrl}}" alt="" style="width:60px; height:60px;" class="img-circle elevation-2" ></td>
              <td>{{$row->name}}</td>
              <td>{{$row->post}}</td>
              <td>{{$row->lang == 'fa'  ?'فارسی ':"انگلیسی"}}</td>
              <th>
        

               <form action="{{Route('personnel.destroy',["id"=>$row->id])}}"  method="post">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <div class="btn btn-group btn-xs">
                  <a href="{{Route('personnel.edit',["id"=>$row->id])}}" class="btn btn-primary btn-sm">ویرایش</a>
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