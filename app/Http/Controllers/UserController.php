<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;


class UserController extends Controller
{
    public function users(){
        $data['getRecord'] = User::get();
        return view('admin.users.list',$data);
    }

    public function add_user(Request $request){
        return view('admin.users.add');
    }

    public function insert_add_user(Request $request){
        $save = new User;
        $save->name = $request->name;
        $save->email = $request->email;
        $save->password = Hash::make($request->password);
        $save->c_password = Hash::make($request->c_password);
        $save->is_role = $request->is_role;
               
        $save->save();

        return redirect('admin/user')->with('success', 'User successfully created');
        
    }

    public function DeleteUser($id){
        $delete = User::find($id)->Delete();
        return Redirect()->back()->with('success','User Deleted succcessfully');
     }
}
