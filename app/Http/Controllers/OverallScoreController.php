<?php

namespace App\Http\Controllers;

use App\Models\ThreeSelectedName;
use App\Models\TwoSelectedName;
use App\Models\SelectedName;
use App\Models\Athlete;
use Illuminate\Http\Request;

class OverallScoreController extends Controller
{
    public function show(Request $request)
    {
        $category = $request->query('category');


        $highestScoringPlayer = ThreeSelectedName::where('category', $category)->first();

        $secondHighestScoringPlayer = TwoSelectedName::where('category', $category)
    ->where(function ($query) use ($highestScoringPlayer) {
        if ($highestScoringPlayer->player_id11 && $highestScoringPlayer->selected_name11) {
            $query->where(function ($subQuery) use ($highestScoringPlayer) {
                $subQuery->where('player_id11', '!=', $highestScoringPlayer->player_id11)
                         ->orWhere('player_id22', '!=', $highestScoringPlayer->player_id11);
            })
            ->orWhere(function ($subQuery) use ($highestScoringPlayer) {
                $subQuery->where('selected_name11', '!=', $highestScoringPlayer->selected_name11)
                         ->orWhere('selected_name22', '!=', $highestScoringPlayer->selected_name11);
            });
        }
    })
    ->first();

        if ($highestScoringPlayer && $secondHighestScoringPlayer)
         {

            $stateData1 = Athlete::where('category', $category)
                ->where('id', $highestScoringPlayer->player_id11)
                ->first();

                $selectedID2 = ($secondHighestScoringPlayer->player_id11 == $highestScoringPlayer->player_id11) ? $secondHighestScoringPlayer->player_id22 : $secondHighestScoringPlayer->player_id11;


                $stateData2 = Athlete::where('category', $category)
                    ->where('id', $selectedID2)
                    ->first();


                    $selectedName2 = ($secondHighestScoringPlayer->player_id11 == $highestScoringPlayer->player_id11) ? $secondHighestScoringPlayer->selected_name22 : $secondHighestScoringPlayer->selected_name11;


                    $thirdHighestScoringPlayers = SelectedName::where('category', $category)
                    ->where(function ($query) use ($highestScoringPlayer, $selectedID2, $selectedName2) {
                        $query->where(function ($subQuery) use ($highestScoringPlayer, $selectedID2) {
                            $subQuery->where('player_id11', '!=', $highestScoringPlayer->player_id11)
                                ->where('player_id11', '!=', $selectedID2);
                        })->orWhere(function ($subQuery) use ($highestScoringPlayer, $selectedID2) {
                            $subQuery->where('player_id22', '!=', $highestScoringPlayer->player_id11)
                                ->where('player_id22', '!=', $selectedID2);
                        })->orWhere(function ($subQuery) use ($highestScoringPlayer, $selectedID2) {
                            $subQuery->where('player_id33', '!=', $highestScoringPlayer->player_id11)
                                ->where('player_id33', '!=', $selectedID2);
                        })->orWhere(function ($subQuery) use ($highestScoringPlayer, $selectedID2) {
                            $subQuery->where('player_id44', '!=', $highestScoringPlayer->player_id11)
                                ->where('player_id44', '!=', $selectedID2);
                        })->orWhere(function ($subQuery) use ($highestScoringPlayer, $selectedName2) {
                            $subQuery->where('selected_name11', '!=', $highestScoringPlayer->selected_name11)
                                ->whereNotNull('selected_name11')
                                ->where('selected_name11', '!=', $selectedName2);
                        })->orWhere(function ($subQuery) use ($highestScoringPlayer, $selectedName2) {
                            $subQuery->where('selected_name22', '!=', $highestScoringPlayer->selected_name11)
                                ->whereNotNull('selected_name22')
                                ->where('selected_name22', '!=', $selectedName2);
                        })->orWhere(function ($subQuery) use ($highestScoringPlayer, $selectedName2) {
                            $subQuery->where('selected_name33', '!=', $highestScoringPlayer->selected_name11)
                                ->whereNotNull('selected_name33')
                                ->where('selected_name33', '!=', $selectedName2);
                        })->orWhere(function ($subQuery) use ($highestScoringPlayer, $selectedName2) {
                            $subQuery->where('selected_name44', '!=', $highestScoringPlayer->selected_name11)
                                ->whereNotNull('selected_name44')
                                ->where('selected_name44', '!=', $selectedName2);
                        });
                    })
                    ->take(2) // Fetch two records
                    ->get();

            $emailMobileData1 = Athlete::select('email', 'mobile_number')
                ->where('category', $category)
                ->where('id', $highestScoringPlayer->player_id11)
                ->first();

                $emailMobileData2 = Athlete::select('email', 'mobile_number')
                ->where('category', $category)
                ->where('id', $selectedID2)
                ->first();


                $thirdHighestScoringPlayerIDs = $thirdHighestScoringPlayers->pluck('player_id')->toArray();

                $athleteData3 = Athlete::select('state', 'email', 'mobile_number')
                                    ->whereIn('id', $thirdHighestScoringPlayerIDs)
                                    ->get();



                return view('table', [
                    'highestScoringPlayer' => $highestScoringPlayer,
                    'secondHighestScoringPlayer' => $secondHighestScoringPlayer,
                    'selectedName1' => $highestScoringPlayer->selected_name11,
                    'selectedID1' => $highestScoringPlayer->player_id11,
                    'selectedName2' => ($secondHighestScoringPlayer->player_id11 == $highestScoringPlayer->player_id11) ? $secondHighestScoringPlayer->selected_name22 : $secondHighestScoringPlayer->selected_name11,
                    'selectedID2' => ($secondHighestScoringPlayer->player_id11 == $highestScoringPlayer->player_id11) ? $secondHighestScoringPlayer->player_id22 : $secondHighestScoringPlayer->player_id11,
                    'thirdHighestScoringPlayers' => $thirdHighestScoringPlayers,
                    'stateData1' => $stateData1,
                    'stateData2' => $stateData2,
                    'selectedID2' => $selectedID2,
                    'selectedName2' => $selectedName2,
                    'emailMobileData1' => $emailMobileData1,
                    'emailMobileData2' => $emailMobileData2,

                    'athleteData3' => $athleteData3,
                ]);

        } else {
            return redirect()->back()->withErrors("No record found for category: $category");
        }
    }
}
