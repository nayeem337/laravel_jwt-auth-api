<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;

use PHPOpenSourceSaver\JWTAuth\Exceptions\JWTException;
use PHPOpenSourceSaver\JWTAuth\Exceptions\TokenBlacklistedException;
use PHPOpenSourceSaver\JWTAuth\Exceptions\TokenExpiredException;
use PHPOpenSourceSaver\JWTAuth\Exceptions\TokenInvalidException;



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


public function logout(): JsonResponse
{
    Auth::guard('api')->logout();

    return response()->json([
        'success' => true,
        'message' => 'Successfully logged out.',
    ], 200);
}



/**
 * Refresh the JWT access token.
 */
public function refresh(): JsonResponse
{
    // Check whether Bearer token exists
    if (! request()->bearerToken()) {
        return response()->json([
            'status' => 'error',
            'message' => 'Refresh token is required.',
        ], 401);
    }

    try {
        // Generate a new JWT token using the API guard
        $token = Auth::guard('api')->refresh();

        return response()->json([
            'status' => 'success',
            'message' => 'Token refreshed successfully.',
            'data' => [
                'access_token' => $token,
                'token_type' => 'Bearer',
                'expires_in' => Auth::guard('api')->factory()->getTTL() * 60,
            ],
        ], 200);

    } catch (TokenBlacklistedException $e) {
        return response()->json([
            'status' => 'error',
            'message' => 'This token is no longer valid.',
        ], 401);

    } catch (TokenExpiredException $e) {
        return response()->json([
            'status' => 'error',
            'message' => 'Token refresh period has expired.',
        ], 401);

    } catch (TokenInvalidException $e) {
        return response()->json([
            'status' => 'error',
            'message' => 'Invalid token.',
        ], 401);

    } catch (JWTException $e) {
        return response()->json([
            'status' => 'error',
            'message' => 'Unable to refresh token.',
        ], 401);
    }
}



}
