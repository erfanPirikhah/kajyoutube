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
    <form role="form" action="{{route('sample.update',["id"=>$sample->id])}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('patch') }}

      <div class="card-body">
        <div class="form-group">
          <label for="title">نام و نام خانوادگی</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="عنوان را وارد کنید" value="{{$sample->name}}">
        </div>
        <div class="form-group">
            <label>دسته بندی نمونه کار</label>
            <select name="category" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" >
            <option selected="selected">یک گزینه را انتخاب کنید ......</option>
            <option value="teaser"    {{$sample->category == 'teaser' ? 'selected' : ''}}>تیزر تبلیغاتی </option>
            <option value="logo"      {{$sample->category == 'logo' ? 'selected' : ''}}>لوگو </option>
            <option value="program"   {{$sample->category == 'program' ? 'selected' : ''}}>طراحی و برنامه نویسی سایت</option>
            <option value="poster"    {{$sample->category == 'poster' ? 'selected' : ''}}>پوستر</option>
            <option value="android"   {{$sample->category == 'android' ? 'selected' : ''}}>برنامه نویسی اندروید و ios</option>
            <option value="animaite"  {{$sample->category == 'animaite' ? 'selected' : ''}}>انیمشین</option>
            <option value="Campaign"  {{$sample->category == 'Campaign' ? 'selected' : ''}}>کمپین</option>
           
          </select>
        </div>
 
          <div class="form-group">
            <label>انتخاب زبان</label>
            <select name="lang" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
              <option value="fa" {{$sample->lang == 'fa' ? 'selected' : ''}}>Persian-فارسی</option>
              <option value="en" {{$sample->lang == 'en' ? 'selected' : ''}}>English-انگلیسی</option>
            </select>
          </div>

          <div class="form-group">
            <label for="title">متن</label>
            <textarea type="text" name="body" class="form-control" >{{$sample->body}}</textarea>
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
      
      </div>
      <!-- /.card-body -->
      <div class="form-group">
        <label for="title">لینک ویدیو</label>
        <input type="text" name="videoUrl" class="form-control" placeholder="لینک را وارد کیند را وارد کنید"  value="{{ old('videoUrl')}}">
      </div>

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">ارسال</button>
      </div>
    </form>
  </div>

@endsection