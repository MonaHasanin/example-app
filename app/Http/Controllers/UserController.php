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
    $user = Auth::user();
    $data = $request->validate([
        'full_name' => 'required|unique:users|max:150|min:10',
        'user_name' => 'required|unique:users|max:150',
        'email' => 'required|email|unique:users|max:510',
        'password' => 'required|max:15|min:8',
    ], [
        'full_name.required' => "Full name is required",
        'user_name.required' => "User name is required",
        'email.required' => "Email is required",
        'email.email' => "Email must be a valid email address",
        'password.required' => "Password is required",
        'password.min' => "Password should be at least 8 characters long",
    ]);

    $data['active'] = $request->has('active') ? 1 : 0;
    $data['admin'] = $request->has('admin') ? 1 : 0;

    try {
        // Check if user with the same email already exists
        $existingUser = User::where('email', $data['email'])->first();
        if ($existingUser) {
            throw new \Exception('User with this email already exists.');
        }

        // Create the user
        User::create($data);

        return redirect('Users')->with('success', 'User Added Successfully');
    } catch (\Exception $e) {
        // Log the error or handle it in another way
        return redirect()->back()->withErrors(['error' => $e->getMessage()])->withInput();
    }
}


public function edit($id)
{
    $user = User::findOrFail($id);
    return view('admin.user.editUser', compact('user'));
}

public function update(Request $request, $id): RedirectResponse
{
    $user = Auth::user();
    
    User::where('id', $id)->update([
        'full_name' => $request -> full_name ,
        'user_name' => $request -> user_name ,
        'email' => $request -> email ,
        'password' => $request -> password , 
        'active' =>  $request->has('active') ? 1 : 0 ,
        'admin' => $request->has('admin') ? 1 : 0,
    ]);
 
        return redirect('Users')->with('success', 'User Updated Successfully', compact('user'));
}



public function destroy(Request $request): RedirectResponse
{
$id = $request->id;
User::where('id', $id)->delete(); // softdelete
return redirect('Users');
}

}
