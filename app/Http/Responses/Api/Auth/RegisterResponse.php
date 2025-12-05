<?php

namespace App\Http\Responses\Api\Auth;

use Illuminate\Http\JsonResponse;
use Laravel\Fortify\Contracts\RegisterResponse as RegisterResponseContract;

class RegisterResponse implements RegisterResponseContract
{
    public function toResponse($request)
    {
        return new JsonResponse([
            'message' => 'User created.',
        ], 201);
    }
}
