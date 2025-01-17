<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'prefix' => 'nullable|string|max:10',
            'firstname' => 'required|string|max:50',
            'lastname' => 'required|string|max:50',
            'role' => 'required|string|in:user,admin',
            'contact' => 'required|string|max:15',
            'email' => 'required|string|email|unique:users,email',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imagePath = null;

        if ($request->hasFile('profile_image')) {
            $imagePath = '/storage/'. $request->file('profile_image')->store('profile_images', 'public');
        }

        $pass = '';
        $register_type = '';
        if (!empty($request->input('password')))  {
            $pass = $request->input('password');
            $register_type = 'register_account';
        }else{
            $pass = $this->generateRandomString();
            $register_type = 'create_account';
        }

        $user = User::create([
            'prefix' => $request->input('prefix'),
            'name' => $request->input('firstname'),
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'role' => $request->input('role'),
            'contact' => $request->input('contact'),
            'email' => $request->input('email'),
            'password' => Hash::make($pass),
            'profile_image' => $imagePath,
            'register_type' => $register_type,
            'pass_coin' => $pass
        ]);

        return response()->json([
            'success' => true,
            'message' => 'User created successfully!',
            'user' => $user,
        ]);
    }

    public function generateRandomString() {
        $letters = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'), 0, 3);
        $numbers = str_pad(mt_rand(0, 999), 3, '0', STR_PAD_LEFT);
        return $letters . $numbers;
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $userId)
    {
        $request->validate([
            'prefix' => 'nullable|string|max:10',
            'firstname' => 'required|string|max:50',
            'lastname' => 'required|string|max:50',
            'role' => 'required|string|in:user,admin',
            'contact' => 'required|string|max:15',
            'email' => 'required|string|email|unique:users,email,' . $userId,
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $user = User::findOrFail($userId);

        $imagePath = $user->profile_image;  

        if ($request->hasFile('profile_image')) {

            $imagePath = '/storage/' . $request->file('profile_image')->store('profile_images', 'public');
        }


        $user->update([
            'prefix' => $request->input('prefix'),
            'name' => $request->input('firstname'),
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'role' => $request->input('role'),
            'contact' => $request->input('contact'),
            'email' => $request->input('email'),
            'profile_image' => $imagePath,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'User updated successfully!',
            'user' => $user,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
