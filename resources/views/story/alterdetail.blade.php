@extends('layout')

@section('content')

    <div class="row">
      <div  class="col-md-12">
        <h1 class="my-4">Alternatif Devamlar</h1>
          <div class="card mb-4">
            <div class="card-body"> 
              <h2 align="center"class="card-title"><?php echo $firstalter->parentStory->baslik ?></h2>
              <p class="card-text"><?php echo $firstalter->parentStory->metin ?><br>
               <a href="profil/<?php echo $firstalter->parentStory->user->ad  ?>"><?php echo $firstalter->parentStory->user->ad ?></a>
               (<?php echo $firstalter->parentStory->created_at->diffForHumans() ?>)
               <a  href="alterstories/<?php echo $firstalter->parentStory->id ?>/<?php echo $firstalter->parentStory->seviye?>" class=" btn-link  btn-sm">Hikayeye git <i class="fas fa-book-open"></i></a>
              </p>
              <p class="card-text"><?php echo $firstalter->metin ?> <br> <a href="profil/<?php echo $firstalter->user->ad  ?>"><?php echo $firstalter->user->ad ?></a>(<?php echo $firstalter->created_at->diffForHumans() ?>)</p>
              @if (session()->has('user') and $firstalter->izin()==1 )
               
                        <form class="" action="{{ route('addalter', $firstalter->id)}}" method="post">
                            {{ csrf_field() }}
                        <input type="hidden" name="parentid" value="<?php echo $firstalter->id ?>">
                        <input type="hidden" name="seviye" value="<?php echo $firstalter->seviye ?>">
                        <button class="btn btn-primary btn-sm"type="submit">devam ettir &rarr;</button>
                        </form>
                           
              @endif
            </div>
      </div>
    </div>
      @foreach  ($firstalter->secondalters as $story)
          
   
          <div class="col-md-<?php echo 12/count($firstalter->secondalters) ?>">
          <div class="card mb-4">
              <div class="card-body">
                <p id="metin"class="card-text qw"><?php echo $story->metin ?> <br> 
                <a href="profil/<?php echo $story->user->ad  ?>"><?php echo $story->user->ad ?>
                </a>
                (<?php echo $story->created_at->diffForHumans() ?>)
                </p>
                <a href="readstory/<?php echo $story->id ?>/<?php echo $story->seviye ?>/<?php echo $story->parentid ?>" class="btn btn-primary btn-sm">Hikayeyi Oku&rarr;</a>
              </div>
            </div>
          </div>
          @endforeach
        <?php /* if ($firstalter->devamsayisi==0): ?>
          <div id="uyari" class="col-md-12">
            <div class="card">
                <div class="card-body text-center">
                       Bu hikayeye henüz alternatif bir son eklenmemiş gibi gözüküyor.
                 </div>
             </div>
          </div>
        <?php  endif;*/ ?>
        </div>
    </div>

  <script>
  setTimeout(function() {
          $("#uyari").fadeOut();
      }, 5000);
  </script>

  @endsection

  