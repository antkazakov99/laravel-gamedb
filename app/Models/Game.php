<?php

namespace App\Models;

use App\Enums\DatePrecision;
use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Game extends Model
{
    use HasFactory;

    protected function casts(): array
    {
        return [
            'release_date' => 'date',
        ];
    }

    public function developers(): BelongsToMany
    {
        return $this->belongsToMany(Developer::class);
    }

    public function formatReleaseDate(): string
    {
        return match ($this['release_date_precision']) {
            DatePrecision::Day->value => $this['release_date']->format('M d, Y'),
            DatePrecision::Month->value => $this['release_date']->format('M Y'),
            DatePrecision::Quarter->value => 'Q' . $this->release_date->quarter . ' ' . $this->release_date->year,
            DatePrecision::HalfYear->value => 'H' . ceil($this->release_date->quarter / 2) . ' ' . $this->release_date->year,
            DatePrecision::Year->value => $this->release_date->year,

            default => 'TBA'
        };
    }
}
