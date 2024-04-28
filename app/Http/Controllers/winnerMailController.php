<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WinnerMessage; // Import the WinnerMessage mailable

class winnerMailController extends Controller
{
    public function sendMessage(Request $request)
    {
        // Retrieve data from the request (winner details)
        $winnerData = $request->all();

        // Loop through each winner and send a message
        foreach ($winnerData as $winner) {
            // Send email to the winner
            Mail::to($winner['email'])
                ->send(new WinnerMessage($winner));
        }

        return response()->json(['message' => 'Messages sent successfully']);
    }
}
