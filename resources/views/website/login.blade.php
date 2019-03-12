@extends('layout')

@section('content')
    <div class="container sd">
    <div class="login-form">
           <form id="myform"  method="post">
                {{ csrf_field() }}
               <h2 id="login"class="text-center">Giriş Yap</h2>
               <div class="form-group">
                   <input id="kadi" name="ad" type="text" class="form-control" placeholder="Kullanıcı Adı" required="required">
               </div>
               <div class="form-group">
                   <input id="ksifre" type="password" name="sifre" class="form-control" placeholder="Parola" required="required">
               </div>
               <div class="form-group">
                   <button onclick="sorgu2()" id="giris" type="submit" class="btn btn-primary btn-block">Giriş Yap</button>
                   <a  id="giris" href="{{route('signin')}}" class="btn btn-primary btn-block">Kayıt Ol</a>
               </div>
           </form>
       </div>
    </div>
@endsection