<?php

use App\View\Components\AddSubject;
use App\Http\Controllers\Controller;
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
    // return view('welcome');
    return redirect()->route('add-subject');
});

// subject
Route::match(
    ['get', 'post'],
    '/add-subject',
    [Controller::class, 'AddSubject']
)->name('add-subject');
Route::get(
    'view-list-subeject',
    [Controller::class, 'ViewListSubject']
)->name('view-subeject');

// faculty
Route::match(
    ['get', 'post'],
    '/add-faculty',
    [Controller::class, 'AddFaculty']
)->name('add-faculty');
// Route::get('view-list-faculty',
//             [Controller::class,'ViewListFaculty']
//             )->name('view-faculty');


// faculty time table
Route::match(
    ['get', 'post'],
    '/add-faculty-time-table',
    [Controller::class, 'AddFacultyTimeTable']
)->name('add-faculty-time-table');
