<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\User;


class UserController extends Controller
{
    //
    public function index(){

    	$user = User::all();

    	return view('admin.user.index', compact('user'));

    }

    public function add(Request $request){
    	
    	

    	return redirect()->with('success', 'User added');

    }

    public function update(Request $request, $id){

    	User::findOrFail($id)->update([
    		'name' => $request->name,
    		'username' => $request->username,
    		'password' => Hash::make($request->password),
    		'email' => $request->email

    	]);

    	return redirect()->back()->with('success', 'User updated');

    }

    public function delete($id){

    	User::findOrFail($id)->delete();

    	return redirect()->back()->with('success', 'User deleted');

    }


    // Android REST API for sabo
    public function createUser(Request $request){

        $user = User::create([
            'name' => $request['name'],
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return response()->json($user);

    }

    public function updateUser(Request $request, $id){

        $user = User::findOrFail($id)->update([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'email' => $request->email

        ]);

        $response["users"] = $user;
        $response["success"] = 1;

        return response()->json($response);

    }

    public function deleteUser($id){

        User::findOrFail($id)->delete();

        return response()->json('User removed successfully');

    }

    public function getUser(){

        $user = User::all();

        $response["users"] = $user;
        $response["success"] = 1;

        return response()->json($response);

    }

}
