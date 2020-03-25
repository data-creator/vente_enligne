<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('registerr', function () {
    return view('register');
});

Route::resource('registration','RegistrationController');
Auth::routes();
Route::resource('commande','CommandeController');
Route::resource('commandLivree','CommandLivreeController');
Route::resource('commentaire','CommentaireController');
Route::resource('historique','HistoriqueController');
Route::resource('image','ImageController');
Route::resource('ligneCommande','LigneCommandeController');
Route::resource('livree','LivreeController');
Route::resource('pay','PayController');
Route::resource('produit','ProduitController');
Route::resource('produitrayon','ProduitRayonController');
Route::resource('rayon','RayonController');
Route::resource('rayonhistorique','RayonHistoriqueController');
Route::resource('soustype','SousTypeController');
Route::resource('stock','StockController');
Route::resource('univer','UniverController');
Route::resource('ville','VilleController');
Route::resource('type','TypeController');
Route::get('rayon/{stock}/liste','RayonController@index');
Route::get('listetype','SousTypeController@list');
Route::get('listerayon','RayonController@list');
Route::get('listvile','VilleController@a');


Route::post('up','UploadController@store');
Route::get('listecol','CouleurController@datacol');
Route::resource('home','HomeController');
Route::resource('couleur','CouleurController');
Route::get('Vetementetaccesoire/{id}','SousTypeController@listesoustype');

// Route::get('/','VilleController@pays');rayon/{rayon}
// Route::get('ola','VilleController@a');





Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
