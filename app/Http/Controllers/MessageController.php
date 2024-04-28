<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function sendMessage(Request $request)
    {
        $email = $request->input('recipientEmail'); // Corrected to 'recipientEmail'
        $message = $request->input('message');

        // Use Laravel's built-in Mail class to send the email
        try {
            Mail::raw($message, function ($mail) use ($email) {
                $mail->to($email);
                $mail->subject('Congratulations!');
            });

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false]);
        }
    }
}

