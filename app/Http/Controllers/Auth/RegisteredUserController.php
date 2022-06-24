<?php

namespace App\Http\Controllers\Auth;

use App\Events\Frontend\UserRegistered;
use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password;
use Laracasts\Flash\Flash;

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
            'mobile'        => 'required|string|max:191',
            'password'      => ['required', 'confirmed', Password::min(8) ->letters()->numbers()],
            'password_confirmation' => ['required'],
        ];
        $data = [
            'mobile'        => $request->mobile,
            'password'      => Hash::make($request->password),
            'email_verified_at' => Carbon::now()
        ];

        if ($request->sign_up_as == 'employee') {
            $rules['employee_code'] = 'required|string|max:191|unique:users,employee_code';
            $data['employee_code']  = $request->employee_code;
        } else {
            $rules['policy_number'] = 'required|string|max:191|unique:users,policy_number';
            $data['policy_number']  = $request->policy_number;
        }

        $request->validate($rules);
        $assignRole  =  $request->sign_up_as == 'employee'  ? 'employee' : 'policy-holder';
        $role = Role::where('name',  $assignRole)->first();
        if (!$role) {
            abort(404, 'Role not found');
        }
        $user = User::create($data);
        $user->syncRoles([$assignRole]);
        $user->syncPermissions(['view_backend']);

        $username = config('app.initial_username') + $user->id;
        $user->username = $username;
        $user->save();

        Auth::login($user);

        Session::put('profileData', $request->employeeData ?? null);
        Session::put('subDesig', $request->subDesig ?? null);

//        event(new Registered($user));
//        event(new UserRegistered($user));

        Flash::success("<i class='fas fa-check'></i> Sign up successful")->important();
        return redirect('user/dashboard');
    }
}
