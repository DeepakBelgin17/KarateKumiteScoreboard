<?php

namespace App\Http\Controllers;
use App\Models\Round2Result;
use Illuminate\Http\Request;

class Round2ResultsController extends Controller
{
    public function round2results(Request $request)
    {
        $p1 = $request->input('player_name1');
        $p1id = $request->input('id1');
        $ps1 = $request->input('player_score1');
        $checkboxValues1 = implode(',', $request->input('checkbox_values1', []));
        $checkbox1Checked = $request->has('player1_firstscore') ? 1 : 0; // Check if checkbox1 is checked

        $cat = $request->input('category');

        $p2 = $request->input('player_name2');
        $p2id = $request->input('id2');
        $ps2 = $request->input('player_score2');
        $checkboxValues2 = implode(',', $request->input('checkbox_values2', []));
        $checkbox2Checked = $request->has('player2_firstscore') ? 1 : 0; // Check if checkbox2 is checked

        $model = new Round2Result();
        $model->player_name1 = $p1;
        $model->player_id1 = $p1id;
        $model->player_score1 = $ps1;
        $model->checkbox_values1 = $checkboxValues1;
        $model->player1_firstscore = $checkbox1Checked; // Store checkbox1 value
        $model->category = $cat;
        $model->player_name2 = $p2;
        $model->player_id2 = $p2id;
        $model->player_score2 = $ps2;
        $model->checkbox_values2 = $checkboxValues2;
        $model->player2_firstscore = $checkbox2Checked; // Store checkbox2 value
        $model->save();

        echo '<script>window.history.go(-2);</script>';
    }


    public function retrieveScores1(Request $request)
    {
        $category = $request->input('category');

        $scores = Round2Result::where('category', $category)
                         ->select('player_id1','player_name1', 'player_id2','player_name2', 'player_score1', 'player_score2', 'player1_firstscore', 'player2_firstscore')
                         ->get();

        return response()->json($scores);
    }
}
