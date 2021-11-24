<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Http\Requests\RegisterRequest;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Validator;
    use App\Models\User;

    class AuthController extends Controller
    {
        public function register (RegisterRequest $request)
        {
            $validated = $request->validated();

            if ($validated) {
                $user = new User;
                $user->name = $request->input("name");
                $user->email = $request->input("email");
                $user->password = $request->input("password");
                $user->save();

                $token = $user->createToken("auth_token")->plainTextToken;


                return response()->json([
                    "message" => "You've successfully registered for an account! Be sure to save this token, this is the only time you'll have access to it, and you will need it to access this API",
                    "access_token" => $token,
                ], 201);
            }

            return response("authentication failed");
        }
    }
