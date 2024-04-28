<?php


use App\Http\Controllers\athleteregistrationcontroller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\Round2ResultsController;
use App\Http\Controllers\Round3ResultsController;
use App\Http\Controllers\AthleteController;


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\SelectedNameController;
use App\Http\Controllers\ThreeSelectedNameController;
use App\Http\Controllers\TwoSelectedNameController;

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ScoreboardResultController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::post('/register', 'athleteregistrationcontroller@registration')->name('registration.submit');

Route::get('/create', function ()
{
    return view('register_form');
});

Route::get('/register_form', function () {
    return view('register_form');
});*/


// Exclude registration routes
//Auth::routes(['register' => false]);

// Define the home route
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/category_selection', function () {
    return view('category_selection');
});

Route::get('/kumitescoreboard', function () {
    return view('index');
});

Route::get('/create', [athleteregistrationcontroller::class, 'registration_form']);
//Route::post('/register', [athleteregistrationcontroller::class, 'registration'])->name('registration.submit');
Route::post('/register', [AthleteRegistrationController::class, 'registration'])->name('register');




Route::post('/result', [ResultController::class, 'result'])->name('result');
Route::post('/fetch-scores', [ResultController::class, 'fetchScores'])->name('fetch-scores');




Route::post('/score', [ResultController::class, 'result']);






Route::post('/new', [ResultController::class, 'result']);
{

}


Route::get('/round', function ()
{
    return view('round1');
});

Route::get('/round2', function ()
{
    return view('round2');
});

Route::get('/round3', function ()
{
    return view('round3');
});



Route::get('/category', function ()
{
    return view('category_selection');
});

Route::get('/category-selection', 'CategorySelectionController@show')->name('category-selection');

/*Route::get('/cat', function ()
{
    return view('category_selection');
});*/

Route::get('/scoreboard', function ()
{
    return view('Admin_home');
});

Route::get('/alldata', [athleteregistrationcontroller::class, 'allRecords']);


Route::get('/edit/{id}', 'YourController@edit')->name('editAthlete');

Route::post('/updateAthlete', 'App\Http\Controllers\AthleteController@update')->name('updateAthlete');



//male
Route::get('/round_m45_50/{selectedValue}', [athleteregistrationcontroller::class, 'm45_50'])->name('/round_m45_50');
Route::get('/round_m51_55/{selectedValue}', [athleteregistrationcontroller::class, 'm51_55'])->name('/round_m51_55');
Route::get('/round_m56_60/{selectedValue}', [athleteregistrationcontroller::class, 'm56_60'])->name('/round_m56_60');
Route::get('/round_m61_65/{selectedValue}', [athleteregistrationcontroller::class, 'm61_65'])->name('/round_m61_65');
Route::get('/round_m66_70/{selectedValue}', [athleteregistrationcontroller::class, 'm66_70'])->name('/round_m66_70');

//female
Route::get('/round_f45_50/{selectedValue}', [athleteregistrationcontroller::class, 'f45_50'])->name('/round_f45_50');
Route::get('/round_f51_55/{selectedValue}', [athleteregistrationcontroller::class, 'f51_55'])->name('/round_f51_55');
Route::get('/round_f56_60/{selectedValue}', [athleteregistrationcontroller::class, 'f56_60'])->name('/round_f56_60');
Route::get('/round_f61_65/{selectedValue}', [athleteregistrationcontroller::class, 'f61_65'])->name('/round_f61_65');
Route::get('/round_f66_70/{selectedValue}', [athleteregistrationcontroller::class, 'f66_70'])->name('/round_f66_70');

//others
Route::get('/round_o45_50/{selectedValue}', [athleteregistrationcontroller::class, 'o45_50'])->name('/round_o45_50');
Route::get('/round_o51_55/{selectedValue}', [athleteregistrationcontroller::class, 'o51_55'])->name('/round_o51_55');
Route::get('/round_o56_60/{selectedValue}', [athleteregistrationcontroller::class, 'o56_60'])->name('/round_o56_60');
Route::get('/round_o61_65/{selectedValue}', [athleteregistrationcontroller::class, 'o61_65'])->name('/round_o61_65');
Route::get('/round_o66_70/{selectedValue}', [athleteregistrationcontroller::class, 'o66_70'])->name('/round_o66_70');




Route::get('/adminpage', function () {
    return view('loginadmin');
});

Route::get('/click', function () {

    return view('Admin_home');

});

Route::get('/click1', function () {

    return view('Admin_home1');

});

Route::get('/click2', function () {

    return view('Admin_home2');

});


Route::get('/ro2', function () {

    return view('round2');

});


Route::get('/categorySelection', function () {

    return view('Admin_home');

});

Route::get('/start', function () {

    return view('category_selection');

});

/*Route::get('/adminlogin', function () {

    return view('loginadmin');

});*/

Route::get('/go2', function () {

    return view('Admin_home');

});
Route::get('/go3', function () {

    return view('Admin_home');

});

Route::get('/go4', function () {

    return view('Admin_home');

});

Route::get('/go11', function () {

    return view('Admin_home1');

});

Route::get('/go111', function () {

    return view('Admin_home2');

});



Route::get('/go22', function () {

    return view('Admin_home1');

});
Route::get('/roun2', function () {
    return view('round2');
});


Route::get('/finalresult', function () {
    return view('resulttable');
});


Route::get('/click', function ()
{

$posts = DB::table('athletes')->where('category', 'Male - Under 45-50')->get();

return view('Admin_home', ['posts' => $posts]);
});


// routes/web.php

Route::post('/pass-data', [AthleteRegistrationController::class, 'passData'])->name('pass.data');

Route::get('/target-page', 'athleteregistrationcontroller@index');

Route::get('/fetch-data', 'ResultController@fetchData');

Route::get('/fetch-results', [ResultController::class, 'fetchResults']);

Route::get('/fetch-data1', [AthleteController::class, 'fetchData'])->name('fetch-data1');





Route::post('/dummy', [ResultController::class, 'dummy'])->name('dummy');



Route::get('/new', [ResultController::class, 'dummy']);


Route::post('/result', [ResultController::class, 'result'])->name('result');
Route::get('/some-other-method', [ResultController::class, 'someOtherMethod'])->name('some.other.method');



Route::get('/retrieve-scores', [ResultController::class, 'retrieveScores'])->name('retrieve.scores');
Route::get('/retrieve-scores1', [Round2ResultsController::class, 'retrieveScores1'])->name('retrieve.scores1');
Route::get('/retrieve-scores2', [Round3ResultsController::class, 'retrieveScores2'])->name('retrieve.scores2');


Route::post('/roun2name', [SelectedNameController::class, 'storeAndRedirectToRound2'])->name('round2name.store');
Route::get('/round2', [SelectedNameController::class, 'storeAndRedirectToRound2'])->name('round2');

Route::post('/round2name', [SelectedNameController::class, 'storeAndRedirectToRound2'])->name('round2name.store');
Route::post('/round3name', [TwoSelectedNameController::class, 'storeAndRedirectToRound3'])->name('round3name.store');

Route::post('/round4name', [ThreeSelectedNameController::class, 'storeAndRedirectToRound4'])->name('round4name.store');



Route::post('/submit-form', [ResultController::class, 'result'])->name('submit.form');
Route::post('/submit-form1', [Round2ResultsController::class, 'round2results'])->name('submit.form1');
Route::post('/submit-form2', [Round3ResultsController::class, 'round3results'])->name('submit.form2');


Route::post('/selected-names', [SelectedNameController::class, 'storeAndRedirectToRound2'])->name('selected-names.store');
Route::post('/store-and-redirect', [SelectedNameController::class, 'storeAndRedirectToRound2'])->name('store_and_redirect');
Route::post('/round1winners', [SelectedNameController::class, 'storeAndRedirectToRound2'])->name('round1winners.store');

Route::post('/store-and-redirect-to-round2', [SelectedNameController::class, 'storeAndRedirectToRound2'])->name('storeAndRedirectToRound2');
Route::post('/store-and-redirect-to-round3', [TwoSelectedNameController::class, 'storeAndRedirectToRound3'])->name('storeAndRedirectToRound3');
Route::post('/store-and-redirect-to-round4', [ThreeSelectedNameController::class, 'storeAndRedirectToRound4'])->name('storeAndRedirectToRound4');

Route::get('/show-round2', [SelectedNameController::class, 'showRound2'])->name('showRound2');
Route::get('/show-round3', [TwoSelectedNameController::class, 'showRound3'])->name('showRound3');



Route::post('/round4name/store', [ThreeSelectedNameController::class, 'storeAndRedirectToRound4'])->name('round4name.store');






Route::get('/fetch-athletes', 'App\Http\Controllers\AthleteController@fetchAthletes');
Route::get('/search-athletes', [AthleteController::class, 'searchAthletes']);





//Route::get('/athlete/{id}/edit', [AthleteController::class, 'edit'])->name('athlete.edit');
//Route::post('/athlete/{id}/update', [AthleteController::class, 'update'])->name('athlete.update');

///////  finaltable  //////

Route::match(['get', 'post'], '/overall-score', 'App\Http\Controllers\OverallScoreController@show')->name('overall-score');
Route::get('/table', 'App\Http\Controllers\OverallScoreController@show')->name('table');



Route::post('/scoreboard-results', [ScoreboardResultController::class, 'store'])->name('scoreboard.store');

Route::get('/winners/fetch', [AthleteController::class, 'fetchWinners'])->name('winners.fetch');
Route::post('/send-message', 'MessageController@sendMessage')->name('send.message');



Route::post('/winners/send-message', 'winnerMailController@sendMessage')->name('winners.send-message');






Route::get('admin/login', 'App\Http\Controllers\Auth\LoginController@showAdminLoginForm')->name('admin.login');
Route::post('admin/login', 'App\Http\Controllers\Auth\LoginController@adminLogin');


Route::get('admin/dashboard', 'App\Http\Controllers\AdminController@dashboard')->name('admin.dashboard');

Route::get('/admin/dashboard', [AthleteController::class, 'index'])->name('admin.dashboard');


Route::get('/admin/email', [AthleteController::class, 'getEmail'])->name('admin.email');

Route::post('/admin/send-message', [MessageController::class, 'sendMessage'])->name('admin.send-message');


Route::get('/fetch-results', [ResultController::class, 'fetchResults']);

//Route::post('/update-athlete', [AthleteController::class, 'update'])->name('updateAthlete');

?>




