<?php
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SpecialitieController;
use App\Http\Controllers\BackhandController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\GoogleController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });
//FronendController
Route::get('/', [FrontendController::class, 'index'])->name('index');


Route::get('/dashboard', [BackhandController::class,'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
//spelistContr0ller
Route::get('Specialitie',[SpecialitieController::class,'special'])->name('specialitie');
Route::get('Add',[SpecialitieController::class,'add'])->name('add');
Route::get('special/update/{special_id}',[SpecialitieController::class,'edit']);
Route::post('supdate/special_update/{spec_id}',[SpecialitieController::class,'Updates']);
Route::get('special/delete/{special_id}',[SpecialitieController::class,'delete']);
Route::post('special/insert',[SpecialitieController::class,'insert'])->name('insert');

//userController
Route::get('user/role',[UsersController::class,'users'])->name('user.role');
Route::get('add/user',[UsersController::class,'add_user'])->name('add.user');
Route::post('user/insert',[UsersController::class,'insert'])->name('user.insert');

//prfileConter
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/change/password', [ProfileController::class, 'change_password'])->name('change.password');
Route::post('/change/information', [ProfileController::class, 'change_information'])->name('change.information');


//googleController
Route::get('google/redirect',[GoogleController::class,'redirect'])->name('google.redirect');
Route::get('google/callback',[GoogleController::class,'callback'])->name('google.callback');


require __DIR__.'/auth.php';
