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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('index');

Route::get('/academie/add', 'AcademieController@add')->name('addacademie');
Route::get('/academie/edit/{id}', 'AcademieController@edit')->name('editacademie');
Route::post('/academie/update', 'AcademieController@update')->name('updateacademie');
Route::get('/academie/delete/{id}', 'AcademieController@delete')->name('deleteacademie');
Route::get('/academie/getAll', 'AcademieController@getAll')->name('getallacademie');
Route::post('/academie/persist', 'AcademieController@persist')->name('persistacademie');


Route::get('/examen/add', 'ExamenController@add')->name('addexamen');
Route::get('/examen/edit/{id}', 'ExamenController@edit')->name('editexamen');
Route::post('/examen/update', 'ExamenController@update')->name('updateexamen');
Route::get('/examen/delete/{id}', 'ExamenController@delete')->name('deleteexamen');
Route::get('/examen/getAll', 'ExamenController@getAll')->name('getallexamen');
Route::post('/examen/persist', 'ExamenController@persist')->name('persistexamen');

Route::get('/commission/add', 'CommissionController@add')->name('addcommission');
Route::get('/commission/edit/{id}', 'CommissionController@edit')->name('editcommission');
Route::post('/commission/update', 'CommissionController@update')->name('updatecommission');
Route::get('/commission/delete/{id}', 'CommissionController@delete')->name('deletecommission');
Route::get('/commission/getAll', 'CommissionController@getAll')->name('getallcommission');
Route::post('/commission/persist', 'CommissionController@persist')->name('persistcommission');

Route::get('/etablissement/add', 'EtablissementController@add')->name('addetablissement');
Route::get('/etablissement/edit/{id}', 'EtablissementController@edit')->name('editetablissement');
Route::post('/etablissement/update', 'EtablissementController@update')->name('updateetablissement');
Route::get('/etablissement/delete/{id}', 'EtablissementController@delete')->name('deleteetablissement');
Route::get('/etablissement/getAll', 'EtablissementController@getAll')->name('getalletablissement');
Route::post('/etablissement/persist', 'EtablissementController@persist')->name('persistetablissement');

Route::get('/centre/add', 'CentreController@add')->name('addcentre');
Route::get('/centre/edit/{id}', 'CentreController@edit')->name('editcentre');
Route::post('/centre/update', 'CentreController@update')->name('updatecentre');
Route::get('/centre/delete/{id}', 'CentreController@delete')->name('deletecentre');
Route::get('/centre/getAll', 'CentreController@getAll')->name('getallcentre');
Route::post('/centre/persist', 'CentreController@persist')->name('persistcentre');


Route::get('/jury/add', 'JuryController@add')->name('addjury');
Route::get('/jury/edit/{id}', 'JuryController@edit')->name('editjury');
Route::post('/jury/update', 'JuryController@update')->name('updatejury');
Route::get('/jury/delete/{id}', 'JuryController@delete')->name('deletejury');
Route::get('/jury/getAll', 'JuryController@getAll')->name('getalljury');
Route::post('/jury/persist', 'JuryController@persist')->name('persistjury');


Route::get('/enseignant/add', 'EnseignantController@add')->name('addenseignant');
Route::get('/enseignant/edit/{id}', 'EnseignantController@edit')->name('editenseignant');
Route::post('/enseignant/update', 'EnseignantController@update')->name('updateenseignant');
Route::get('/enseignant/delete/{id}', 'EnseignantController@delete')->name('deleteenseignant');
Route::get('/enseignant/getAll', 'EnseignantController@getAll')->name('getallenseignant');
Route::post('/enseignant/persist', 'EnseignantController@persist')->name('persistenseignant');


Route::get('/eleve/add', 'EleveController@add')->name('addeleve');
Route::get('/eleve/edit/{id}', 'EleveController@edit')->name('editeleve');
Route::post('/eleve/update', 'EleveController@update')->name('updateeleve');
Route::get('/eleve/delete/{id}', 'EleveController@delete')->name('deleteeleve');
Route::get('/eleve/getAll', 'EleveController@getAll')->name('getalleleve');
Route::post('/eleve/persist', 'EleveController@persist')->name('persisteleve');

Route::get('/inscription/add', 'InscriptionController@add')->name('addinscription');
Route::get('/inscription/edit/{id}', 'InscriptionController@edit')->name('editinscription');
Route::post('/inscription/update', 'InscriptionController@update')->name('updateinscription');
Route::get('/inscription/delete/{id}', 'InscriptionController@delete')->name('deleteinscription');
Route::get('/inscription/getAll', 'InscriptionController@getAll')->name('getallinscription');
Route::post('/inscription/persist', 'InscriptionController@persist')->name('persistinscription');

Route::get('/epreuve/add', 'EpreuveController@add')->name('addepreuve');
Route::get('/epreuve/edit/{id}', 'EpreuveController@edit')->name('editepreuve');
Route::post('/epreuve/update', 'EpreuveController@update')->name('updateepreuve');
Route::get('/epreuve/delete/{id}', 'EpreuveController@delete')->name('deleteepreuve');
Route::get('/epreuve/getAll', 'EpreuveController@getAll')->name('getallepreuve');
Route::post('/epreuve/persist', 'EpreuveController@persist')->name('persistepreuve');

Route::get('/convocation/add', 'ConvocationController@add')->name('addconvocation');
Route::get('/convocation/edit/{id}', 'ConvocationController@edit')->name('editconvocation');
Route::post('/convocation/update', 'ConvocationController@update')->name('updateconvocation');
Route::get('/convocation/delete/{id}', 'ConvocationController@delete')->name('deleteconvocation');
Route::get('/convocation/getAll', 'ConvocationController@getAll')->name('getallconvocation');
Route::post('/convocation/persist', 'ConvocationController@persist')->name('persistconvocation');

Route::get('/notes/add', 'NotesController@add')->name('addnotes');
Route::get('/notes/edit/{id}', 'NotesController@edit')->name('editnotes');
Route::post('/notes/update', 'NotesController@update')->name('updatenotes');
Route::get('/notes/delete/{id}', 'NotesController@delete')->name('deletenotes');
Route::get('/notes/getAll', 'NotesController@getAll')->name('getallnotes');
Route::post('/notes/persist', 'NotesController@persist')->name('persistnotes');



