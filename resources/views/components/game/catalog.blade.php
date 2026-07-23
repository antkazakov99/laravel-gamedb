<h1>Catalog</h1>

@forelse($games as $game)
    <div><a href="/game/{{ $game['slug'] }}">{{ $game['name'] }}</a></div>
@empty
    Nothing to see here
@endforelse
