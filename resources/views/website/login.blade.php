@extends('layout')

@section('content')
    
    <div class="login-form">
           <form id="myform" action="{{route('loginUser')}} " method="post">
                {{ csrf_field() }}
               <h2 class="text-center">Giriş Yap</h2>
               <div id="asd"style="display: none" align="center" class="alert alert-danger">
                       <strong>Bilgiler yanlış</strong>
               </div>
               <div class="form-group">
                   <input id="kadi" name="kullanici_adi" type="text" class="form-control" placeholder="Kullanıcı Adı" required="required">
               </div>
               <div class="form-group">
                   <input id="ksifre" type="password" name="kullanici_sifre" class="form-control" placeholder="Şifre" required="required">
               </div>
               <div class="form-group">
                   <button onclick="sorgu2()" id="giris" type="submit" class="btn btn-primary btn-block">Giriş Yap</button>
                   <a  id="giris" href="{{route('signin')}}" class="btn btn-primary btn-block">Kayıt Ol</a>
               </div>
           </form>
       </div>
@endsection