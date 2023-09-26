<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback; // Replace with your Feedback model
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        // Check if the user is authenticated (logged in)
        if (!Auth::check()) {
            // User is not logged in, redirect to the login page
            return redirect()->route('login')->with('error', 'You must be logged in to submit feedback.');
        }

        // Validate the form data
        $request->validate([
            'Name' => 'required|string',
            'Rating' => 'required|integer|between:1,5',
            'Feedback' => 'required|string',
        ]);

        // Get the email of the logged-in user
        $userEmail = auth()->user()->email;

        // Create a new Feedback instance
        $feedback = new Feedback();
        $feedback->name = $request->input('Name');
        $feedback->rating = $request->input('Rating');
        $feedback->feedback = $request->input('Feedback');
        $feedback->user_email = $userEmail; // Store the user's email
        $feedback->save();

        // Redirect back with a success message or do something else
        return redirect()->back()->with('success', 'Feedback submitted successfully');
    }

    public function feedback()
    
    {
        if (!Auth::check()) {
            return view('index');
        }
    
        $user = Auth::user();
        $feedbacks = Feedback::where('user_email', $user->email)->get();
        

        return view('feedback', compact('feedbacks'));
    }
    public function feedbacks()
    
    {
        
        $feedbacks = Feedback::all();
        

        return view('admin.feedback', compact('feedbacks'));
    }

}
