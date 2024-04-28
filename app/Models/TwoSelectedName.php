<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TwoSelectedName extends Model
{
    use HasFactory;


    protected $table = 'two_selected_names';

    // Specify the primary key of the table
    protected $primaryKey = 'id';

    // Specify the fillable columns
    protected $fillable = ['selected_name11', 'selected_name22', 'category'];

    // Timestamps
    public $timestamps = true;
}
