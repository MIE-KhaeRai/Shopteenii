<?php
        namespace App\Http\Controllers;
        use Illuminate\Routing\Controllers;
        use Illuminate\Http\Request;
        use Illuminate\Support\Facades\Auth;
        use Illuminate\Support\Facades\DB;



    class LoginController extends Controller{
        public function getIndex(){//check during logged in
            if(Auth::check()){
                if($USER_TYPE != 1){//don't be a admin
                    return redirect('/Home/index'); //continue to home page
                }
              
            }
              else{
                    return redirect('/loginPage');//Roll back to login page
                }  
        }
                    
            public function postProcess(LoginRequest $request){
                $email = $request->input('email');
                $pass = $request->input('password');
                if(Auth::attempt(['email'=> request,'password'=> request])){
                       $user = Auth::user();   
                        



                    //   if($USER_TYPE == 1){
                    //         return redirect()->intended('/admin/index');
                    //     }
                }
                else{
                    return redirect()->back()->with('message',"Error!! Email or password Incorrect. \nPlease try again");
                }                                                  
            }
            public function logout(Request $request){
       
            }


        
    }
