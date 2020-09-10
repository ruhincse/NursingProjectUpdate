<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Model\User;
use Auth;
class RegistrationController extends Controller
{
    //
    public function register(Request $request){

        // dd($request->all());

        $request->validate([

            'name'=>'required',
            'mobile_no'=>'required|unique:users',
            'email'=>'required|unique:users',
            'address'=>'required',
            'password'=>'required|confirmed',
            'trems_conds'=>'required'
            ]);
            $requestData=[];
            $requestData=$request->except(['trems_conds','_token','password_confirmation','password']);
            $requestData['password']=bcrypt($request->password);

            // dd($requestData);


            if($request->trems_conds=='on'){

                $user_obj=User::create($requestData);


                if($user_obj){



                    Auth::login($user_obj);
                    Toastr::success('Your account has been Created','Success');
                    return redirect()->route('admin.dashboard');
                 
                }

                


            }

    }
}
