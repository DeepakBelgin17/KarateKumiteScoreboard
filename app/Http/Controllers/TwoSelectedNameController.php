<?php

namespace App\Http\Controllers;
use App\Models\TwoSelectedName;
use Illuminate\Http\Request;

class TwoSelectedNameController extends Controller
{
    public function storeAndRedirectToRound3(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name111' => 'required',
            'name222' => 'required',
'id111'=>'required',
'id222'=>'required',
        ]);

        // Create a new instance of TwoSelectedName model and save the data
        $twoSelectedName = new TwoSelectedName();
        $twoSelectedName->selected_name11 = $request->input('name111');
        $twoSelectedName->selected_name22 = $request->input('name222');
        $twoSelectedName->player_id11 = $request->input('id111');
        $twoSelectedName->player_id22 = $request->input('id222');
        $twoSelectedName->category = $request->input('category');

        $twoSelectedName->save();

        return redirect()->route('showRound3', ['category' => $twoSelectedName->category]);
    }


    public function showRound3(Request $request)
    {
        $categories = TwoSelectedName::select('category')->distinct()->pluck('category');
        $selectedCategory = $request->input('category') ?? $categories->first();
        $twoSelectedNames = TwoSelectedName::where('category', $selectedCategory)->get();

        return view('round3', compact('twoSelectedNames', 'categories', 'selectedCategory'));
    }
}
