@extends('layout')

@section('content')
    
<div class="container sd">
        <div class="login-form">
        <form id="myform" action="{{ route('signinUser') }}" method="POST" >
                {{ csrf_field() }}
               <h2 id="signin" class="text-center"> Kayıt Ol</h2>

               <div class="form-group">
                   <input id="kadi" name="adi" type="text" class="form-control" placeholder="Kullanıcı Adı" required="required">
               </div>
               <div class="form-group">
                   <input id="kmail" name="mail" type="email" class="form-control" placeholder="Email" required="required">
               </div>
               <div class="form-group">
                   <input id="ksifre" type="password" name="sifre" class="form-control" placeholder="Parola" required="required">
               </div>
               <div class="form-group">
                   <input id="dogrulama" type="password" class="form-control " placeholder="Parola Tekrar"  required="required">
               </div>
               <div id="warn" style="display:none" class="form-group">
                 <div class="card text-center">
                 <div class="card-body">
                 Şifreler uyuşmuyor!
                 </div>
                 </div>
               </div>
               <div class="form-group">
                   <button onclick="sorgu()" id="signinButton" type="submit" class="btn btn-primary btn-block">Kayıt ol</button>
               </div>
           </form>
       </div>
    </div>
       @endsection