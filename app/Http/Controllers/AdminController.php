<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Assuming your User model is in the App namespace

class AdminController extends Controller
{
    public function userList()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function deleteUser(Request $request, $id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
        }
        return redirect()->back()->with('success', 'User deleted successfully.');
    }

    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);
        if ($user) {
            $user->role = $request->input('role'); // Assuming you have a 'role' field in your User model
            $user->save();
        }
        return redirect()->back()->with('success', 'User role updated successfully.');
    }
}
