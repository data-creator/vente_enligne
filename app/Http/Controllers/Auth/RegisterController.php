<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
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
    protected $redirectTo = '/home';

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
        return Validator::make($data, [
            // 'nom_user' => ['required', 'string', 'max:255'],
            // 'prenom_user' => ['required', 'string', 'max:255'],
            // 'date_nai_user' => ['required', 'string', 'max:255'],
            // 'image_user' => ['required', 'string', 'max:255'],
            // 'villes_id' => ['required', 'string', 'max:255'],
            // 'email_user' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password_user' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {



        $user =  User::create([
            'nom_user' => $data['nom'],
            'prenom_user' => $data['prenom'],
            'date_nai_user' => $data['dateNaissance'],
            'image_user' => "vbn,,,",
            'villes_id' => $data['villee'],
            'email_user' => $data['email'],
            'password_user' => Hash::make($data['password']),
        ]);


    }
}
