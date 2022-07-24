<?php

namespace App\Http\Controllers;

use App\Models\AgentAccount;
use Illuminate\Http\Request;
use App\Models\User;

class GateController extends Controller
{
    public function agents()
    {
        request()->validate([
            'fullname' => 'required|string',
            'username' => 'required|string|unique:users',
            'agent_type' => 'required',
            'password' => 'required',
            'confirm' => 'required',
            'email' => 'required',
            'phone' => 'required|numeric|unique:users',
        ]);

        if (request('password') == request('confirm')) {
            $check = User::where(['username' => request()->username])->first();

            if (!$check) {

                $agent_id = User::Create([
                    'fullname' => request('fullname'),
                    'username' => request('username'),
                    'password' => request('password'),
                    'role' => request('agent_type'),
                    'phone' => request('phone'),
                    'email' => request('email'),
                    'status' => "pending...",
                    'profile' => "profiles/avatar.jpg",
                ]);

                AgentAccount::Create([
                    'user_id' => $agent_id->id,
                    'phone' => request('phone'),
                    'profit' => "0",
                ]);

                session()->flash('approove', '');
                return redirect('/login');
            } else {

                session()->flash('agent_error', '');

                return redirect('/agent_signup');
            }
        }
    }

    public function normalUser(){

        request()->validate([
            'fullname' => 'required|string',
            'username' => 'required|string|unique:users',
            'password' => 'required',
            'confirm' => 'required',
            'email' => 'required',
            'phone' => 'required|numeric|unique:users',
        ]);

        if (request('password') == request('confirm')) {
            $check = User::where(['username' => request()->username])->first();

            if (!$check) {

                User::Create([
                    'fullname' => request('fullname'),
                    'username' => request('username'),
                    'password' => request('password'),
                    'role' => "normal_user",
                    'phone' => request('phone'),
                    'email' => request('email'),
                    'status' => "Allowed..",
                    'profile' => "profiles/avatar.jpg",
                ]);

                session()->flash('success_signup', '');
                return redirect('/login');
            } else {

                session()->flash('agent_error', '');

                return redirect('/signup');
            }
        }




    }

    public function login(){
        request()->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // checking if user exist in database
        $check = User::where(['username'=>request()->username])->first();

        // checking and redirect users to their dashboard
        if(!$check){
            
            session()->flash('login_error','');
            return redirect('/login');
        } if($check->password != request('password')){
            
            session()->flash('login_error','');
            return redirect('/login');
        }elseif($check->status == "Blocked..." || $check->status == "pending..."){
            
            session()->flash('approove','');
            return redirect('/login');

        }  elseif($check->role == "admin"){

            request()->session()->put('user',$check);
            return redirect('/dashboard');
        }
        elseif($check->role == "transport_agent" || $check->role == "house_agent" ){
            
            $profit = AgentAccount::where('user_id', $check->id)->first();

            request()->session()->put('profit',$profit);
            request()->session()->put('user',$check);
            return redirect('/dashboard');

        }elseif($check->role == "normal_user"){

            request()->session()->put('user',$check);
            return redirect('/home');

        }


    }
}
