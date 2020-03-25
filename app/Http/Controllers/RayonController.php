<?php

namespace App\Http\Controllers;
use App\stock;
use App\rayon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RayonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( stock $stock )
    {

            $stk=stock::find($stock->id);
            $ry= DB::table('rayons')
            ->leftJoin('stocks', 'rayons.stock_id', '=', 'stocks.id')
            ->leftJoin('produits', 'produits.rayons_id', '=', 'rayons.id')
            ->leftJoin('produit_couleurs', 'produit_couleurs.produits_id', '=', 'produits.id')
            ->leftJoin('couleurs', 'produit_couleurs.couleurs_id', '=', 'couleurs.id')
            ->where('stocks.id','=',$stock->id)
            ->select('rayons.*', 'stocks.libelle_stock','produits.nom_produit','couleurs.nom_couleur','produit_couleurs.quantite_produits')
            ->orderBy('rayons.created_at','DESC')
            ->get();



        return view('rayon',['ry'=>$ry,'stk'=>$stk]);
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
         $ry=new rayon;
         $ry->stock_id=$request->input('stk_id');
         $ry->libelle_rayon=$request->input('libelle_rayon');
         $ry->save();
         return redirect("rayon/".$request->input('stk_id')."/liste");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\rayon  $rayon
     * @return \Illuminate\Http\Response
     */
    public function show(rayon $rayon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\rayon  $rayon
     * @return \Illuminate\Http\Response
     */
    public function edit(rayon $rayon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\rayon  $rayon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rayon $rayon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\rayon  $rayon
     * @return \Illuminate\Http\Response
     */
    public function destroy(rayon $rayon)
    {
        $vl=rayon::find($rayon->id);
        $vl->delete();
        return redirect("rayon/$vl->stock_id /liste");

    }
    public function list(Request $request){

        $ry_option = DB::table('rayons')->where('stock_id', '=',$request->id)->get();
        return  response()->json($ry_option);
    }
}
