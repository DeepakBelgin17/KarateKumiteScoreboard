<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThreeSelectedName extends Model
{
    use HasFactory;
    protected $table = 'three_selected_names';

    protected $fillable = ['selected_name11', 'category','player_id11'];
}
