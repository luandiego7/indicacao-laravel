<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $data             = $request->all();
        $data['password'] = Hash::make($request->password);
        $user             = User::create($data);

        $credentials = $request->only('email', 'password');
        $token       = auth()->attempt($credentials);

        return response([
            'id'         => $user->id,
            'name'       => $user->name,
            'email'      => $user->email,
            'created_at' => $user->created_at,
            'updated_at' => $user->updated_at,
            'token'      => $token,
        ], 200);
    }
}
