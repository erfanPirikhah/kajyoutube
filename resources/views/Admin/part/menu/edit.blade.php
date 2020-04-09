@extends('Admin.master')

@php
    $a= chidSub($menu->id)->chid;
@endphp

@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">افزودن</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    @include('layout.errors')
    <form role="form" action="{{route('menu.update',["id"=>$menu->id])}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('patch') }}
      <div class="card-body">
        <div class="form-group">
          <label for="title">عنوان منو</label>
          <input type="text" name="title" class="form-control" id="exampleInputEmail1"  value="{{ $menu->title }}">
        </div>


        <div class="form-group">
            <label for="title">آدرس url</label>
            <input type="text" name="url" class="form-control"  value="{{ $menu->url }}">
          </div>

          
          <div class="form-group">
            <label>انتخاب زبان</label>
            <select name="lang" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
              <option value="fa" {{$menu->lang == 'fa' ? 'selected' : ''}}>Persian-فارسی</option>
              <option value="en" {{$menu->lang == 'en' ? 'selected' : ''}}>English-انگلیسی</option>
            </select>
          </div>
          

          <div class="form-group">
            <label>انتخاب کنید</label>
            <select class="form-control" name="chid">
              <option value="0">سرگروه</option>
             
              @foreach ($chid as $item)
                <option value="{{$item->id}}" {{$item->id == $a ? 'selected' : ''}}>{{$item->title}}</option>
              @endforeach
            </select>
          </div>
       

          <div class="form-group">
            <label>وضعیت</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" value="1" name="status"  {{$menu->status == 1 ? "checked" : ''}}>
              <label class="form-check-label">فعال</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" value="0" name="status"  {{$menu->status == 0 ? "checked" : ''}}>
              <label class="form-check-label"> غیرفعال</label>
            </div>
          </div>

        <div class="form-group">
            <label for="title">ترتیب نمایش</label>
            <input type="text" name="sort" class="form-control"  value="{{$menu->sort}}">
          </div>
      
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">ارسال</button>
      </div>
    </form>
  </div>

@endsection