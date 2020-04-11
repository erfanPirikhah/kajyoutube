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
  <form role="form" action="{{route('slider.update',['id'=>$slider->id])}}" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}

    
      {{ method_field('patch') }}



      <div class="card-body">
        <div class="form-group">
          <label for="title">عنوان</label>
          <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="عنوان را وارد کنید"  value="{{ $slider->title}}">
        </div>
       
           
          <label for="title">عکس</label>
          <div class="input-group">
            <span class="input-group-btn">
              <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                <i class="fa fa-picture-o"></i> گالری
              </a>
            </span>
          <input id="thumbnail"  name="imageUrl" class="form-control" type="text" value="{{$slider->imageUrl}}">
          </div>
          <img id="holder" style="margin-top:15px;max-height:100px;">


    
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">ارسال</button>
    </div>

    <img id="holder" style="margin-top:15px;max-height:100px;">
  </form>
</div>

@endsection