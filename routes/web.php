<?php

use App\Http\Controllers\BoekjaarController;
use App\Http\Controllers\ContributieController;
use App\Http\Controllers\FamilieController;
use App\Http\Controllers\FamilielidController;
use App\Http\Controllers\SoortLidController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Home/welkom pagina tonen
Route::get('/', function () {
    return view('home');
})->middleware('auth');

//---------------------------------FAMILIELEDEN ROUTES---------------------------------

//Alle familieleden (index)
Route::get('/familielid',[FamilielidController::class, 'index'])->middleware('auth');

//Toon familielid toevoegen formulier (create)
Route::get('/familielid/add', [FamilielidController::class, 'show'])->middleware('auth');

//Opslaan nieuw familielid (add)
Route::post('familielid/create', [FamilielidController::class, 'store'])->middleware('auth');

// Toon familielid bewerken formulier (edit)
Route::get('/familielid/{familielid}/edit', [FamilielidController::class, 'edit'])->middleware('auth');

// updaten nieuw familielid (update)
Route::put('/familielid/{familielid}',[FamilielidController::class, 'update'])->middleware('auth');

// Toon familielid verwijderen warning (warning)
Route::get('/familielid/{familielid}/delete', [FamilielidController::class, 'warning'])->middleware('auth');

// Verwijder familielid (delete):
Route::delete('/familielid/{familielid}',[FamilielidController::class, 'destroy'])->middleware('auth');

//---------------------------------FAMILIES ROUTES---------------------------------

//Alle families (index)
Route::get('/familie',[FamilieController::class, 'index'])->middleware('auth');

//Toon familie toevoegen formulier (create)
Route::get('/familie/add', [FamilieController::class, 'show'])->middleware('auth');

//Opslaan nieuwe familie (add)
Route::post('familie/create', [FamilieController::class, 'store'])->middleware('auth');

// Toon familielid bewerken formulier (edit)
Route::get('/familie/{familie}/edit', [FamilieController::class, 'edit'])->middleware('auth');

// updaten nieuw familielid (update)
Route::put('/familie/{familie}',[FamilieController::class, 'update'])->middleware('auth');

// Toon familie verwijderen warning (warning)
Route::get('/familie/{familie}/delete', [FamilieController::class, 'warning'])->middleware('auth');

// Verwijder familie (delete):
Route::delete('/familie/{familie}',[FamilieController::class, 'destroy'])->middleware('auth');

//---------------------------------SOORT LID ROUTES---------------------------------

//Alle soorten leden (index)
Route::get('/soort-lid',[SoortLidController::class, 'index'])->middleware('auth');

//Toon soort lid toevoegen formulier (create)
Route::get('/soort-lid/add', [SoortLidController::class, 'show'])->middleware('auth');

//Opslaan nieuwe soort lid (add)
Route::post('soort-lid/create', [SoortLidController::class, 'store'])->middleware('auth');

// Toon soort lid bewerken formulier (edit)
Route::get('/soort-lid/{soort_lid}/edit', [SoortLidController::class, 'edit'])->middleware('auth');

// updaten soort lid (update)
Route::put('/soort-lid/{soort_lid}',[SoortLidController::class, 'update'])->middleware('auth');

// Toon familie verwijderen warning (warning)
Route::get('/soort-lid/{soort_lid}/delete', [SoortLidController::class, 'warning'])->middleware('auth');

// Verwijder familie (delete):
Route::delete('/soort-lid/{soort_lid}',[SoortLidController::class, 'destroy'])->middleware('auth');

//---------------------------------CONTRIBUTIE ROUTES---------------------------------

//Alle contributies (index)
Route::get('/contributie',[ContributieController::class, 'index'])->middleware('auth');

//Toon contributie formulier (create)
Route::get('/contributie/add', [ContributieController::class, 'show'])->middleware('auth');

//Opslaan nieuwe contributie (add)
Route::post('contributie/create', [ContributieController::class, 'store'])->middleware('auth');

// Toon contributie bewerken formulier (edit)
Route::get('/contributie/{contributie}/edit', [ContributieController::class, 'edit'])->middleware('auth');

// updaten contributie (update)
Route::put('/contributie/{contributie}',[ContributieController::class, 'update'])->middleware('auth');

// Toon contributie verwijderen warning (warning)
Route::get('/contributie/{contributie}/delete', [ContributieController::class, 'warning'])->middleware('auth');

// Verwijder contributie (delete):
Route::delete('/contributie/{contributie}',[ContributieController::class, 'destroy'])->middleware('auth');

//---------------------------------BOEKJAAR ROUTES---------------------------------

//Alle boekjaren (index)
Route::get('/boekjaar',[BoekjaarController::class, 'index'])->middleware('auth');

//Toon boekjaar formulier (create)
Route::get('/boekjaar/add', [BoekjaarController::class, 'show'])->middleware('auth');

//Opslaan nieuw boekjaar (add)
Route::post('boekjaar/create', [BoekjaarController::class, 'store'])->middleware('auth');

// Toon boekjaar bewerken formulier (edit)
Route::get('/boekjaar/{boekjaar}/edit', [BoekjaarController::class, 'edit'])->middleware('auth');

// updaten boekjaar (update)
Route::put('/boekjaar/{boekjaar}',[BoekjaarController::class, 'update'])->middleware('auth');

// Toon boekjaar verwijderen warning (warning)
Route::get('/boekjaar/{boekjaar}/delete', [BoekjaarController::class, 'warning'])->middleware('auth');

// Verwijder boekjaar (delete):
Route::delete('/boekjaar/{boekjaar}',[BoekjaarController::class, 'destroy'])->middleware('auth');

//---------------------------------USERS ROUTES---------------------------------

//Alle users (index)
Route::get('/users',[UserController::class, 'index'])->middleware('auth');

//Toon user toevoegen formulier (create)
Route::get('/users/add', [UserController::class, 'show'])->middleware('auth');

//Opslaan nieuwe gebruiker (add)
Route::post('users/create', [UserController::class, 'store'])->middleware('auth');

// Toon user bewerken formulier (edit)
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->middleware('auth');

// updaten user (update)
Route::put('/users/{user}',[UserController::class, 'update'])->middleware('auth');

// Toon user verwijderen warning (warning)
Route::get('/users/{user}/delete', [UserController::class, 'warning'])->middleware('auth');

// Verwijder user (delete):
Route::delete('/users/{user}',[UserController::class, 'destroy'])->middleware('auth');

// Log user out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Show login page
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Login user
Route::post('/users/authenticate', [UserController::class, 'authenticate'])->middleware('guest');

