@extends('layout')
@section('content')

<div class="container deneme">
<div class="row align-items-start">
    <div class="col-lg-3 col-sm-6">

        <div class="card hovercard">
            <div class="cardheader">

            </div>
            <div class="avatar">
                <img alt="" src="https://scontent.fbtz1-3.fna.fbcdn.net/v/t1.0-9/14102416_10209123261632885_5785918647281898408_n.jpg?_nc_cat=109&_nc_ht=scontent.fbtz1-3.fna&oh=24cd59aaaf05f7bf3e4ef2bd4ad63485&oe=5CE18AE6">
            </div>
            <div class="info">
                <div class="title">
                <a target="_blank" href="https://scripteden.com/">{{$user->ad}}</a>
                </div>
                <div class="desc">Passionate designer</div>
                <div class="desc">Curious developer</div>
                <div class="desc">Tech geek</div>
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
        <a href="?op=alterstories&id=<?php echo $value->id ?>&seviye=<?php echo $value->seviye ?>" class="btn btn-primary">Hikayeye Git &rarr;</a>
          @if (session('user.ad')==$user->ad)
        <form id="mform" style="display:inline-block;"class="" action="{{route('deletestory')}}" method="post">
            {{ csrf_field() }}
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
        <a href="?op=alterstories&id=<?php echo $value->id ?>&seviye=<?php echo $value->seviye ?>" class="btn btn-primary">Hikayeye Git &rarr;</a>
        @if (session('user.ad')==$user->ad)

        <form id="mform" style="display:inline-block;"class="" action="{{route('deletestory')}}" method="post">
          {{ csrf_field() }}
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
  <a href="readstory/<?php echo $value->id ?>/<?php echo $value->seviye ?>/<?php echo $value->parentid ?>" class="btn btn-primary">Hikayeyi Oku&rarr;</a>
  @if (session('user.ad')==$user->ad)

  <form id="mform" style="display:inline-block;"class="" action="{{route('deletestory')}}" method="post">
    {{ csrf_field() }}
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
  