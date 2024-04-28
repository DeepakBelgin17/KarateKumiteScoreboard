<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;
use App\Models\Round2Result;
use App\Models\Round3Result;
use App\Models\Athlete;
use Illuminate\Support\Facades\DB;

class ResultController extends Controller
{


    public function result(Request $request)
    {
        $p1 = $request->input('player_name1');
        $p1id = $request->input('id1');
        $ps1 = $request->input('player_score1');
        $checkboxValues1 = implode(',', $request->input('checkbox_values1', []));
        $checkbox1Checked = $request->has('player1_firstscore') ? 1 : 0;

        $cat = $request->input('category');

        $p2 = $request->input('player_name2');
        $p2id = $request->input('id2');
        $ps2 = $request->input('player_score2');
        $checkboxValues2 = implode(',', $request->input('checkbox_values2', []));
        $checkbox2Checked = $request->has('player2_firstscore') ? 1 : 0;

        $model = new Result();

        $model->player_name1 = $p1;
        $model->player_id1 = $p1id; // Change 'id1' to 'player_id1'
        $model->player_score1 = $ps1;
        $model->checkbox_values1 = $checkboxValues1;
        $model->player1_firstscore = $checkbox1Checked;
        $model->category = $cat;

        $model->player_name2 = $p2;
        $model->player_id2 = $p2id; // Change 'id2' to 'player_id2'
        $model->player_score2 = $ps2;
        $model->checkbox_values2 = $checkboxValues2;
        $model->player2_firstscore = $checkbox2Checked;
        $model->save();

        echo '<script>window.history.go(-2);</script>';
    }




    public function retrieveScores(Request $request)
    {
        $category = $request->input('category');

        $scores = Result::where('category', $category)
                         ->select('player_id1', 'player_name1', 'player_id2', 'player_name2', 'player_score1', 'player_score2', 'player1_firstscore', 'player2_firstscore')
                         ->get();

        return response()->json($scores);
    }







    public function fetchResults(Request $request)
{
    $category = $request->input('category1');

    // Fetch Round 1 results
    $round1Results = Result::where('category', $category)
        ->select('player_id1', 'player_id2', 'player_name1', 'player_name2', 'player1_firstscore', 'player2_firstscore', 'player_score1', 'player_score2')
        ->get();

    // Fetch Round 2 results
    $round2Results = Round2Result::where('category', $category)
        ->select('player_id1', 'player_id2', 'player_name1', 'player_name2', 'player1_firstscore', 'player2_firstscore', 'player_score1', 'player_score2')
        ->get();

        $round3Results = Round3Result::where('category', $category)
        ->select('player_id1', 'player_id2', 'player_name1', 'player_name2', 'player1_firstscore', 'player2_firstscore', 'player_score1', 'player_score2')
        ->get();

    return response()->json(['round1' => $round1Results, 'round2' => $round2Results,'round3' => $round3Results]);
}




 }


