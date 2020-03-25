<?php

namespace App\Http\Controllers;

use App\couleur;
use Illuminate\Http\Request;

class CouleurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $col=couleur::orderBy('created_at','DESC')->get();
        return view('liste_couleur',['col'=>$col]);
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
      $col=new couleur;
      $col->nom_couleur=$request->input('nom_couleur');
      $col->code_couleur=$request->input('code_couleur');
      $col->save();
      return redirect('couleur');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\couleur  $couleur
     * @return \Illuminate\Http\Response
     */
    public function show(couleur $couleur)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\couleur  $couleur
     * @return \Illuminate\Http\Response
     */
    public function edit(couleur $couleur)
    {
        $col=couleur::find($couleur->id);
        return view('modifier_couleur',['col'=>$col]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\couleur  $couleur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, couleur $couleur)
    {
        $col=couleur::find($couleur->id);
        $col->nom_couleur=$request->input('nom_couleur');
        $col->save();
        return redirect('couleur');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\couleur  $couleur
     * @return \Illuminate\Http\Response
     */
    public function destroy(couleur $couleur)
    {
        $col=couleur::find($couleur->id);
        $col->delete();
        return redirect('couleur');

    }
    public function datacol(){
        $datacol =couleur::all();
        return  response()->json($datacol);
    }
}
