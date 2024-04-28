<?php

namespace App\Http\Controllers;
use App\Models\Athlete;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class athleteregistrationcontroller extends Controller
{

public function registration_form()
{
    return view('register_form');
}

public function registration(Request $request)
{
    $name = $request->input('name');
    $dob = $request->input('dob');
    $gender = $request->input('gender');
    $weight = $request->input('weight');
    $category = $request->input('category');
    $qualification = $request->input('qualification');
    $mobile_number = $request->input('mobile_number');
    $email = $request->input('email');
    $address = $request->input('address');
    $state = $request->input('state');
    $pincode = $request->input('pincode');

    // Get the count of existing records for the given category
    $existingCount = Athlete::where('category', $category)->count();

    // Check if the total count of existing records is less than 8
    if ($existingCount < 8) {
        // Insert a new record into the database
        DB::insert("insert into athletes (name, dob, gender, weight, category, qualification, mobile_number, email, address, state, pincode) values(?,?,?,?,?,?,?,?,?,?,?)", [
            $name, $dob, $gender, $weight, $category, $qualification, $mobile_number, $email, $address, $state, $pincode ]);

        echo '<script>alert("Registration completed\nAll the best for your match!!!");</script>';
    } else {
        echo '<script>alert("Maximum registration limit reached for this category. Registration over.");</script>';
    }

    return view('register_form');
}





//all data

public function allRecords()
{
$ath=Athlete::all();
$m45 = Athlete::where('category', 'Male - Under 45-50')->get();
$m51 = Athlete::where('category', 'Male - Under 51-55')->get();
$m56 = Athlete::where('category', 'Male - Under 56-60')->get();
$m61 = Athlete::where('category', 'Male - Under 61-65')->get();
$m66 = Athlete::where('category', 'Male - Under 66-70')->get();
$f45 = Athlete::where('category', 'Female - Under 45-50')->get();
$f51 = Athlete::where('category', 'Female - Under 51-55')->get();
$f56 = Athlete::where('category', 'Female - Under 56-60')->get();
$f61 = Athlete::where('category', 'Female - Under 61-65')->get();
$f66 = Athlete::where('category', 'Female - Under 66-70')->get();
$o45 = Athlete::where('category', 'other - Under 45-50')->get();
$o51 = Athlete::where('category', 'other - Under 51-55')->get();
$o56 = Athlete::where('category', 'other - Under 56-60')->get();
$o61 = Athlete::where('category', 'other - Under 61-65')->get();
$o66 = Athlete::where('category', 'other - Under 66-70')->get();

return view('allathletedata', compact('ath', 'm45','m51','m56','m61','m66','f45','f51','f56','f61','f66','o45','o51','o56','o61','o66'));

}


public function m45_50()
{
    $posts = DB::table('athletes')->where('category', 'Male - Under 45-50')->get();

    return view('round1', ['posts' => $posts]);
}



public function m51_55()
{
    $posts = DB::table('athletes')->where('category', 'Male - Under 51-55')->get();

    return view('round1', ['posts' => $posts]);
}

public function m56_60()
{
    $posts = DB::table('athletes')->where('category', 'Male - Under 56-60')->get();

    return view('round1', ['posts' => $posts]);
}

public function m61_65()
{
    $posts = DB::table('athletes')->where('category', 'Male - Under 61-65')->get();

    return view('round1', ['posts' => $posts]);
}

public function m66_70()
{
    $posts = DB::table('athletes')->where('category', 'Male - Under 66-70')->get();

    return view('round1', ['posts' => $posts]);
}
///////////////////
public function f45_50()
{
    $posts = DB::table('athletes')->where('category', 'Female - Under 45-50')->get();

    return view('round1', ['posts' => $posts]);
}

public function f51_55()
{
    $posts = DB::table('athletes')->where('category', 'Female - Under 51-55')->get();

    return view('round1', ['posts' => $posts]);
}

public function f56_60()
{
    $posts = DB::table('athletes')->where('category', 'Female - Under 56-60')->get();

    return view('round1', ['posts' => $posts]);
}

public function f61_65()
{
    $posts = DB::table('athletes')->where('category', 'Female - Under 61-65')->get();

    return view('round1', ['posts' => $posts]);
}

public function f66_70()
{
    $posts = DB::table('athletes')->where('category', 'Female - Under 66-70')->get();

    return view('round1', ['posts' => $posts]);
}

/////////////////////
public function o45_50()
{
    $posts = DB::table('athletes')->where('category', 'Transgender - Under 45-50')->get();

    return view('round1', ['posts' => $posts]);
}

public function o51_55()
{
    $posts = DB::table('athletes')->where('category', 'Transgender - Under 51-55')->get();

    return view('round1', ['posts' => $posts]);
}

public function o56_60()
{
    $posts = DB::table('athletes')->where('category', 'Transgender - Under 56-60')->get();

    return view('round1', ['posts' => $posts]);
}

public function o61_65()
{
    $posts = DB::table('athletes')->where('category', 'Transgender - Under 61-65')->get();

    return view('round1', ['posts' => $posts]);
}

public function o66_70()
{
    $posts = DB::table('athletes')->where('category', 'Transgender - Under 66-70')->get();

    return view('round1', ['posts' => $posts]);
}
/////////////////////////

public function passData(Request $request)
    {
        $data = $request->input('data');
        return view('Admin_home')->with('data', $data);
    }



    public function index(Request $request)
    {
        $name1 = $request->query('name1');
        $name2 = $request->query('name2');

        return view('Admin_home', compact('name1', 'name2'));
    }

    public function score(Request $request)
    {

    $name=$request->input('name');
    $score=$request->input('score');


     DB::insert("insert into score (name,score) values(?,?)",[$name,$score]);
    echo '<script>alert("Details get stored succesfully!!!");</script>';
    return view('round1');
    }


}


















