<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
public function get_addUsers() {
        return view('admin.users.add_users');
    }
    public function post_addUSers(Request $request) {
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $created_at = date('Y-m-d h:i:s');
        $avatar = 'default.png';
        if ($request->hasfile('avatar')){
          $file = $request->avatar; 
          $avatar = $file->getClientOriginalName();
          $file->move('admin/uploads/users', $avatar);
        }

        DB::insert('INSERT INTO users (name, email,password, created_at, avatar) values (?, ?, ?, ?, ?)', [$name, $email, $password, $created_at, $avatar]);
        return redirect('admin/users/list_users');

    }
      public function list_users(){
        $users = DB::table('users')->get();
      return view('admin/users/list_users', ['users'=>$users]);
    }
    public function delete_users($id) {
       DB::table('users')->where('id', $id)->delete();
     return redirect()->route('list_users');
    }
    public function get_editUsers($id) {
      $users = DB::table('users')->find($id);
    // dd($users);
      return view('admin/users/edit_users', ['users'=>$users]);
    }
    public function post_editUsers($id, Request $request) {
      $users = DB::table('users')->find($id);
        $name = $request->name;
       // dd($name);
        $email = $request->email;
        $password = $request->password;
        $updated_at = date('Y-m-d h:i:s');
        $avatar = $users->avatar;
        if ($request->hasfile('avatar')){
            $file = $request->avatar; 
            $avatar = $file->getClientOriginalName();
            $file->move('admin/uploads/users', $avatar);
        }
        DB::update('UPDATE users SET name = ?, email = ?, password = ?, updated_at = ?, avatar = ? where id = ?', [$name, $email, $password, $updated_at, $avatar, $id]);
        return redirect('admin/users/list_users');
    }
}
