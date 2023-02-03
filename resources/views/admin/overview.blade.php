@extends('layouts.overview')
@section('content')
<div class="container">
    <div class="row">
        <?php $counter = 1 ?>
        @foreach ($games as $game)
            <div class="col-12 <?php if($counter == 1) : ?> big flex justify-content-center flex-column <?php else : ?> col-lg-6 <?php endif ?>  col-sm-12 col-md-12">
                <div class="part-wrapper">
                <div class="image-wrapper">
                    <img src="{{$game->gameImagePath}}" alt="">
                </div>
                <div class="hidden-wrapper">
                    <p>{{ $game->firstname . $game->surname }}</p>
                    <p>{{ $game->email }}</p>
                    <p>{{ $game->phone }}</p>
                    <p>{{ $game->comments }}</p>
                    </div>
                </div>
            </div>
            <?php $counter++ ?>
        @endforeach
    </div>
</div>
@endsection
