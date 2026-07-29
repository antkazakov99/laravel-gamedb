<section>
    <div class="grid grid-cols-2 gap-5">
        @forelse($games as $game)
            <div class="grid grid-cols-[max-content_auto] gap-5 p-2 rounded-2xl shadow-2xl">
                <div class="w-32 aspect-3/4 rounded-2xl overflow-hidden bg-linear-to-bl from-gray-600 to-gray-700">
                    @isset($game['cover_path'])
                        <img src="{{ $game['cover_path'] }}" alt="{{ $game['name'] }}" class="size-full object-cover"/>
                    @endisset
                </div>
                <div>
                    <a href="/game/{{ $game['id'] }}/{{ $game['slug'] }}" class="font-bold text-gray-900">{{ $game['name'] }}</a>
                </div>
            </div>
        @empty
            Nothing to see here
        @endforelse
    </div>
</section>
