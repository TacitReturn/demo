<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;
    use App\Http\Requests\RegisterRequest;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Validator;
    use App\Models\User;

    class AuthController extends Controller
    {
        public function register (RegisterRequest $request): JsonResponse
        {
            $validated = $request->validated();

            if ($validated) {
                $user = User::create($validated);
                $token = $user->createToken("auth_token")->plainTextToken;

                return response()->json([
                    "message" => "You've successfully registered for an account! Be sure to save this token, this is the only time you'll have access to it, and you will need it to access this API",
                    "user" => $user,
                    "access_token" => $token,
                ], 201);
            }

            return response()->json(["message" => "There was a problem registering. Please try again."]);
        }

        public function login (Request $request): JsonResponse
        {
            $credentials = $request->validate([
                "email" => ["required", "email"],
                "password" => ["required"],
            ]);

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return response()->json(["message" => "You've logged in successfully."]);
            }

            return response()->json(["message" => "The provided credentials do not match our records."]);
        }
    }
