<?php

use Illuminate\Support\Facades\Route;




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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', 'ControllerWelcome@welcome')->name('welcome');

Route::get('/brunch', 'ControllerBrunch@brunch')->name('brunch');
Route::get('/menu', 'ControllerMenu@menu')->name('menu');
Route::get('/supermarchés', 'ControllerSupermarchés@supermarchés')->name('supermarchés');

Route::get('/form_soupe', 'SoupeController@create')->name('form_soupe');
Route::resource('soupe',SoupeController::class);


Route::get('/form_pâtes', 'PâtesController@create')->name('form_pâtes');
Route::resource('pâtes',PâtesController::class);

Route::get('/form_viande', 'ViandeController@create')->name('form_viande');
Route::resource('viande',ViandeController::class);

Route::resource('amuses_bouches',Amuses_bouchesController::class);
Route::get('/form_amuses_bouches', 'Amuses_bouchesController@create')->name('form_amuses_bouches');
Route::post('form_amuses_bouches', 'Amuses_bouchesController@uploadVideo')->name('form_amuses_bouches');

Route::resource('bricks',BricksController::class);
Route::get('/form_bricks', 'BricksController@create')->name('form_bricks');

Route::resource('couscous',CouscousController::class);
Route::get('/form_couscous', 'CouscousController@create')->name('form_couscous');

Route::resource('crudités',CruditésController::class);
Route::get('/form_crudités', 'CruditésController@create')->name('form_crudités');

Route::resource('légumes',légumesController::class);
Route::get('/form_légumes', 'légumesController@create')->name('form_légumes');

Route::resource('oeufs',OeufsController::class);
Route::get('/form_oeufs', 'OeufsController@create')->name('form_oeufs');

Route::resource('pizzas',PizzasController::class);
Route::get('/form_pizzas', 'PizzasController@create')->name('form_pizzas');

Route::resource('poissons',PoissonsController::class);
Route::get('/form_poissons', 'PoissonsController@create')->name('form_poissons');

Route::resource('pommes_de_terres',Pommes_de_terresController::class);
Route::get('/form_pommes_de_terres', 'Pommes_de_terresController@create')->name('form_pommes_de_terres');

Route::resource('poulet',PouletController::class);
Route::get('/form_poulet', 'PouletController@create')->name('form_poulet');

Route::resource('quiches',QuichesController::class);
Route::get('/form_quiches', 'QuichesController@create')->name('form_quiches');

Route::resource('rizs',RizsController::class);
Route::get('/form_riz', 'RizsController@create')->name('form_riz');

Route::resource('sauces',SaucesController::class);
Route::get('/form_sauces', 'SaucesController@create')->name('form_sauces');

Route::resource('soupe',SoupeController::class);
Route::get('/form_soupe', 'SoupeController@create')->name('form_soupe');

Route::resource('tajines',TajinesController::class);
Route::get('/form_tajines', 'TajinesController@create')->name('form_tajines');

Route::resource('tartes',TartesController::class);
Route::get('/form_tartes', 'TartesController@create')->name('form_tartes');

Route::resource('cakes',CakesController::class);
Route::get('/form_cakes', 'CakesController@create')->name('form_cakes');

Route::resource('cheese_cakes',Cheese_cakesController::class);
Route::get('/form_cheese_cakes', 'Cheese_cakesController@create')->name('form_cheese_cakes');

Route::resource('gâteaux_au_chocolat',Gâteaux_au_chocolatsController::class);
Route::get('/form_gâteaux_au_chocolat', 'Gâteaux_au_chocolats@create')->name('form_gâteaux_au_chocolat');

Route::resource('gâteaux_maison',Gâteaux_maisonController::class);
Route::get('/form_gâteaux_maison', 'Gâteaux_maison@create')->name('form_gâteaux_maison');

Route::resource('tartes_ds',Tartes_dsController::class);
Route::get('/form_tartes_ds', 'Tartes_dsController@create')->name('form_tartes_ds');

Route::resource('biscuits_moelleux',Biscuis_moelleuxController::class);
Route::get('/form_biscuits_moelleux', 'Biscuis_moelleuxController@create')->name('form_biscuits_moelleux');

Route::resource('biscuits_secs',Biscuis_secsController::class);
Route::get('/form_biscuits_secs', 'Biscuits_secsController@create')->name('form_biscuits_secs');

Route::resource('gâteaux',GâteauxController::class);
Route::get('/form_gâteaux', 'GâteauxController@create')->name('form_gâteaux');

Route::resource('crèpes',CrèpesController::class);
Route::get('/form_crèpes', 'CrèpesController@create')->name('form_crèpes');

Route::resource('gauffres',GauffresController::class);
Route::get('/form_gauffres', 'GauffresController@create')->name('form_gauffres');

Route::resource('crèmes_et_entrements',crèmes_et_entrementsController::class);
Route::get('/form_crèmes_et_entrements', 'crèmes_et_entrementsController@create')->name('form_crèmes_et_entrements');

Route::resource('yaourts',YaourtsController::class);
Route::get('/form_yaourts', 'YaourtsController@create')->name('form_yaourts');

Route::resource('boissons',BoissonsController::class);
Route::get('/form_boissons', 'BoissonsController@create')->name('form_boissons');

Route::resource('bûche',BûcheController::class);
Route::get('/form_bûche', 'BûcheController@create')->name('form_bûche');

Route::resource('biscuits',BiscuitsController::class);
Route::get('/form_biscuits', 'BiscuitsController@create')->name('form_biscuits');

Route::resource('boissons_chaudes',Boissons_chaudesController::class);
Route::get('/form_boissons_chaudes', 'Boissons_chaudesController@create')->name('form_boissons_chaudes');

Route::resource('boissons_fraîches',Boissons_fraîchesController::class);
Route::get('/form_boissons_fraîches', 'Boissons_fraîchesController@create')->name('form_boissons_fraîches');

Route::resource('thés',ThésController::class);
Route::get('/form_thés', 'ThésController@create')->name('form_thés');

Route::resource('cafés',CafésController::class);
Route::get('/form_cafés', 'CafésController@create')->name('form_cafés');

Route::resource('jus',JusController::class);
Route::get('/form_jus', 'JusController@create')->name('form_jus');

Route::resource('pain',PainController::class);
Route::get('/form_pain', 'PainController@create')->name('form_pain');

Route::resource('smoothies',SmoothiesController::class);
Route::get('/form_smoothies', 'SmoothiesController@create')->name('form_smoothies');

Route::resource('cocktails',CocktailsController::class);
Route::get('/form_cocktails', 'CocktailsController@create')->name('form_cocktails');

Route::resource('conserves',ConservesController::class);
Route::get('/form_conserves', 'ConservesController@create')->name('form_conserves');

Route::resource('condiments',CondimentsController::class);
Route::get('/form_condiments', 'CondimentsController@create')->name('form_condiments');

Route::resource('aïd',AïdController::class);
Route::get('/form_aïd', 'AïdController@create')->name('form_aïd');

Route::resource('ramadhan',RamadhanController::class);
Route::get('/form_ramadhan', 'RamadhanController@create')->name('form_ramadhan');

Route::resource('epices',EpicesController::class);
Route::get('/form_epices', 'EpicesController@create')->name('form_epices');










