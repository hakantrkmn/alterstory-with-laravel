@extends('layout')

@section('content')
<div class="container sd">
    <div class="row">
      <div  class="col-md-12">
        <h1 class="my-4">Alternatif Devamlar</h1>
        @if($errors->any())
          <div class="alert alert-danger text-center" role="alert"> 
              {{$errors->first()}}
        </div>
          @endif
          <div class="card mb-4">
            <div class="card-body">
              <h2 align="center"class="card-title"> {{ $rootstory->baslik }} </h2>
              <p class="card-text"><?php echo $rootstory->metin ?><br> <a href="{{route('profil', $rootstory->user->ad)}}">{{ $rootstory->user->ad }}</a>({{ $rootstory->created_at->diffForHumans() }})</p>

              @if (session()->has('user') and $rootstory->izin()==1)  

              <form class="" action="{{ route('addalter', $rootstory->id)}}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="seviye" value=" {{ $rootstory->seviye}} ">
                    <button class="btn btn-primary btn-sm"type="submit">devam ettir &rarr;</button>
                </form>
                @endif   
            </div>
          </div>
        </div>
      @foreach ($rootstory->firstalters as $story)
      <div class="col-md-<?php echo 12/count($rootstory->firstalters) ?>">
        <div id="qwe"class="card mb-4">
          <div class="card-body">
            <p id="metin"class="card-text qw"><?php echo $story->metin?> <br> <a href="{{route('profil', $story->user->ad)}}"><?php echo $story->user->ad ?></a>(<?php echo $story->created_at->diffForHumans() ?>)</p>
          <a href="{{route('alterdetay',$story)}}" class="btn btn-primary btn-sm">Alternatif Devamlar &rarr;</a>
              <button type="button" class="btn btn-primary silme btn-sm" name="button">Oku</button>

          </div>
        </div>
      </div>
      @endforeach
    </div>

  <script>
  setTimeout(function() {
          $("#uyari").fadeOut();
      }, 5000);
  </script>
  
</div>
@endsection