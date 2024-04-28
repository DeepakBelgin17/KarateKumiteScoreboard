<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScoreboardResult extends Model
{
    use HasFactory;

    protected $table = 'scoreboard_results';

    protected $fillable = [
        'category',
        'player_id11',
        'player_id22',
        'player_id33',
        'player_id44',

        'name1',
        'name2',
        'name3',
        'name4',

        'position1',
        'position2',
        'position3',
        'position4',

    ];

    protected $guarded = [];
}
