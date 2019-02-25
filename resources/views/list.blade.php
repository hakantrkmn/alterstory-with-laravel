@extends('layout')

@section('content')

<div class="row">
        <div class="col-md-12">
          <h1 class="my-4 ">Hikayeler</h1>
          @foreach($rootStories as $rootstory)
          <div class="card mb-4">
              <div class="card-body">
                <h2 class="card-title" align="center"><a href=" {{ route('storydetay', $rootstory)}} "> <?php echo $rootstory->baslik ?></a></h2>
                <p class="card-text"><?php echo $rootstory->metin ?></p>
              </div>
            </div>
            @endforeach
        </div>
      </div>


@endsection