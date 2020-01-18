@extends('blog.master')

@section('content')

<section>
    <div class="container">
        
        <div class="row">
            
            
            <div class="col-lg-7 col-md-7">
                <div class="contact-form">
                    @include('layout.errors')
                    <form action="{{route('order.store')}}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                              <label class="c-og">{{__('index.order.firstname')}}</label>
                              <input type="text" name="firstName" class="form-control" placeholder="{{__('index.order.firstname')}}"  value="{{ old('firstName')}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="c-og">{{__('index.order.lastname')}}</label>
                                <input type="text" name="lastName" class="form-control" placeholder="{{__('index.order.lastname')}}"  value="{{ old('lastName')}}">
                              </div>
                            <div class="form-group col-md-6">
                              <label class="c-og">{{__('index.order.email')}}</label>
                              <input type="email" name="email" class="form-control" placeholder="{{__('index.order.email')}}"  value="{{ old('email')}}">
                            </div>

                            <div class="form-group col-md-6">
                                <label class="c-og">{{__('index.order.mobile')}}</label>
                                <input type="text" name="mobile" class="form-control" placeholder="{{__('index.order.mobile')}}"  value="{{ old('mobile')}}">
                              </div>
                        </div>

                        <div class="form-group">
                            <label class="c-og">{{__('index.order.category')}}</label>
                            <select name="category_id" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" >
                              @foreach ($categories as $category)
                                <option value="{{$category->id}}" selected="selected">{{$category->name}}</option>
                              @endforeach
                            </select>
                          </div>

                          <div class="form-group ">
                            <label class="c-og">{{__('index.order.price')}}</label>
                            <input type="number" name="price" class="form-control"  placeholder="{{__('index.order.price')}} "   value="{{ old('price')}}">
                          </div>
                    </div>

                        <div class="form-group">
                            <label class="c-og">{{__('index.order.description')}}</label>
                            <textarea class="form-control" name="body" placeholder="اینجا تایپ کنید ..."  >{{ old('body')}}</textarea>
                        </div>
                        <button type="submit" class="btn bg-og">{{__('index.order.send')}}</button>
                    </form>
                </div>
            </div>
            
        </div>
        
    </div>
</section>
<div class="clearfix"></div>


@endsection