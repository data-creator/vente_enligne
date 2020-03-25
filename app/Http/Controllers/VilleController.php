<?php

namespace App\Http\Controllers;
use App\pay;
use App\ville;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VilleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vil = DB::table('villes')
            ->join('pays', 'villes.pays_id', '=', 'pays.id')
            ->select('villes.*', 'pays.nom_pays')
            ->orderBy('villes.created_at','DESC')
            ->get();
             $pay=pay::all();
    //    =ville::all();
             return view('liste_ville',['vil'=>$vil,'pay'=>$pay]);
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
        $ville=new ville;
        $ville->nom_ville=$request->nom_ville;
        $ville->pays_id=$request->id_ville;
        $ville->save();
        return redirect('ville');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ville  $ville
     * @return \Illuminate\Http\Response
     */
    public function show(ville $ville)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ville  $ville
     * @return \Illuminate\Http\Response
     */
    public function edit(ville $ville)
    {

        $pay=pay::all();
        $vl=ville::find($ville->id);
        return view('modifier_ville',['vl'=>$vl,'pay'=>$pay]);



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ville  $ville
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ville $ville)
    {
        $vl=ville::find($ville->id);
        $vl->nom_ville=$request->nom_ville;
        $vl->pays_id=$request->pays_id;
        $vl->save();
        return redirect('ville');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ville  $ville
     * @return \Illuminate\Http\Response
     */
    public function destroy(ville $ville)
    {
        $vl=ville::find($ville->id);
        $vl->delete();
        return redirect('ville');

    }

    public function pays(){

        $pay=pay::all();
        $vil = DB::table('villes')->where('pays_id','=',$pay[0]->id)->get();

        return view('testajax',['pay'=>$pay,'vil'=>$vil]);
    }
     public function a(Request $request){
        $vil = DB::table('villes')->where('pays_id','=',$request->id)->get();
         return response()->json($vil);

     }



}
