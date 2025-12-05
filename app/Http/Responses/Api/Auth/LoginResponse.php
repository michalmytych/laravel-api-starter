<?php

namespace App\Http\Responses\Api\Auth;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
        return new JsonResponse([
            'message' => 'Logged in successfully',
            'user'    => [
                Auth::user()->getAuthIdentifierName() => Auth::user()->getAuthIdentifier()
            ],
        ], 200);
    }
}
