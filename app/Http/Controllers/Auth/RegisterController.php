<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;




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

    // /**
    //  * Get a validator for an incoming registration request.
    //  *
    //  * @param  array  $data
    //  * @return \Illuminate\Contracts\Validation\Validator
    //  */
    // protected function validator(Request $request)
    // {
    //     // dd(gettype($request));
    //     $request = (array)$request;
    //     // dd(gettype($request));
    //      Validator::make($request, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'surname' => ['required','string','max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'phone' =>['required','string','max:10'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //         // 'user_pic' => ['required','image'],
    //         'user_type' => ['required', 'integer' ,'max:3'],
    //         // 'facebook_id' =>['requird']
    //     ]);

    //     return $request;
    // }

    // /**
    //  * Create a new user instance after a valid registration.
    //  *
    //  * @param  array  $data
    //  * @return \App\User
    //  */
    // public function store(Request $request)
    // {
        
    //     // validate incoming request
        
    //     $validator = Validator::make($request->all(), [
    //     //    'email' => 'required|email|unique:users',
    //     //    'name' => 'required|string|max:50',
    //     //    'password' => 'required'
    //        'name' => ['required', 'string', 'max:255'],
    //        'surname' => ['required','string','max:255'],
    //        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //        'phone' =>[],
    //        'password' => ['required','min:8'],
    //        // 'user_pic' => ['required','image'],
    //        'user_type' => ['required', 'integer' ,'max:3'],
    //    ]);

    // //    return $validator;
        
    //    if ($validator->fails()) {
    //         // Session::flash('error', $validator->messages()->first());
    //         // return redirect()->back()->withInput();
    //         return  response()->json(['error'=> $validator->messages()->first()]);
    //    }
            
    //    // finally store our user
    //    return User::create([
    //         'name' => $request['name'],
    //         'surname' => $request['surname'],
    //         'email' => $request['email'],
    //         'phone' => $request['phone'],
    //         'password' => Hash::make($request['password']),
    //         // 'user_pic' => $data['user_pic'],
    //         'user_type' => $request['user_type'],
            
    //     ]);
    // }
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
        // dd($data);
        $validator = Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required','string','max:255'],
            'email' => ['required','email', 'max:255', 'unique:users'],
            'phone' =>['required','string','max:10'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            // 'user_pic' => ['required','image'],
            'user_type' => ['required', 'integer' ,'max:3'],
            // 'facebook_id' =>['requird']
        ]);

        if ($validator->fails()) {
            // Session::flash('error', $validator->messages()->first());
            // return redirect()->back()->withInput();
            return  response()->json(['error'=> $validator->messages()->first()]);
        }else{
            // dd($data);
            return $validator;
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // dd($data);

        // PROFILE IMAGE WRITER
        // if (isset($data['profile_img'])) {
        //     $image = $data['profile_img'];
        //     $extension = $data['profile_img']->getClientOriginalExtension();
        //     $profile_name = 'profile_'.time().'.'.$extension;
        //     $location = public_path('/images/profiles/') . $profile_name;
        //     // Image::make($image)->resize(700, 350)->save($location);
        //     Image::make($image)->save($location);
        //     // $in['picture'] = $kyc_name;
        // }else{
        //   $profile_name = 'default_user.svg';
        // }

        // // KYC IMMAGE WRITER
        // if (isset($data['kyc'])) {
        //     $image = $data['kyc'];
        //     $extension = $data['kyc']->getClientOriginalExtension();
        //     $kyc_name = 'kyc_'.time().'.'.$extension;
        //     $location = public_path('/images/kyc/') . $kyc_name;
        //     // Image::make($image)->resize(700, 350)->save($location);
        //     Image::make($image)->save($location);
        //     // $in['picture'] = $kyc_name;
        // }else{
        //   $kyc_name = null;
        // }
        

        // dd($data);
        return User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
            // 'user_pic' => $data['user_pic'],
            'user_type' => $data['user_type'],
        ]);
    }






    // $mail = new \PHPMailer(true); // notice the \  you have to use root namespace here
    // try {
    //     $mail->isSMTP(); // tell to use smtp
    //     $mail->CharSet = "utf-8"; // set charset to utf8
    //     $mail->SMTPAuth = true;  // use smpt auth
    //     $mail->SMTPSecure = "tls"; // or ssl
    //     $mail->Host = "yourmailhost";
    //     $mail->Port = 2525; // most likely something different for you. This is the mailtrap.io port i use for testing. 
    //     $mail->Username = "username";
    //     $mail->Password = "password";
    //     $mail->setFrom("youremail@yourdomain.de", "Firstname Lastname");
    //     $mail->Subject = "Test";
    //     $mail->MsgHTML("This is a test");
    //     $mail->addAddress("recipient@anotherdomain.de", "Recipient Name");
    //     $mail->send();
    // } catch (phpmailerException $e) {
    //     dd($e);
    // } catch (Exception $e) {
    //     dd($e);
    // }
    // die('success');
}
