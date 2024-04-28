<?php

namespace App\Http\Controllers;

use App\Models\Example;
use Illuminate\Http\Request;

class ExampleController extends Controller
{

public function create()
{
return view('login');
}

public function store(Request $request)
{

$name=$request->input('input1');


$Example=new Example;

$Example->name=$name;
$Example->save();
return"user created".$Example->$name;
}

}
