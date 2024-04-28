<?php

namespace App\Http\Controllers;

use App\Models\Models\SelectedName;
use Illuminate\Http\Request;

class SelectedNameController extends Controller
{


    public function storeAndRedirectToRound2(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name11' => 'required',
            'name22' => 'required',
            'name33' => 'required',
            'name44' => 'required',
            'category' => 'required',
'id11'=>'required',
'id22'=>'required',
'id33'=>'required',
'id44'=>'required',
        ]);

        // Create a new instance of SelectedName model and save the data
        $selectedName = new SelectedName();
        $selectedName->player_id11 = $request->input('id11');
        $selectedName->player_id22 = $request->input('id22');
        $selectedName->player_id33 = $request->input('id33');
        $selectedName->player_id44 = $request->input('id44');
        $selectedName->selected_name11 = $request->input('name11');
        $selectedName->selected_name22 = $request->input('name22');
        $selectedName->selected_name33 = $request->input('name33');
        $selectedName->selected_name44 = $request->input('name44');
        $selectedName->category = $request->input('category'); // Save the value of the new field
        $selectedName->save();

        // Redirect to the Round2 view with the stored data and category value
        return redirect()->route('showRound2', ['category' => $selectedName->category]);
    }

    public function showRound2(Request $request)
    {
        $categories = SelectedName::select('category')->distinct()->pluck('category');
        $selectedCategory = $request->input('category') ?? $categories->first();
        $selectedNames = SelectedName::where('category', $selectedCategory)->get();

        return view('round2', compact('selectedNames', 'categories', 'selectedCategory'));
    }



}
