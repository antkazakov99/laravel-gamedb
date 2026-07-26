<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index() {
        return view('games.index', [
            'games' => Game::all()
        ]);
    }

    public function show(Game $game, ?string $slug = null) {
        if ($slug !== $game['slug']) {
            return redirect()->route('games.show', [
                'game' => $game,
                'slug' => $game['slug']
            ]);
        }

        return view('games.show', ['game' => $game]);
    }
}
