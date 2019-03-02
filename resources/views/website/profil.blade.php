@extends('layout')

@section('content')


  <div class="row">
      <div class="col-md-12">
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
    @endsection
  