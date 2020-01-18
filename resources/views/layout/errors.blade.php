@if (count($errors)>0)
<br><br>
<div class="container col-8 ">
    <div class="alert alert-danger alert-dismissible" style="margin-top:-40px">
        <ul>
            @foreach ($errors->all() as $error)
        <li><h6><i class="icon fa fa-ban"></i> {{$error}}</h6></li>
            @endforeach
        </ul>
      </div>

</div>
    
@endif