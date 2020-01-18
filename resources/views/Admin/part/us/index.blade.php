@extends('Admin.master')

@section('content')


<div class="col-12">
 
   
    
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover">
          <tbody><tr>
            <th>شماره</th>
            <th>نام </th>
            <th>email</th>
            <th>موضوع </th>
            <th>تنظیمات </th>

          </tr>
          @foreach ($rows as $row)
            <tr>
              <td>{{$n++}}</td>
              <td>{{$row->name}}</td>
              <td>{{$row->email}}</td>
              <td>{{$row->description}}</td>
              <th>
        

               <form action="{{Route('us.destroy',["id"=>$row->id])}}"  method="post">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <div class="btn btn-group btn-xs">
                  <a href="{{Route('us.edit',["id"=>$row->id])}}" class="btn btn-primary btn-sm">نمایش</a>
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