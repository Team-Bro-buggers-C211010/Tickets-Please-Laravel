<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApiLoginRequest;
use App\Traits\ApiResponses;

class AuthController extends Controller
{
    use ApiResponses;
    public function login(ApiLoginRequest $request) {
        $validated = $request->validated();
        return $this->ok($validated['email']);
    }

    public function register() {
        return $this->ok('register');
    }
}
