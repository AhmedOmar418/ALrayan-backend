<?php

namespace App\Traits;

trait apiResponseTrait
{
    function apiResponse($data, string $message = '', int $status = 200, $errors = null)
    {
        $response = [
            'message' => $message,
            'data' => $data
        ];

        if ($errors !== null) {
            $response['errors'] = $errors;
        }

        return response()->json($response, $status);
    }

    function loginSuccessResponse($user,$token)
    {
        return response()->json([
            'message' => 'Login successfully ketty 😍',
            'user' => $user,
            'token' => $token
        ], 200);
    }

    function loginFailedResponse()
    {
        return $this->apiResponse(null, 'Login failed check your password or email again ', 401);
    }

    function operationSuccessResponse($data)
    {
        return $this->apiResponse($data, 'Operation successful', 200);
    }

    function operationFailedResponse()
    {
        return $this->apiResponse(null, 'Operation failed', 400);
    }

}
