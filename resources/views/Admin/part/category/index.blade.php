@extends('Admin.master')

@section('content')
<div class="row">

    <div class="col-6">

      <div class="card-body table-responsive p-0">
        <table class="table table-hover">
          <tbody><tr>
            <th>شماره</th>
            <th>نام</th>
            <th>زبان</th>
            <th>تنظیمات</th>

          </tr>
          @foreach ($rows as $row)
            <tr>
              <td>{{$n++}}</td>
              <td>{{$row->name}}</td>
              <td>{{$row->lang}}</td>
            
              <th>
        

               <form action="{{Route('category.destroy',["id"=>$row->id])}}"  method="post">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <div class="btn btn-group btn-xs">
                  <button type="submit" class="btn btn-danger btn-sm" > حذف</button>
                </div>
                  </form>
              
               </th>
               
            </tr>
              
          @endforeach

        </tbody></table>
      </div>
    </div>
  
    <div class="col-6 ">
         <form action="{{route('category.store')}}" method="POST" >
        {{ csrf_field() }}
        
            <div class="card-body">
                <div class="form-group">
                  <label for="title">عنوان</label>
                  <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="عنوان را وارد کنید"  value="{{ old('name')}}">
                </div>
             <div class="form-group">
            <label>انتخاب زبان</label>
            <select name="lang" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
              <option value="fa" selected="selected">Persian-فارسی</option>
              <option value="en" >English-انگلیسی</option>
            </select>
          </div>
    
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">ارسال</button>
         
         
     </form>
    </div>
   

</div>
<br><br><br>
<div style="text-align: center">
  {{$rows->render()}} 
</div>

  @endsection