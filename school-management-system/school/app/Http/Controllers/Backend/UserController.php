<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userView(){
       // dd('view user');
        //get data
        //send data
        //$allData = User::all();
        //return view('backend.user.view_user', compact('allData'));
        $data['allData'] = User::all();
        return view('backend.user.view_user', $data);

    }

    public function addUser(){
        return view('backend.user.add_user');
    }


    public function storeUser(Request $request){

        $validatedData = $request->validate([
            'email' => 'required|unique:users',
            'name' => 'required'
        ]);//always make sure you add errors on the view otherwise it will not submit.


        //dd('method executed!!!');

        $data = new User();
        $data->usertype = $request->usertype;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();


        $notification = array(
            'message' => 'User inserted successfully',
            'alert-type' => 'success'
        );



return redirect()->route('user.view')->with($notification);

}

public function editUser($id){
        $editData = User::find($id);
    return view('backend.user.edit_user', compact('editData'));
}

public  function  updateUser(Request $request, $id){

    $data =  User::find($id);
    $data->usertype = $request->usertype;
    $data->name = $request->name;
    $data->email = $request->email;
    $data->password = bcrypt($request->password);
    $data->save();


    $notification = array(
        'message' => 'User updated successfully',
        'alert-type' => 'info'
    );



    return redirect()->route('user.view')->with($notification);

}

public function deleteUser($id){
        $data = User::find($id);
        $data->delete();

    $notification = array(
        'message' => 'User deleted successfully',
        'alert-type' => 'info'
    );



    return redirect()->route('user.view')->with($notification);

}



}
