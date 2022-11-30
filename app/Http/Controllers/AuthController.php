<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request){
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'id_type_user' => $request->id_type_user,
            'password' => Hash::make($request->password),
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response() -> json(['data' => $user, 'access_token' => $token, 'token_type' => 'Bearer']);
    }

    public function login(Request $request){
        if(!Auth::attempt($request->only('email', 'password'))){
            return response() -> json(['message'=>'unauthorized'], 401);
        }

        $user = User::where('email', $request['email']) ->firstOrFail();

        $token = $user -> createToken('auth_token')->plainTextToken;

        return response() -> json([
            'message' => 'Hi '.$user->name,
            'accessToken' => $token,
            'token_type' => 'Bearer',
            'user' => $user
        ]);
    }

    public function update(Request $request){
        $user = User::find($request -> id);

            $user -> name = $request -> name;
            $user -> email = $request -> email;
            $user -> apellido_p = $request -> apellido_p;
            $user -> apellido_m = $request -> apellido_m;
            $user -> direction = $request -> direction;
            $user -> postcode = $request -> postcode;
            $user -> number_phone = $request -> number_phone;
            $user -> salario = $request -> salario;
            $user -> fecha_contratacion = $request -> fecha_contratacion;
            $user -> id_state = $request -> state;
            $user -> id_status = $request -> status;
            $user -> password = Hash::make($request -> password);

            $user -> save();

        return 'Usuario actualizado';
    }

    public function delete(Request $request){
        $user = User::find($request -> id);

        $user -> delete();

        return 'Usuario borrado';
    }
}
