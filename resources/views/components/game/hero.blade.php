<section class="grid grid-cols-[max-content_auto] gap-5">
    <div class="w-2xs aspect-3/4 rounded-2xl overflow-hidden bg-linear-to-bl from-gray-600 to-gray-700">
        @isset($game['cover_path'])
            <img src="{{ $game['cover_path'] }}" alt="{{ $game['name'] }}" class="size-full object-cover"/>
        @endisset
    </div>
    <div>
        <h1 class="text-3xl font-bold text-gray-900">{{ $game['name'] }}</h1>
        <div>{{ $game->formatReleaseDate() }}</div>
        <div>{{ $game->description }}</div>
    </div>
</section>
