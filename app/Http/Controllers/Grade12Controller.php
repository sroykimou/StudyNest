<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Grade12Controller extends Controller
{
    public function profile()
    {
        return view('grade12.profile', [
            'user' => Auth::user()
        ]);
    }

    public function pay()
    {
        return view('grade12.pay', [
            'user' => Auth::user()
        ]);
    }

    public function adminPanel()
    {
        $user = Auth::user();

        if (!$user || !$user->is_admin) {
            abort(403, 'Unauthorized access.');
        }

        return view('grade12.admin_panel', [
            'user' => $user
        ]);
    }
}
