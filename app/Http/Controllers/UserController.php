<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user($user_id = null) {
        if ($user_id) {
            echo $user_id;
        } else {
            echo "Пользователь не зарегистрирован";
        }
    }

    public function form() {
        return view('form');
    }

    public function formPost() {
        echo "Форма принята";
    }
}
