<?php

namespace App\Http\Controllers\Auth;

use App\Events\Frontend\UserRegistered;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $meta_page_type = 'page';
        $designations = config('alpha.designations');
        $sign_up_as = \request()->sing_up_as ?? 'policy_holder';
        return view('auth.signup', compact('meta_page_type', 'designations','sign_up_as'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param \App\Http\Requests\LoginRequest $request
     *
     * @throws \Illuminate\Validation\ValidationException
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $rules = [
            'first_name'    => 'required|string|max:191',
            'last_name'     => 'required|string|max:191',
            'designation'   => 'required|integer',
            'employee_code' => 'required|string|max:191',
            'email'         => 'required|string|email|max:191|unique:users',
            'mobile'        => 'required|string|max:191',
            'password'      => ['required', 'confirmed', Password::min(8) ->letters()->numbers()],
            'password_confirmation' => ['required'],
        ];

        $request->validate($rules);

        $user = User::create([
            'first_name'    => $request->first_name,
            'last_name'     => $request->last_name,
            'name'          => $request->first_name.' '.$request->last_name,
            'email'         => $request->email,
            'designation'   => $request->designation,
            'employee_code' => $request->employee_code,
            'password'      => Hash::make($request->password),
        ]);

        // username
        $username = config('app.initial_username') + $user->id;
        $user->username = $username;
        $user->save();

        Auth::login($user);

//        event(new Registered($user));
//        event(new UserRegistered($user));

        return redirect(RouteServiceProvider::HOME);
    }
}
