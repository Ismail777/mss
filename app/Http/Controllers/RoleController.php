<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Permission;
use Session;

class RoleController extends Controller
{

    public function index()
    {
        $roles = Role::all();
        return view ('manage.roles.index')->withRoles($roles);
    }


    public function create()
    {
        $permissions = Permission::all();
        return view ('manage.roles.create')->withPermissions($permissions);
    }


    public function store(Request $request)
    {
        $this-> validate ($request, [
          'display_name'=>'required|max:255|unique:roles,display_name',
          'name'=>'required|alphadash|max:100|unique:roles,name',
          'description'=>'sometimes'
        ]);

        $role= new Role();
        $role->display_name = $request->display_name;
        $role->name = $request->name;
        $role->description = $request->description;

        $role->save();
        if ($request->permissions) {
          $role->syncPermissions(explode(',', $request->permissions));
        }

        Session::flash('success','The '.$role->display_name.' role has been created successfuly.');
        return redirect()->route('roles.show',$role->id);

    }


    public function show($id)
    {
        $role = Role::where('id',$id)->with('permissions')->first();
        return view ('manage.roles.show')->withRole($role);
    }


    public function edit($id)
    {
        $role = Role::where('id', $id)->with('permissions')->first();  //doing it this way to pre load permissions
        $permissions = Permission::all();
        return view ('manage.roles.edit')->withRole($role)->withPermissions($permissions);
    }


    public function update(Request $request, $id)
    {
        $this->validate ($request, [
          'display_name'=>'required|max:255',
          'description'=>'required|max:255'
        ]);

        $role = Role::findOrFail($id);
        $role->display_name = $request->display_name;
        $role->description = $request->description;

        $role->save();
        if ($request->permissions) {
          $role->syncPermissions(explode(',', $request->permissions));
        }

        Session::flash('success','The '.$role->display_name.' has been updated successfuly.');
        return redirect()->route('roles.show',$role->id);

    }

    public function destroy($id)
    {
        //
    }
}
