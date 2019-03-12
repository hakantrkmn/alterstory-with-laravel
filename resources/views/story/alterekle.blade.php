@extends('layout')

@section('content')
<div class="container sd">
       <div class="row">
          <div class="col-md-12">
            <h1 class="my-4">Kendi Alternatif Devamını Yaz</h1>
            @if($request->seviye==0)
              <div class="card mb-4">
                <div class="card-body">
                  <h2 align="center" class="card-title"><?php echo $story->baslik ?></h2>
                  <p class="card-text"><?php echo $story->metin ?> <br> <a href=""> {{ $story->user->ad }} </a>(<?php echo $story->created_at->diffForHumans() ?>)</p>
                </div>
              </div>
            @elseif($request->seviye==1) 
              <div class="card mb-4">
                <div class="card-body">
                  <h2 align="center"class="card-title">{{$story->parentStory->baslik }}</h2>
                  <p class="card-text"><?php echo $story->parentStory->metin ?> <br> <a href="?op=profil&kullanici=<?php echo $story->parentStory->user->ad  ?>"><?php echo $story->parentStory->user->ad ?></a>(<?php echo $story->parentStory->created_at->diffForHumans() ?>)</p>
                <p class="card-text"><?php echo $story->metin ?> <br> <a href="{{route('profil',$story->user->ad)}}"><?php echo $story->user->ad ?></a>(<?php echo $story->created_at->diffForHumans() ?>)</p>
                </div>
              </div>
              @endif

              <div class="card mb-4">
              <form method="post" action="{{route('savealter')}}">
                {{ csrf_field() }}
              <input type="hidden" name="parentid" value="{{$story->id}}">
                <input type="hidden" name="seviye" value="{{$request->seviye }}">
                        <textarea  name="metin" onkeyup="charcountupdate(this.value)" id="textbox"> </textarea>
                        <div class="buton">
                          <strong><span id="charcount"></span> karakter</strong>
                          <button onclick="karakter()" id="buton" type="submit" class="btn btn-dark ">Sonlandır</button>
                        </div>
                      </form>
            </div>
          </div>
        </div>
        </div>
      </div>
        @endsection