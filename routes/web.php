<?php
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SpecialitieController;
use App\Http\Controllers\BackhandController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorDashbord;
use App\Http\Controllers\FavouriteController;
use App\Http\Controllers\DoctorDetielController;
use Illuminate\Support\Facades\Route;


//fontend

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('doctor/profile/{id}', [FrontendController::class, 'doctor_profile'])->name('doctor.profile');
Route::get('profile/details',[FrontendController::class,'profile_detals'])->name('profile/details');
Route::get('favourit/details',[FavouriteController::class,'favourit'])->name('favourit.details');
Route::get('book/now',[FrontendController::class,'book_now'])->name('book.now');
Route::post('custom/login',[FrontendController::class,'custom_login'])->name('custom.login');
Route::get('add/to/favourite/{id}',[FrontendController::class,'add_favourite'])->name('add.favourite');

//PatientController
Route::get('profile/info',[PatientController::class,'insert'])->name('profile.insert');
Route::post('profile/create',[PatientController::class,'store'])->name('profile.store');
Route::get('profile/details/edit/{id}',[PatientController::class,'edit'])->name('profile.details.edit');
Route::post('profile/details/update/{id}',[PatientController::class,'update'])->name('profile.details.update');
Route::get('profile/change/password',[PatientController::class,'profile_change_password'])->name('profile.change.password');

//DoctordetailesController
Route::resource('doctorDetailes',DoctorDetielController::class);



//DoctorDashbord
Route::get('Doctor/dashboard',[DoctorDashbord::class,'index'])->name('doctor.dash');
Route::get('doctor/change/password',[DoctorDashbord::class,'doctor_change_password'])->name('doctor.change.password');

//Backhand

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


//DoctorController
Route::resource('doctor',DoctorController::class);
Route::post('add/user',[UsersController::class,'insert'])->name('doctor.regi');


require __DIR__.'/auth.php';
