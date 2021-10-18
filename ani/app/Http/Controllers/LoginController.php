<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    // giriş ve kayıt işlemleri*********************************************************************
    public function signup()
    {
        // doğrulanma şartları 

        $this->validate(request(), [
            'email' => 'required | email | unique:users',
            'username' => 'required | max:20 | unique:users,username',
            "name" => "required | max:20",
            "password" => "required | min:5 | max:20",
        ]);


        // database'e kayıt


        $data = new User();
        $data->username = request("username");
        $data->name = request("name");
        $data->password = Hash::make(request("password"));
        $data->email = request("email");
        $data->description = request("description");
        $data->save();


        // Yönlendirme ve mesajlar


        if (Auth::attempt(["email" => request("email"), "password" => request("password")])) {
            request()->session()->regenerate();
            return redirect()->route('home')
                ->with('message', "kaydınız başarılı, Hoş geldiniz $data->name")
                ->with('message_type', 'success');
        } else {
            return redirect()->route('home')
                ->with('message', 'kaydınız başarılı değil')
                ->with('message_type', 'danger');
        }
    }
    public function signupform()
    {
        return view("user.signupform");
    }



    public function login()
    {
        $this->validate(request(), [
            "email" => "required | email",
            "password" => "required"
        ]);

        $user = User::where("email", request("email"))->first();

        if (Auth::attempt(["email" => request("email"), "password" => request("password")])) {
            request()->session()->regenerate();
            return redirect()->route('home')
                ->with('message', "$user->name Hoş geldiniz :)")
                ->with('message_type', 'success');
        } else {
            return redirect()->route('login')
                ->with('message', "Hatalı giriş denemesi")
                ->with('message_type', 'danger');
        }
    }
    public function loginform()
    {
        return view("user.loginform");
    }

    // giriş ve kayıt işlemleri*********************************************************************


    public function logout()
    {
        Auth::logout();
        request()->session()->flush();
        request()->session()->regenerate();

        return redirect()->route('home')
            ->with('message', "Çıkış yapıldı")
            ->with('message_type', 'success');
    }
}
