@extends('Admin.master')
@section('script')
  <script src="/ckeditor/ckeditor.js"></script>
<script>
  var options = {
    language: 'fa'
  };
</script>
  <script>
   CKEDITOR.replace('body',options);
   </script>
   <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
   <script>



    var domain = "";
 $('#lfm').filemanager('image', {prefix: domain});


   </script>
    
@endsection


@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">افزودن</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    @include('layout.errors')
    <form role="form" action="{{route('menu.store')}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}

      <div class="card-body">
        <div class="form-group">
          <label for="title">عنوان منو</label>
          <input type="text" name="title" class="form-control" id="exampleInputEmail1"  value="{{ old('name')}}">
        </div>


        <div class="form-group">
            <label for="title">آدرس url</label>
            <input type="text" name="url" class="form-control"  value="{{ old('post')}}">
          </div>

          
          <div class="form-group">
            <label>انتخاب زبان</label>
            <select name="lang" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
              <option value="fa" selected="selected">Persian-فارسی</option>
              <option value="en" >English-انگلیسی</option>
            </select>
          </div>
          

          <div class="form-group">
            <label>انتخاب کنید</label>
            <select class="form-control" name="chid">
              <option value="0">سرگروه</option>
             
              @foreach ($chid as $item)
               <option value="{{$item->id}}">{{$item->title}}</option>
              @endforeach
             
            </select>
          </div>
       

          <div class="form-group">
            <label>وضعیت</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" value="1" name="status">
              <label class="form-check-label">فعال</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" value="0" name="status">
              <label class="form-check-label"> غیرفعال</label>
            </div>
          </div>

        <div class="form-group">
            <label for="title">ترتیب نمایش</label>
            <input type="text" name="sort" class="form-control"  value="{{ old('post')}}">
          </div>
      
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">ارسال</button>
      </div>
    </form>
  </div>

@endsection