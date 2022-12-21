<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeCtrl;
use App\Http\Controllers\projectCtrl;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[homeCtrl::class,'index']);

Route::get('/redirect',[homeCtrl::class,'redirectFunct']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});





#//////////////   Coordinator

#Route for button shortcut
Route::get('/view',[projectCtrl::class,'view']);

#Route to view create form
Route::get('/create',function(){
    return view('createproject');
});

#Route for going to update project form
Route::get('/updateproject/{projectname}',[projectCtrl::class,"updateproject"]);

#Route for Create Project Form
Route::POST('/add',[projectCtrl::class,"create"]);

#Route for Edit Project
Route::POST('/editproject',[projectCtrl::class,'editproject']);

#Route for delete project
Route::get('/deleteproject/{projectname}',[projectCtrl::class,'deleteproject']);





#////////////   Lecturer

#Route to view project but for sv
Route::get('/viewsv',[projectCtrl::class,'viewsv']);

#route for going to project details
Route::get('/details/{projectname}',[projectCtrl::class,'details']);

#route for going to the update project details form
Route::get('/update/{projectname}',[projectCtrl::class,'update']);

#Route for editing project details
Route::POST('/edit',[projectCtrl::class,'edit']);
