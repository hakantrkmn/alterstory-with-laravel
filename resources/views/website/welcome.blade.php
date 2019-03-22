@extends('layout')

@section('content')
<style>
.navbar{
    position:absolute;

}
    
</style>
<article class="container sd">
    <div class="row">
        <div class="col-sm-8">
            <div class="login-main">
                <h4><i class="fa fa-dashboard"></i>alterstory</h4>
                <span>Some sample description text about the template goes here</span>

                {{-- <h4> <i class="fa fa-money"></i> 100%  fully responsive </h4>
                <span>Another description text about the template goes here</span>

                <h4><i class="fa fa-mobile-phone"></i> Competible with all browers and mobile devices</h4>
                <span>Yet another sample description text can be placed in one line</span>

                <h4> <i class="fa fa-trophy"></i> Easy to use and custmize with mobile friendly and responsive</h4>
                <span>Your last description text about your startup or business</span> --}}
            </div>
        </div>
        <div style="padding-top:50px" class="col-sm-4">
            <div class="">
            
            <center><h3  id="signin"><i class="fa fa-shield"></i>Kayıt Ol</h3></center>
              <hr>
              <form id="myform" action="{{ route('signinUser') }}" method="POST" >
                    {{ csrf_field() }}

                    <div class="form-group">
                    <label class="control-label" for="">Kullanıcı Adı</label>

                <input id="kadi" name="adi" type="text" class="form-control" placeholder="Kullanıcı Adı" required="required">
            </div>
            <div class="form-group">
              <label class="control-label" for="">Email</label>
              <input id="kmail" name="mail" type="email" class="form-control" placeholder="Email" required="required">
            </div>

            <div class="form-group">
              <label class="control-label" for="">Parola</label>
              <input id="ksifre" type="password" name="sifre" class="form-control" placeholder="Parola" required="required">
            </div>

            <div class="form-group">
              <label class="control-label" for="">Parola Tekrar</label>
              <input id="dogrulama" type="password" class="form-control " placeholder="Parola Tekrar"  required="required">
            </div>

            <div id="warn" style="display:none" class="form-group">
                <div class="card text-center">
                <div class="card-body">
                Şifreler uyuşmuyor!
                </div>
                </div>
              </div>
 
            <div style="height:10px;"></div>
            <div class="form-group">
              <label class="control-label" for=""></label>
              <button onclick="sorgu()" id="signinButton" type="submit" class="btn btn-primary btn-block">Kayıt ol</button>
            </div>	 

              </div>
        </div>
    </form>
        </div>
    
    </div>
</article>
@endsection
