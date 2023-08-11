<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserController extends Controller
{
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
        // La validation
        $request->validate([
            'name' => 'required',
            'role' => 'required',
            'mail' => 'required',
            'password' => 'required',
        ]);

        // L'insertion des données
        $user = User::create([
            'name' => $request->name,
            'role' => $request->role,
            'mail' => $request->mail,
            'password' => Hash::make($request->password),
            'email_verifie_le' => now(),
        ]);

        return response()->json([
            'message' => 'User added successfully',
            'user_id' => $user->id,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $param)
    {
        // Find the user by email or ID
        $user = User::where('email', $param)->orWhere('id', $param)->first();

        // Return the status of table
        if(empty($user)){
            return response()->json([
                'message' => 'Not Found'
            ]);
        } else {
            // If password is provided, check if it matches the hashed password stored in the database
            if ($request->has('password')) {
                $password = $request->input('password');
                if (Hash::check($password, $user->password)) {
                    return response()->json([
                        'message' => $user
                    ]);
                } else {
                    return response()->json([
                        'message' => 'Invalid password'
                    ]);
                }
            } else {
                return response()->json([
                    'message' => $user
                ]);
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //finding the user
        $user = User::findOrFail($id);

        // Update user's last name if provided in the request
        if ($request->has('name')) {
            $user->last_name = $request->last_name;
            // Save changes to the user's record
            $user->save();

            return response()->json([
                'message' => 'User modified successfully'
            ]);
        }

        // Update user's first name if provided in the request
        if ($request->has('name')) {
            $user->first_name = $request->first_name;
            // Save changes to the user's record
            $user->save();

            return response()->json([
                'message' => 'User modified successfully'
            ]);
        }

        // Update user's phone number if provided in the request
        if ($request->has('phone_number')) {
            $user->phone_number = $request->phone_number;
            // Save changes to the user's record
            $user->save();

            return response()->json([
                'message' => 'User modified successfully'
            ]);
        }

        // Update user's password if provided in the request
        if ($request->has('password')) {
            $user->password = Hash::make($request->password);
            // Save changes to the user's record
            $user->save();

            return response()->json([
                'message' => 'User modified successfully'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}