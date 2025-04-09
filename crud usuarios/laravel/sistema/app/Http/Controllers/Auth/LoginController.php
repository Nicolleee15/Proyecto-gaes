<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validar datos del formulario
        $credentials = $request->validate([
            'email_usuarios' => ['required', 'email'],
            'password' => ['required', 'min:8'],
        ]);

        // Intentar autenticacion con tu modelo personalizado
        if (Auth::attempt([
            'email_usuarios' => $credentials['email_usuarios'],
            'password' => $credentials['password'],
        ])) {
            $request->session()->regenerate();

            $user = Auth::user();

            // Redireccionar segun tipo_usuario
            switch (strtolower($user->tipo_usuario)) {
                case 'administrador':
                    return redirect()->route('empleado.index')->with('mensaje', 'Bienvenido Administrador');
                case 'vendedor':
                    return redirect('/ventas')->with('status', 'Bienvenido Vendedor');
                case 'auxiliar':
                    return redirect('/inventario')->with('status', 'Bienvenido Auxiliar');
                default:
                    return redirect('/');
            }
            
        }

        // Si falla la autenticacion
        return back()->withErrors([
            'email_usuarios' => 'Las credenciales no coinciden con nuestros registros.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
