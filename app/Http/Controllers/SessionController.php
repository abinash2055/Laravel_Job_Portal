<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view("pages.auth.login");
    }

    public function store()
    {
        // validate
        $attribute = request()->validate([
            'email'     => ['required', 'email'],
            'password'  => ['required'],
        ]);

        // attempt to login the user
        if (! Auth::attempt($attribute)) {
            throw ValidationException::withMessages([
                'email'     => "Sorry, the credintials you had entered doesn't matched."
            ]);
        };

        // regenerate the session token
        request()->session()->regenerate();

        // redirect
        return redirect('/jobs');
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
