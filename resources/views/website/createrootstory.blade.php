@extends('layout')

@section('content')
    
<div class="container sd">
    <div class="row">
      <div class="col-md-12">
        <h1 class="my-4 ">Hikayeni Başlat </h1>
        @if($errors->any())
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger text-center" role="alert"> 
          {{$error}}
    </div> 
        @endforeach
        @endif
        <div class="card mb-4">
          <form method="post" action="{{route('addRootStory')}}">
            {{ csrf_field() }}
            <div class="form-group">
              <input value="{{ old('baslik') }}" name="baslik"  type="text" class="form-control" placeholder="Hikaye Başlığı" required="required">
            </div>
            <textarea name="metin" onkeyup="charcountupdate(this.value)" id="textbox">{{ old('metin') }} </textarea>
            <div class="buton">
              <strong><span id="charcount"></span> karakter</strong>
              <button id="buton" onclick="karakter()" type="submit" class="btn btn-primary">Başlat</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
    @endsection