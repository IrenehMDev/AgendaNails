<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    public function register(RegisterRequest $request): JsonResponse
    {
        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password),
            "role_id" => 1,
        ]);

        return response()->json([
            "user" => $user,
            "access_token" => $user->createToken("access_token")->plainTextToken
        ]);
    }

    public function login(LoginRequest $request): JsonResponse
    {
        if (!auth()->attempt($request->only("email", "password"))) {
            return response()->json([
                "message" => "Invalid credentials"
            ], 401);
        }

        $user = User::where("email", $request->email)->first();

        return response()->json([
            "user" => $user,
            "access_token" => $user->createToken("access_token")->plainTextToken
        ]);
    }
}
