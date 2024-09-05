<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserInfoRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userInfo(UserInfoRequest $request)
    {
        return response()->json(['message' => 'User info received']);
    }
}
