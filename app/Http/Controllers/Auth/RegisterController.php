<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Admin;
use App\Models\Organizer;
use App\Helper\Helper;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        if($data['role'] == '1')
        {
            return Validator::make($data, [
                'username' => ['required', 'string', 'unique:organizers'],
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:organizers'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'job' => ['required'],
                'instance' => ['required'],
                'phone' => ['required'],
                'role' => ['required'],
            ]);
        } elseif($data['role'] == '2')
        {
            return Validator::make($data, [
                'username' => ['required', 'string', 'unique:participants'],
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'job' => ['required'],
                'instance' => ['required'],
                'phone' => ['required'],
                'role' => ['required'],
            ]);
        } elseif($data['role'] == '3')
        {
            return Validator::make($data, [
                'username' => ['required', 'string', 'unique:admins'],
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'job' => ['required'],
                'instance' => ['required'],
                'phone' => ['required'],
                'role' => ['required'],
            ]);
        }

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        if($data['role'] == '1')
        {
            $user_id = Helper::IDGenerator(new Organizer, 'user_id', 5, 'ORG');
            $user  = Organizer::create([
                'user_id' => $user_id,
                'username' => $data['username'],
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'job' => $data['job'],
                'instance' => $data['instance'],
                'phone' => $data['phone'],
                'role' => $data['role']
            ]);
            $user->assignRole('organizer');
        } elseif($data['role'] == '2')
        {
            $user_id = Helper::IDGenerator(new User, 'user_id', 5, 'PRT');
            $user  = User::create([
                'user_id' => $user_id,
                'username' => $data['username'],
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'job' => $data['job'],
                'instance' => $data['instance'],
                'phone' => $data['phone'],
                'role' => $data['role']
            ]);
            $user->asssignRole('participant');

        } elseif($data['role'] == '3')
        {
            $user_id = Helper::IDGenerator(new Admin, 'user_id', 5, 'ADM');
            $user  = Admin::create([
                'user_id' => $user_id,
                'username' => $data['username'],
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'job' => $data['job'],
                'instance' => $data['instance'],
                'phone' => $data['phone'],
                'role' => $data['role']
            ]);
            $user->assignRole('admin');

        }

        return $user;
    }
}
