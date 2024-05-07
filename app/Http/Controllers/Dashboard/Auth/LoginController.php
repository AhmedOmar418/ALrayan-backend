<?php

namespace App\Http\Controllers\Dashboard\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\apiResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class LoginController extends Controller
{
    use apiResponseTrait;
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->apiResponse(null, 'Validation error', 422,$validator->errors());
        }

        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials)) {
            return $this->loginFailedResponse();
        }

        $user = User::where('email', $request->email)->first();
        $token = $user->createToken('authToken')->plainTextToken;

        return $this->loginSuccessResponse($user, $token);
    }
}
