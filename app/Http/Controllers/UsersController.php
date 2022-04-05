<?php

namespace App\Http\Controllers;

use App\Models\Supplement;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;





 public function adminAddUser(Request $request)
    {
        request()->validate([
            'full_name' => 'required|min:12|regex:/^[\pL\s]+$/u',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'phone_number' => 'required|regex:/(01)[0-9]{9}/|size:11',
            'age' => 'required|int|min:7|max:99',
            'image' => 'required|image|mimes:jpeg,png,jpg'
        ]);

        $password = Hash::make(request('password'));
        $user = new User();
        $user->name = request('full_name');
        $user->email = request('email');
        $user->password = $password;
        $user->phone_number = request('phone_number');
        $user->age = request('age');
        $user->type = "3";

        $image = request('full_name') . "_" . time() . "." . $request->image->extension();
        $user->image = "images/users/" . $image;

        if (request()->image->move(public_path('/images/users/'), $image)) {
            if ($user->save()) {
                return redirect('/addmember')->with('addmessage', 'Member added successfully.');
            } else {
                return redirect('/addmember')->with('addmessage', 'Error adding member, please try again.');
            }
        } else {
            return redirect('/addmember')->with('addmessage', 'Error uploading photo please try again.');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

 public function addSupplement(Request $request)
    {
        request()->validate([
            'protein_name' => 'required|min:6|regex:/^[\pL\s]+$/u',
            'protein_description' => 'required|min:6',
            'protein_price' => 'required|int|min:1',
            'image' => 'required|image|mimes:jpeg,png,jpg'
        ]);

        $supplement = new Supplement();

        $supplement->name = request('protein_name');
        $supplement->description = request('protein_description');
        $supplement->price = request('protein_price');

        $image = request('protein_name') . "_" . time() . "." . $request->image->extension();
        $supplement->image = "images/supplements/" . $image;

        if (request()->image->move(public_path('/images/supplements/'), $image)) {
            if ($supplement->save()) {
                return redirect('/addsupplement')->with('addmessage', 'Supplement Added Successfully.');
            } else {
                return redirect('/addsupplement')->with('addmessage', 'Error adding, please try again.');
            }
        } else {
            return redirect('/addsupplement')->with('addmessage', 'Error uploading photo please try again.');
        }
    }
}
