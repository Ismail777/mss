<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
Use Session;
Use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::Orderby('created_at','desc')->paginate(10);
        return view ('manage.users.index')->withUsers($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view ('manage.users.create')->withRoles($roles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {

      $this -> validate($request, [
        'name'=>'required|max:100',
        'email'=>'required|max:100|email|unique:users,email'
      ]);

      if (!empty($request->password)) {
        $password = trim($request->password);
      } else {
        # set the manual password
        $length = 10;
        $keyspace = '123456789abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ';
        $str = '';
        $max = mb_strlen($keyspace, '8bit') - 1;
        for ($i = 0; $i < $length; ++$i) {
            $str .= $keyspace[random_int(0, $max)];
        }
        $user->password = Hash::make($str);
      }

      $user = new User();
      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = Hash::make($password);



      if ($user->save()) {
        if ($request->roles) {
          $user->syncRoles(explode(',', $request->roles));
        }
        Session::flash('success','User Has Been Created.');
        return redirect()->route('users.show', $user->id);
      } else {
        Session::flash('danger', 'Sorry a problem occurred while creating this user.');
        return redirect()->route('users.create');
      }
      }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('manage.users.show')->withUser($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles = Role::all();
        $user = User::where('id',$id)->with('roles')->first();
        return view ('manage.users.edit')->withUser($user)->withRoles($roles);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

      $this -> validate($request, [
    'name'=>'required|max:100',
    'email'=>'required|max:100|email|unique:users,email,'.$id
      ]);

  $user= User::FindOrFail($id);
  $user->name=$request->name;
  $user->email=$request->email;
  if ($request->password_options=='auto') {
    $length = 10;
    $keyspace = '123456789abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ';
    $str = '';
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $str .= $keyspace[random_int(0, $max)];
    }
      Session::flash('success','Password is:'.+$str);
      $user->password = Hash::make($str);
  }
  elseif ($request->password_options=='manual') {
  $user->password= Hash::make($request->password);
  }

  $user->save();
  if ($request->roles) {
    $user->syncRoles(explode(',', $request->roles));
  }
  Session::flash('success','User Has been Updated');
//  $user->syncRoles(explode(',',$user->roles));
  return redirect()->route('users.show',$id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
