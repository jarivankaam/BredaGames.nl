
<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
<div class="container">
    <div class="row">

<?php $counter = 1 ?>
@foreach ($games as $game)
    <div class="col-12 <?php if($counter == 1) : ?> flex justify-content-center flex-column <?php else : ?> col-lg-6 <?php endif ?>  col-sm-12 col-md-12">
        <img src="{{$game->gameImagePath}}" alt="">
        <p>{{ $game->firstname . $game->surname }}</p>
        <p>{{ $game->email }}</p>
        <p>{{ $game->phone }}</p>
        <p>{{ $game->comments }}</p>
    </div>

    <?php $counter++ ?>
@endforeach
</div>
    </div>
