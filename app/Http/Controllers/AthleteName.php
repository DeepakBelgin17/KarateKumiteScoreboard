<?php

namespace App\Http\Controllers;

use App\Models\Athlete;

class AthleteName extends Controller
{

public function index()
{
$name=Athlete::all();
return view('round1',compact('name'));
}
}
