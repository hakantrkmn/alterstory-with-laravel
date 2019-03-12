@extends('layout')
@section('content')
<div class="container sd">
    <div class="row">
        <div class="col-md-3"></div>
    <div class="col-md-6 ">
    <form style="margin: 50px auto;" id="editform" enctype="multipart/form-data" action="{{route('useredit',$user)}}" method="post">
            {{ csrf_field() }}
            <h2 id="login"class="text-center">Güncelle</h2>

        <div class="form-group ">
          <label id="nickLabel" for="ad">Kullanıcı Adı</label>
          <input type="text" name="ad" class="form-control" id="ad" value="{{$user->ad}}" aria-describedby="emailHelp" >
          
        </div>
        <div class="form-group ">
          <label id="bioLabel" for="bio">Biyografi</label>
          <input type="text" name="bio" class="form-control" id="bio" value="{{$user->bio}}" >
        </div>
             
    
        
        <div class="form-group">
          <label for="img">Profil Resmi</label>
          <input name="image"type="file"  class="form-control-file" id="img" >
        </div>
        <div>
        <button onclick="checkname()" class="btn btn-primary btn-sm ">Güncelle</button>
      </div>
      </form>
    </div>
    </div>
</div>





@endsection

