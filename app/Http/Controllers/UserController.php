<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\UserRequest;
use App\Log;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = User::findOrFail(Auth::id());

        return view('profile', [
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request)
    {
        $user = User::findOrFail(Auth::id());
        $user->name = $request->name;
        if ($request->file('avatar')) {
            $user['avatar'] = $request->file('avatar')->store('users_avatar');
        }
        $user->save();
        return redirect()->route('profile.edit');
    }
}