@extends('layout')
@section('content')

<div class="container deneme sd">
<div class="row align-items-start">
    <div class="col-lg-3 col-sm-6">

        <div class="card hovercard">
            <div class="cardheader">
                @if (session('user.ad')==$user->ad)
                <a  id="sa" href="{{ route('edituser',$user)}}"><i class="fas fa-cog"></i></a>
                @endif
            </div>
            <div class="avatar">
            <img alt="" src="/images/{{$user->img}}">
            </div>
            <div class="info">
                <div class="title">
                <p>{{$user->ad}}</p>
                </div>
              <div class="desc">{{$user->bio}}</div>
            </div>

        </div>

    </div>


      <div class="col-md-9">
        <h1 class="my-4 baslik">Başlattığı Hikayeler</h1>
  <?php foreach ($user->rootstories as  $value): ?>
    <div class="card mb-4">
      <div class="card-body">
        <h2 align="center" class="card-title"><?php echo $value->baslik ?></h2>
        <p class="card-text"><?php echo $value->metin ?></p>
        <a href="{{route('storydetay',$value)}}" class="btn btn-primary">Hikayeye Git &rarr;</a>
          @if (session('user.ad')==$user->ad)
        <form id="mform" style="display:inline-block;"class="" action="{{route('deletestory')}}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="delete">
            <button onclick="emin()" type="button"class="btn btn-danger">Hikayeyi Sil!</button>
            <input type="hidden" name="id" value="<?php echo $value->id ?>">
            <input type="hidden" name="seviye" value="<?php echo $value->seviye ?>">
          </form>
          @endif
      </div>
    </div>
  <?php endforeach; ?>
  <h2 class="my-4 baslik">Birinci Alternatifler</h2>
  <?php foreach ($user->firstalters as  $value): ?>
  <div class="card mb-4">
    <div class="card-body">
      <p class="card-text"><?php echo $value->metin ?></p>
        <a href="{{route('alterdetay',$value)}}" class="btn btn-primary">Hikayeye Git &rarr;</a>
        @if (session('user.ad')==$user->ad)

        <form id="mform" style="display:inline-block;"class="" action="{{route('deletestory')}}" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="_method" value="delete">
          <button onclick="emin()" type="button"class="btn btn-danger">Hikayeyi Sil!</button>
          <input type="hidden" name="id" value="<?php echo $value->id ?>">
          <input type="hidden" name="seviye" value="<?php echo $value->seviye ?>">
        </form>
@endif
  </div>
  </div>
  <?php endforeach; ?>
  <h3 class="my-4 baslik">İkinci Alternatifler</h3>
  <?php foreach ($user->secondalters as  $value): ?>
  <div class="card mb-4">
  <div class="card-body">
  <p class="card-text"><?php echo $value->metin ?></p>
  <a href="{{route('allstory',$value)}}" class="btn btn-primary">Hikayeyi Oku&rarr;</a>
  @if (session('user.ad')==$user->ad)

  <form id="mform" style="display:inline-block;"class="" action="{{route('deletestory')}}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="delete">
    <button onclick="emin()" type="button"class="btn btn-danger">Hikayeyi Sil!</button>
    <input type="hidden" name="id" value="<?php echo $value->id ?>">
    <input type="hidden" name="seviye" value="<?php echo $value->seviye ?>">
  </form>
@endif
  </div>
  </div>
  <?php endforeach; ?>
      </div>
    </div>
  </div>
  <script>
  </script>
    @endsection
  