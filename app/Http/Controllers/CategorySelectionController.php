<?php

// app/Http/Controllers/CategorySelectionController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategorySelectionController extends Controller
{
    public function show()
    {
        return view('category_selection');
    }
}
