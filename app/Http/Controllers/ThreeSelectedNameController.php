<?php

namespace App\Http\Controllers;
use App\Models\ThreeSelectedName;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;
class ThreeSelectedNameController extends Controller
{




    public function storeAndRedirectToRound4(Request $request)
    {
        try {
            $request->validate([
                'name1111' => 'required',
                'category' => 'required',
                 'id1111'=>'required',
            ]);

            $threeSelectedName = new ThreeSelectedName();
            $threeSelectedName->selected_name11 = $request->input('name1111');
            $threeSelectedName->player_id11 = $request->input('id1111');
            $threeSelectedName->category = $request->input('category');
            $threeSelectedName->save();


            return response()->json(['message' => 'This Category match is over'], 200);
        }
        catch (\Exception $e) {
            Log::error('Error storing data in ThreeSelectedNameController: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to store data. Please try again.');

        }
    }

}
