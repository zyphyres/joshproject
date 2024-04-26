<?php

namespace App\Http\Controllers;

use App\Models\accountType;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        if (Auth::check()) {
            return view('dashboard.index');
        } else {
            return view('auth.index');
        }
    }

    

    public function showRegistration(){
        return view('auth.registration');
    }

    public function storeData(Request $request){
        //  dd($request);
        User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'status'=>$request->status,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/')->with('success', 'Data Submitted');

    }

    public function login(Request $request){
        // dd($request);
        $username = $request->email;
        $password = $request->password;
        
        if(Auth::attempt(['email' => $username, 'password' => $password])){
            $user = Auth::user();
            $user->accountType = accountType::find($user->status)->name;

            return redirect('dashboard')->with(['success'=>'Successfully Logged in',
                                                'user'=>$user,
                                                'accountType'=>$user->accountType]);
                                            
        }else{
            return redirect()->back()->with('error', 'Invalid credentials');
        }

    }
    public function logout(){
       Auth::logout();
       session()->flash('success','Logged out successfully!');
       return redirect('/');
    }
}
