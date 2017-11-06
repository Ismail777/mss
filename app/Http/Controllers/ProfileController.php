<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Auth;
use App\User;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        return view ('profile.create')->withUser($user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'ic'=>'required|max:50',
          'phone_number'=>'required|max:250',
          'home_number'=>'max:250',
          'office_number'=>'max:250',
          'birthday'=>'date|max:250',
          'country'=>'required|max:255',
          'state'=>'max:255',
          'district'=>'max:255',
        ]);

        $profile = new Profile();
        $profile->ic = $request->ic;
        $profile->phone_number = $request->phone_number;
        $profile->home_number = $request->home_number;
        $profile->office_number = $request->office_number;
        $profile->birthday = $request->birthday;
        $profile->country = $request->country;
        $profile->state = $request->state;
        $profile->district = $request->district;
        $profile->pp = $request->pp;

        $profile->save();

        Session::flash('success', $user->name + 'Profile Has Been Saved');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        return view ('profile.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
