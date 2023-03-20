<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller {
    public function register_index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application {
        return view("components.pages.auth.register");
    }

    public function register_store(Request $request): RedirectResponse {
        $validated = $request->validate([
            "fullName" => "required|min:3",
            "username" => "required|min:8|unique:users",
            "password" => "required|min:8"
        ]);

        User::create([
            "fullName" => $validated["fullName"],
            "username" => $validated["username"],
            "password" => Hash::make($validated["password"])
        ]);

        return redirect()->route("login")->with("success-register", "Registration has been successful. Please login account...");
    }

    public function login_index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application {
        return view('components.pages.auth.login');
    }

    public function login_store(Request $request): RedirectResponse {
        $credentials = $request->validate([
            "username" => "required",
            "password" => "required|min:8",
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended("/dashboard");
        }

        return back()->with("fail-login", "Account login has failed. Please check username or password...");
    }
}
