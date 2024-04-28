<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SelectedName extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'selected_names';

    // Define the fillable attributes to allow mass assignment
    protected $fillable = ['id', 'selected_name11', 'selected_name22', 'selected_name33', 'selected_name44', 'category','player_id11','player_id22','player_id33','player_id44'];

}

