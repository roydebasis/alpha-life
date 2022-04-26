<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laracasts\Flash\Flash;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $sign_in_as = \request()->sing_in_as ?? 'policy_holder';
        if ($sign_in_as == 'administrator') {
            return view('auth.login');
        }

        return view('auth.employee_policy_holder_signin', compact('sign_in_as'));
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param \App\Http\Requests\Auth\LoginRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        $redirectTo = request()->redirectTo;

        if ($redirectTo) {
            return redirect($redirectTo);
        } else {
            return redirect(RouteServiceProvider::HOME);
        }
    }

    public function employeeLogin(Request $request)
    {
        if($request->sign_in_as == 'employee') {
            $user = User::where('employee_code', $request->employee_code)->first();
        } else {
            $user = User::where('policy_number', $request->policy_nbumber)->first();
        }

        if ($user && Hash::check( $request->password, $user->password)) {
            Auth::login($user);
            return redirect('/user/dashboard');
        }
        Flash::success("Credential does not match")->important();
        return redirect()->back();
    }

    /**
     * Destroy an authenticated session.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
