<h1>{{ $game['name'] }}</h1>
@isset($game['cover_path'])
    <img src="{{ $game['cover_path'] }}" alt="{{ $game['name'] }}"/>
@endisset
