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
                    
            public function postProcess(Request $request){
                $email = $request->input('email');
                $pass = $request->input('password');
                if(Auth::attempt(['email' => $email,'password'=> $pass])){
                       $user = Auth::user();   
                        // return $user->name;
                      if($user->name == "admin"){
                        return response()->json(['message'=>"Welcome Admin"]);
                      }
                       else if($user->name == "vendor"){
                            return response()->json(['message'=>"Welcome Vendor"]);
                       }
                            
                           else if($user->name == "customer"){
                                return response()->json(['message'=>"Welcome Customer"]);
                                }
                            
                            
                }

                else{
                    
                    return response()->json(['message'=>"Error!! Email or password Incorrect. Please try again"],400);
                }                                                  
            }
            public function logout(Request $request){
       
            }


        
    }