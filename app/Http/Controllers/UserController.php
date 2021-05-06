<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    protected function createUser(Request $request)
    {
        $user           = new User();
        $user->name     = $request->get('name');
        $user->email    = $request->get('email');
        $user->nivel    = '2';
        $user->password = Hash::make($request->get('password'));
        $user->save();

        return Redirect::to('/');

    }
}
