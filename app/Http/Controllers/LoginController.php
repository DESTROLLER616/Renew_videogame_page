<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(Request $request){
        //dd($request->all());

        $url = 'http://localhost/api/public/api/login';

        $response = Http::post($url, [
            'email' => $request -> email,
            'password' => $request -> password,
        ]);

        $body = json_decode($response -> body());

        //dd($body);

        Session::put(['auth_token' => $body->accessToken]);
        Session::put(['user' => $body->user]);

        //dd(Session::get('auth_token'));

        return redirect() -> to(url('/'));
    }
}
