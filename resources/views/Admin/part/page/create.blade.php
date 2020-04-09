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
    <form role="form" action="{{route('page.store')}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}

      




      <div class="card-body">
        <div class="form-group">
          <label for="title">عنوان</label>
          <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="عنوان را وارد کنید"  value="{{ old('title')}}">
        </div>
       
        <div class="form-group">
          <label for="title">ادرس</label>
          <input type="text" name="url" class="form-control" id="exampleInputEmail1" placeholder="ادرس را وارد کنید"  value="{{ old('title')}}">
        </div>

        

          <div class="form-group">
            <label for="title">متن</label>
            <textarea type="text" name="body" class="form-control" value="{{ old('body')}}"></textarea>
          </div>
          
          
          
          <div class="input-group">
            <span class="input-group-btn">
              <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                <i class="fa fa-picture-o"></i> گالری
              </a>
            </span>
            <input id="thumbnail"  name="imageUrl" class="form-control" type="text" ">
          </div>
          <img id="holder" style="margin-top:15px;max-height:100px;">

       

        <div class="form-group">
          <label for="title">لینک ویدیو</label>
          <input type="text" name="videoUrl" class="form-control" placeholder="لینک را وارد کیند را وارد کنید"  value="{{ old('videoUrl')}}">
        </div>

        <div class="form-group">
          <label for="exampleInputFile">ارسال فایل صوتی</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" name="audioUrl" class="custom-file-input" id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">ارسال فایل صوتی</label>
            </div>
            <br>


            <div class="input-group-append">
              <span class="input-group-text" id="">افزودن</span>
            </div>
          </div>
        </div>
      
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">ارسال</button>
      </div>
  
      <img id="holder" style="margin-top:15px;max-height:100px;">
    </form>
  </div>

@endsection
