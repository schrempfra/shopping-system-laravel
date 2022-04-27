<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    
    /**
     * Display a users profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        return view('auth.settings.profile.edit', array('user' => auth()->user()));
    }
    

    /**
     * Display a users password form.
     *
     * @return \Illuminate\Http\Response
     */
    public function password()
    {
        return view('auth.settings.password.edit', array('user' => auth()->user()));
    }

    /**
     * Display a users orders.
     *
     * @return \Illuminate\Http\Response
     */
    public function orders()
    {
        return view('auth.settings.orders.edit', array('user' => auth()->user()));
    }

    /**
     * Display a users wines.
     *
     * @return \Illuminate\Http\Response
     */
    public function wines()
    {
        return view('auth.settings.wine.edit', array('user' => auth()->user()));
    }

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
