<?php
// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Username' => 'required|string|max:255',
            'Userphone' => 'required|string|max:15',
            'Useremail' => 'required|email|max:255',
            'Usermessage' => 'required|string',
        ]);

        Contact::create($validatedData);

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
    public function index()
{
    $contacts = Contact::all(); // Assuming you have a Contact model

    return view('admin.contact', compact('contacts'));
}


public function destroy($id)
{
    // Find the feedback by ID
    $Contact = Contact::findOrFail($id);

    // Delete the feedback
    $Contact->delete();

    // Redirect back to the feedback list with a success message
    return redirect('admin/contact')->with('success', 'Feedback has been deleted successfully.');
}
}
