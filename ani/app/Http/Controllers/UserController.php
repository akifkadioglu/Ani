<?php

namespace App\Http\Controllers;

use App\Models\Remembrance;
use App\Models\RemembranceData;
use App\Models\Review;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function account($username)
    {
        $data = User::where("username", $username)->first();
        return view("myaccount", ["data" => $data]);
    }

    public function editform()
    {
        return view('user.edit');
    }
    public function edit($id)
    {
        $this->validate(request(), [
            'email' => 'required | email',
            'username' => 'required | max:20 ',
            "name" => "required | max:20",
            "password" => "required | min:5 | max:20",
        ]);

        $data = User::where('id', $id)->first();
        $data->username = request('username');
        $data->email = request('email');
        $data->name = request('name');
        $data->password = Hash::make(request('password'));
        $data->description = nl2br(request('description'));
        $data->save();
        Auth::login($data);
        return redirect()->route("account", $data->username)->with("message", "$data->name düzenlendi")->with("message_type", "success");
    }
}
