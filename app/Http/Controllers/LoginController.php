<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function retrieve(Request $request){
        $user = DB::table('users')->where('email','=',$request->input('email'))->where('password','=',$request->input('password'))->first();
        if($user==null){
            return redirect('login');
        }else{
            session(['user'=>$user]);
            if($user->email == 'admin@admin.com'){
                return redirect('admin/index');
            }
            return redirect('notes');
        }
        
    }
}
