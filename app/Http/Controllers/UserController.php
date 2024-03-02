<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $user = Auth::user();
        $users = User::all();
        return view("admin.user.users", compact("users", 'user'));
    }
    public function create(){
        $user = Auth::user();
        return view('admin.user.addUser', compact('user'));
    }

    public function store(Request $request): RedirectResponse
{
    $data = $request->validate([
        'full_name' => 'required|unique:users|max:150|min:10',
        'user_name' => 'required|unique:users|max:150',
        'email' => 'required|max:510',
        'password' => 'required|max:15|min:8',
    ], [
        'full_name.required' => "Full name is required",
        'user_name.required' => "User name is required",
        'email.required' => "Email is required",
        'password.required' => "Password is required",
        'password.min' => "Password should be at least 8 characters long",
    ]);

    $data['active'] = $request->has('active') ? 1 : 0;
    $data['admin'] = $request->has('admin') ? 1 : 0;

    //to check if there is full_name and not empty
    if ($request->has('full_name') && !empty($request->full_name)) {
        $data['full_name'] = $request->full_name;
    }
    try {
        User::create($data);
        return redirect("Users")->with('success', 'User Added Successfully');
    } catch (\Exception $e) {
        // Log the error or handle it in another way
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }
}
}
