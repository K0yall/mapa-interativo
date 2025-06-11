<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class LoginController extends Controller
{
    // Mostrar formulário de login tradicional
    public function showLoginForm()
    {
        return view('home.login');
    }

    // Login tradicional
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/Home');
        }

        return back()->withErrors([
            'email' => 'As credenciais não conferem.',
        ])->onlyInput('email');
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/Login');
    }

    // Redirecionar para o Google para login social
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Callback após login via Google
    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            // Procurar usuário pelo email
            $user = User::where('email', $googleUser->getEmail())->first();

            if (!$user) {
                // Criar usuário novo, se não existir
                $user = User::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'password' => bcrypt(str()->random(16)), // senha aleatória
                ]);
            }

            Auth::login($user, true);

            return redirect('/Home');
        } catch (\Exception $e) {
            return redirect('/Login')->withErrors(['login' => 'Erro ao autenticar com Google.']);
        }
    }
}
