<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Round3Result extends Model
{
    use HasFactory;
    protected $fillable = ['player_name1', 'player_score1', 'checkbox_values1', 'category', 'player_name2', 'player_score2', 'checkbox_values2','player_id1','player_id2','player1_firstscore','player2_firstscore'];
    public $timestamps = false;
    protected $table = 'round3results';
}
