<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\VilleController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [EtudiantController::class, 'index'])->name('etudiant.index');

Route::get('etudiant', [EtudiantController::class, 'index'])->name('etudiant.index'); // liste de tous les étudiants

Route::get('etudiant/{etudiantDetail}', [EtudiantController::class, 'show'])->name('etudiant.show');

Route::get('etudiant-create', [EtudiantController::class, 'create'])->name('etudiant.create');
Route::post('etudiant-create', [EtudiantController::class, 'store'])->name('etudiant.store');

Route::get('etudiant-edit/{etudiantDetail}', [EtudiantController::class, 'edit'])->name('etudiant.edit');
Route::put('etudiant-edit/{etudiantDetail}', [EtudiantController::class, 'update']);
Route::delete('etudiant-edit/{etudiantDetail}', [EtudiantController::class, 'destroy'])->name('etudiant.destroy');;