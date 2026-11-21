<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;



class AuthController extends Controller
{
    /**
     * Register a new user.
     */
    public function register(RegisterRequest $request): JsonResponse
    {
        // Get validated registration data
        $validatedData = $request->validated();

        // Create a new user
        $user = User::create($validatedData);

        // Return successful JSON response
        return response()->json([
            'status' => 'success',
            'message' => 'Registration successful.',
            'data' => [
                'user' => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                ],
            ],
        ], 201);
    }


public function login(LoginRequest $request)
{
    $credentials = $request->validated();

    if (! $token = Auth::guard('api')->attempt($credentials)) {
        return response()->json([
            'success' => false,
            'message' => 'Invalid email or password.',
        ], 401);
    }

    return response()->json([
        'success' => true,
        'message' => 'Login successful.',
        'data' => [
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => Auth::guard('api')->factory()->getTTL() * 60,
        ],
    ], 200);
}


}
