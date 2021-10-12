<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ConfirmsPasswords;

class UserController extends Controller
{
    public function showUserName(){
        return 'Alaa Al Hasan';
    }

    public function getIndex(){
        return view('welcome');
    }
}
