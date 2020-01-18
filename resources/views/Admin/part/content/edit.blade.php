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
    <form role="form" action="{{route('content.update',["slug"=>$content->slug])}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('patch') }}

      <div class="card-body">
        <div class="form-group">
          <label for="title">عنوان</label>
        <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="عنوان را وارد کنید" value="{{$content->title}}">
        </div>

        <div class="form-group">
          <label for="title">توضیحات</label>
          <input type="text" name="discription" class="form-control" placeholder="توضیحات را وارد کنید"  value="{{ $content->description}}">
        </div>
    
          <div class="form-group">
            <label>انتخاب زبان</label>
            <select name="lang" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
              <option value="fa" {{$content->lang == 'fa' ? 'selected' : ''}}>Persian-فارسی</option>
              <option value="en" {{$content->lang == 'en' ? 'selected' : ''}}>English-انگلیسی</option>
            </select>
          </div>

          <div class="form-group">
            <label for="title">متن</label>
            <textarea type="text" name="body" class="form-control">{{$content->body}}</textarea>
          </div>
          <div class="form-group">
            <label for="title">تگ ها</label>
            <input type="text" name="tags" class="form-control" placeholder="لینک را وارد کیند را وارد کنید"  value="{{$content->tags}}">
          </div>

          <div class="input-group">
            <span class="input-group-btn">
              <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                <i class="fa fa-picture-o"></i> گالری
              </a>
            </span>
            <input id="thumbnail"  name="imageUrl" class="form-control" type="text" >
          </div>
          <img id="holder" style="margin-top:15px;max-height:100px;">
       
        {{-- <div class="form-group">
          <label for="exampleInputFile">ارسال فایل</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" name="imageUrl" class="custom-file-input" id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">انتخاب فایل</label>
            </div>
            <div class="input-group-append">
              <span class="input-group-text" id="">Upload</span>
            </div>
          </div>
        </div> --}}

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
            <div class="input-group-append">
              <span class="input-group-text" id="">افزودن</span>
            </div>
          </div>
        </div>
      
      </div>
      <!-- /.card-body -->      
     <br><br><br>

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">ارسال</button>
      </div>
    </form>
  </div>

@endsection