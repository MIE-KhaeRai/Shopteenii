<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    // public function __construct(Request $request)
    // {
    //     // $this->middleware('guest');
    //     $this->validator($request);
    // }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(Request $request)
    {
        // dd(gettype($request));
        $request = (array)$request;
        // dd(gettype($request));
         Validator::make($request, [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required','string','max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' =>['required','string','max:10'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            // 'user_pic' => ['required','image'],
            'user_type' => ['required', 'integer' ,'max:3'],
            // 'facebook_id' =>['requird']
        ]);

        return $request;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $data)
    {
        // die('<per>'.print_r($data,1));
        // dd($data);
        // return User::create([
        //     'name' => $data['name'],
        //     'surname' => $data['surname'],
        //     'email' => $data['email'],
        //     'phone' => $data['phone'],
        //     'password' => Hash::make($data['password']),
        //     // 'user_pic' => $data['user_pic'],
        //     'user_type' => $data['user_type'],
            
        // ]);
    }

    public function store(Request $request)
    {
        
        // validate incoming request
        
        $validator = Validator::make($request->all(), [
        //    'email' => 'required|email|unique:users',
        //    'name' => 'required|string|max:50',
        //    'password' => 'required'
           'name' => ['required', 'string', 'max:255'],
           'surname' => ['required','string','max:255'],
           'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
           'phone' =>[],
           'password' => ['required','min:8'],
           // 'user_pic' => ['required','image'],
           'user_type' => ['required', 'integer' ,'max:3'],
       ]);

    //    return $validator;
        
       if ($validator->fails()) {
            // Session::flash('error', $validator->messages()->first());
            // return redirect()->back()->withInput();
            return  response()->json(['error'=> $validator->messages()->first()]);
       }
            
       // finally store our user
       return User::create([
            'name' => $request['name'],
            'surname' => $request['surname'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'password' => Hash::make($request['password']),
            // 'user_pic' => $data['user_pic'],
            'user_type' => $request['user_type'],
            
        ]);
}
}
