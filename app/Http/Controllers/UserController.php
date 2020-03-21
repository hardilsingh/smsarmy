<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index() {
        $users = User::all();
        return view("admin.users.index" , compact("users"));
    }


    public function edit($id) {
        $user = User::findOrFail($id);
        return view("admin.users.edit" , compact('user'));
    }

    public function update(Request $request , $id) {
        $user = User::findOrFail($id);
        $user->update($request->all());
        $request->session()->flash('updated', 'Success');
        return redirect("/user");
    } 

}
