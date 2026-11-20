<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;

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
}
