<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\sous_type;
use App\pay;
use App\ville;
use App\image;
use App\produit_rayon;
use App\univer;
use App\stock;
use App\rayon;
use App\produit;
use App\couleur;
use App\produit_couleur;
use App\type;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pays=pay::all();
        $clr=couleur::all();
        $types=type::all();
        $stk=stock::all();
        $sante_et_bautee=DB::table('types')
        ->leftJoin('sous_types', 'sous_types.types_id', '=', 'types.id')
        ->where('types.libelle_type','sante_et_bautee')
         ->select('types.*','sous_types.*')
        ->get();
        $vetement_et_accessoire=DB::table('types')
        ->leftJoin('sous_types', 'sous_types.types_id', '=', 'types.id')
        ->where('types.libelle_type','vetement_et_accessoire')
         ->select('types.*','sous_types.*')
        ->get();
        $decoration=DB::table('types')
        ->leftJoin('sous_types', 'sous_types.types_id', '=', 'types.id')
        ->where('types.libelle_type','decoration')
         ->select('types.*','sous_types.*')
        ->get();

        $univers=univer::all();
        $mprds= DB::table('produits')
        ->leftJoin('rayons', 'rayons.id', '=', 'produits.rayons_id')
        ->leftJoin('images', 'produits.id', '=', 'images.produits_id')
        ->leftJoin('stocks', 'rayons.stock_id', '=', 'stocks.id')
        ->leftJoin('univers', 'univers.id', '=', 'produits.univers_id')
        ->leftJoin('sous_types', 'sous_types.id', '=', 'produits.sous_types_id')
        ->leftJoin('types', 'types.id', '=', 'sous_types.types_id')
        ->where('images.type_image','p')
        ->select('rayons.libelle_rayon', 'stocks.libelle_stock','produits.*','sous_types.lsotype','univers.type_univer','types.libelle_type','images.src_image')
        ->get();

        return view('site.all_produit',['pays'=>$pays,'types'=>$types,'univers'=>$univers,'sante_et_bautee'=>$sante_et_bautee,'vetement_et_accessoire'=>$vetement_et_accessoire,'decoration'=>$decoration,'mprds'=>$mprds]);
    }
}
