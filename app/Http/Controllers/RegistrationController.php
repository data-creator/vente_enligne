<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\registration;
use Illuminate\Http\Request;
use App\User;
use App\ville;
class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('register');
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

      $a=new User;
      $a->nom=$request->nom;
      $a->prenom_user=$request->prenom;
      $a->email_user=$request->email;
      $a->date_nai_user=$request->date;
      $a->password_user=bcrypt($request->password);
      $a->image_user="bbvj";
      $a->villes_id="1";
      $a->save();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function show(registration $registration)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function edit(registration $registration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, registration $registration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function destroy(registration $registration)
    {
        //
    }
}
