@forelse($games as $game)
    <div><a href="/game/{{ $game['id'] }}/{{ $game['slug'] }}">{{ $game['name'] }}</a></div>
@empty
    Nothing to see here
@endforelse
