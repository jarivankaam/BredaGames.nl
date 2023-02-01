@foreach ($games as $game)
    <img src="{{$game->gameImagePath}}" alt="">
    <p>{{ $game->firstname . $game->surname }}</p>
    <p>{{ $game->email }}</p>
    <p>{{ $game->phone }}</p>
    <p>{{ $game->comments }}</p>
@endforeach
