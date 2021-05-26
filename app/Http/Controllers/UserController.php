<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function store(Request $request)
    {
        $request['password'] = Hash::make($request->password);

        return User::create($request->all());
    }

}
