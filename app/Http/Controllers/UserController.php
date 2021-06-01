<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function store(Request $request)
    {
       $fields = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $user = User::where('email',$fields['email'])->first();
        if($user){
            return response([
                'message' => 'Email already registered'
            ],401);
        }
        $request['password'] = Hash::make($request->password);

        return User::create($request->all());
    }

}
