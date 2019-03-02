@extends('layout')

@section('content')

<div class="container sd">
    <div class="row">
        <div class="col-md-12">
        <h1 class="my-4">Tüm Hikaye</h1>
        <!–– TIKLANAN HİKAYENİN ANA HİKAYESİ ––>
        <div class="card mb-4">
          <div class="card-body">
            <h2 align="center"class="card-title">{{$story->parentfirstalter->parentStory->baslik}}</h2>
            <p class="card-text"><?php echo $story->parentfirstalter->parentStory->metin ?> <br> <a href="profil.php?kullanici=<?php echo $story->parentfirstalter->parentStory->user->ad  ?>"><?php echo $story->parentfirstalter->parentStory->user->ad ?></a>(<?php echo $story->parentfirstalter->parentStory->created_at->diffForHumans() ?>)
              <a href="altergör.php?id=<?php echo $story->parentfirstalter->parentStory->id ?>&seviye=<?php echo $story->parentfirstalter->parentStory->seviye ?>">Hikayeye git <i class="fas fa-book-open"></i></a></p>
              <!–– TIKLANAN HİKAYENİN BİRİNCİ ALTERNATİFİ  ––>
              <p class="card-text"><?php echo $story->parentfirstalter->metin ?> <br> <a href="profil.php?kullanici=<?php echo $story->parentfirstalter->user->ad  ?>"><?php echo $story->parentfirstalter->user->ad ?></a>(<?php echo $story->parentfirstalter->created_at->diffForHumans() ?>)<a href="altergör.php?id=<?php echo $story->parentfirstalter->id ?>&seviye=<?php echo $story->parentfirstalter->seviye ?>&id=<?php echo $story->parentfirstalter->parentid ?>">Hikayeye git <i class="fas fa-book-open"></i></a></p>
              <!–– TIKLANAN HİKAYENİN KENDİSİ ––>
              <p class="card-text"><?php echo $story->metin ?> <br> <a href="profil.php?kullanici=<?php echo $story->user->ad  ?>"><?php echo $story->user->ad ?></a>(<?php echo $story->created_at->diffForHumans() ?>)</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endsection

  