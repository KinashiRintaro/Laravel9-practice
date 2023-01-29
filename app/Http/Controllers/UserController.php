<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegistPost;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function register(UserRegistPost $request)
    {
        // 値が正常だった場合の処理
        $name = $request->get('name');
    }
}
