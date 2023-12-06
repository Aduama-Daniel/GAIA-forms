<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\GroupController;

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

Route::get('/', function () {
    return view('membership.extra');
});

// routes/web.php



Route::get('/form', [MembershipController::class, 'showForm'])->name('membership.form');
Route::post('/submit', [MembershipController::class, 'submitForm'])->name('membership.submit');
Route::get('/confirmation', [MembershipController::class, 'showConfirmation'])->name('membership.confirmation');


Route::get('/memberships', [MembershipController::class, 'showMemberships'])->name('membership.memberships');





Route::post('/groups/submit', [GroupController::class, 'registerGroup'])->name('groups.create');
Route::get('/groups/form', [GroupController::class, 'showForm'])->name('groups.store');
// routes/web.php



Route::get('/userform', [GroupController::class, 'getAvailableGroups'])->name('userform');


