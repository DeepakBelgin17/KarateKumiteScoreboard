<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ScoreboardResult;

class ScoreboardResultController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'category' => 'required|string',
            'position1' => 'integer',
            'player_id11' => 'integer',
            'name1' => 'string',
            'position2' => 'integer',
            'player_id22' => 'integer',
            'name2' => 'string',
            'position3' => 'integer',
            'player_id33' => 'integer',
            'name3' => 'string',
            'position4' => 'integer',
            'player_id44' => 'integer',
            'name4' => 'string',
        ]);

        try {
            ScoreboardResult::create($data);
            return response()->json(['success' => true, 'message' => 'Scoreboard result saved successfully']);
        } catch (\Exception $e) {
            error_log('Error saving scoreboard result: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Failed to save scoreboard result: ' . $e->getMessage()]);
        }
    }
}
