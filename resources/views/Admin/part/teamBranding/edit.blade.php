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
  <form role="form" action="{{route('team.update',['id'=>$team->id])}}" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}

    
      {{ method_field('patch') }}



    <div class="card-body">
      <div class="form-group">
        <label for="title">عنوان</label>
        <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="عنوان را وارد کنید"  value="{{$team->title}}">
      </div>
     

      <div class="form-group">
        <label>انتخاب زبان</label>
        <select name="lang" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
          <option value="fa" {{$team->lang == 'fa' ? 'selected' : ''}}>Persian-فارسی</option>
          <option value="en" {{$team->lang == 'en' ? 'selected' : ''}}>English-انگلیسی</option>
        </select>
      </div>
      

        <div class="form-group">
          <label for="title">متن</label>
          <textarea type="text" name="body" class="form-control">{{$team->body}}</textarea>
        </div>
        
        
        <label for="title">آیکن</label>
        <div class="input-group">
          <span class="input-group-btn">
            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
              <i class="fa fa-picture-o"></i> گالری
            </a>
          </span>
        <input id="thumbnail"  name="imageUrl" class="form-control" type="text" value="{{$team->icon}}">
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