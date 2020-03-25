<?php

namespace App\Http\Controllers;

use App\type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typ=type::orderBy('created_at','DESC')->get();


        return view('liste_type',["typ"=>$typ]);
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


      $typ=new type;
      $typ->libelle_type=$request->input('libelle_type');
      $typ->save();
      return redirect('type');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\type  $type
     * @return \Illuminate\Http\Response
     */
    public function show(type $type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\type  $type
     * @return \Illuminate\Http\Response
     */
    public function edit(type $type)
    {
        $typ=type::find($type->id);
        return view('modifier_type',['typ'=>$typ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\type  $type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, type $type)
    {
        $typ=type::find($type->id);
        $typ->libelle_type=$request->libelle_type;
        $typ->save();
        return redirect('type');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy(type $type)
    {
        $typ=type::find($type->id);
        $typ->delete();
        return redirect('type');
    }
    public function listetype(){

    }
}
