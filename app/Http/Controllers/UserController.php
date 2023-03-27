<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request){
        $id = $request->id;
        $users = User::find($id);
        return view('livewire.User.user-profile', compact('users'));
    }
    public function add(Request $request){
        $id = $request->id;
        $users = User::get()->find($id);
        return view('livewire.User.user-add', compact('users', ));
    }
    public function store(Request $request){

        $data =array(
          'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
          'email' => $request->email,
          'address' => $request->address,
            'display' => $request->has('display'),
            'password' => $request->password,
            'number' => $request->number,
            'city' => $request->city,
            'ZIP' => $request->zip,
        );
//        dd($data);
        $user = User::create($data);
        return redirect()->back()->with('success', 'Update Information User complete');


    }

}
