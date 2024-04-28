<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\Athlete;
use App\Models\ScoreboardResult;
use Illuminate\Support\Facades\Log;



class AthleteController extends Controller
{
    public function fetchAthletes(Request $request)
    {
        $category = $request->input('category');
        $athletes = Athlete::where('category', $category)->get();
        return response()->json($athletes);
    }

    public function searchAthletes(Request $request)
    {

        $searchQuery = $request->input('searchQuery');

        // Search for athletes with fields matching the search query
        $athletes = Athlete::where('name', 'like', '%' . $searchQuery . '%')
                            ->orWhere('dob', 'like', '%' . $searchQuery . '%')
                            ->orWhere('gender', 'like', '%' . $searchQuery . '%')
                            ->orWhere('weight', 'like', '%' . $searchQuery . '%')
                            ->orWhere('qualification', 'like', '%' . $searchQuery . '%')
                            ->orWhere('mobile_number', 'like', '%' . $searchQuery . '%')
                            ->orWhere('email', 'like', '%' . $searchQuery . '%')
                            ->orWhere('address', 'like', '%' . $searchQuery . '%')
                            ->orWhere('state', 'like', '%' . $searchQuery . '%')
                            ->orWhere('pincode', 'like', '%' . $searchQuery . '%')
                            ->get();

        // Return the search results as JSON response
        return response()->json($athletes);
    }

public function index()
{
    $totalRecords = Athlete::count();

    $genderCounts = Athlete::select('gender', DB::raw('COUNT(*) as count'))
                            ->groupBy('gender')
                            ->get();

    $stateCounts = Athlete::select('state', DB::raw('COUNT(*) as count'))
                            ->groupBy('state')
                            ->get();

    return view('admin.dashboard', [
        'totalRecords' => $totalRecords,
        'genderCounts' => $genderCounts,
       'stateCounts' => $stateCounts
    ]);
}


    public function edit($id)
    {
        $athlete = Athlete::findOrFail($id);
        return view('dashboard', compact('athlete'));
    }

    public function fetchData()
    {
        $categories = DB::table('athletes')
            ->select('category', DB::raw('count(*) as count'))
            ->groupBy('category')
            ->get();

        $data = [];
        foreach ($categories as $category) {
            $data[] = [
                'label' => $category->category,
                'count' => $category->count,
            ];
        }

        return response()->json(['data' => $data]);
    }





    public function update(Request $request)
{
    // Validate incoming request data
    $validatedData = $request->validate([
        'name' => 'nullable|string|max:255',
        'dob' => 'nullable|date',
        'gender' => 'nullable|string|max:10',
        'qualification' => 'nullable|string|max:255',
        'mobile_number' => 'nullable|string|max:20',
        'email' => 'nullable|email|max:255',
        'address' => 'nullable|string|max:255',
        'state' => 'nullable|string|max:255',
        'pincode' => 'nullable|string|max:20',
    ]);

    try {
        // Find the athlete by ID from the request
        $athlete = Athlete::find($request->id);

        // Check if athlete with the provided ID exists
        if (!$athlete) {
            return response()->json(['success' => false, 'message' => 'Athlete with the provided ID does not exist.'], 404);
        }

        // Update athlete model with validated data
        $athlete->fill($validatedData);
        $athlete->save();

        // Log athlete data after saving
        Log::info('Athlete After Save:', $athlete->toArray());

        // Return success response with updated athlete data
        return response()->json(['success' => true, 'message' => 'Athlete details updated successfully.', 'athlete' => $athlete]);

    } catch (\Exception $e) {
        // Log the error
        Log::error('Error updating athlete details: ' . $e->getMessage());

        // Handle other exceptions
        return response()->json(['success' => false, 'message' => 'An error occurred while updating athlete details.'], 500);
    }
}








   public function fetchWinners(Request $request)
    {
        $category = $request->input('category');
        // Fetch winners based on the selected category
        $winners = ScoreboardResult::where('category', $category)->get();
        // Return the winners data as JSON response
        return response()->json($winners);
    }



    public function getEmail(Request $request)
    {
        try {
            $playerId = $request->input('playerId'); // Retrieving playerId from the request

            $email = Athlete::where('id', $playerId)->value('email'); // Fetching the email directly

            if ($email) {
                return response()->json(['success' => true, 'email' => $email]);
            } else {
                return response()->json(['success' => false, 'error' => 'Email not found or playerId does not exist'], 404);
            }
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => 'Error fetching email'], 500);
        }
    }

}
