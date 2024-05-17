<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class,'index']);
Route::get('/all-members',[\App\Http\Controllers\HomeController::class,'seeAllMember'])->name('all.members');


Route::post('/store-member',[\App\Http\Controllers\MemberController::class,'storeMember'])->name('store.member');
Route::post('/store-user',[\App\Http\Controllers\MemberController::class,'storeUser'])->name('store.user');


Route::group(['middleware'=>'guest'],function(){
    Route::get('login',[\App\Http\Controllers\AuthController::class,'index'])->name('login');
    Route::post('login',[\App\Http\Controllers\AuthController::class,'login'])->name('login');

    Route::get('register',[\App\Http\Controllers\AuthController::class,'register_view'])->name('register');
    Route::post('register',[\App\Http\Controllers\AuthController::class,'register'])->name('register');
});

Route::middleware('save.profile.url')->group(function () {
    Route::get('/user-profile/details/{id}',[\App\Http\Controllers\MemberController::class,'userProfileDetails'])->name('userProfile.details');
});

Route::group(['middleware'=>'auth'],function(){
    Route::get('home',[\App\Http\Controllers\AuthController::class,'home'])->name('home');
    Route::get('dashboard',[\App\Http\Controllers\AuthController::class,'dashboard'])->name('dashboard')->middleware('admin');
    Route::get('users/list',[\App\Http\Controllers\AdminController::class,'userList'])->name('users.list')->middleware('admin');
    Route::post('users/status/{id}',[\App\Http\Controllers\AdminController::class,'userStatus'])->name('user.status')->middleware('admin');
    Route::get('members/list',[\App\Http\Controllers\AdminController::class,'membersList'])->name('members.list')->middleware('admin');
    Route::post('member/delete/{id}',[\App\Http\Controllers\AdminController::class,'memberDelete'])->name('member.delete')->middleware('admin');
    Route::post('member/status/{id}',[\App\Http\Controllers\AdminController::class,'memberStatus'])->name('member.status')->middleware('admin');
    Route::get('/create-member', function () {return view('admin.members.create-member');})->name('create.member');
    Route::get('/edit-member/{id}', [\App\Http\Controllers\MemberController::class,'editMember'])->name('edit.member')->middleware('admin');
    Route::get('/edit-profile/{id}', [\App\Http\Controllers\MemberController::class,'editProfile'])->name('edit.profile');
    Route::get('/profile/details/{id}',[\App\Http\Controllers\MemberController::class,'profileDetails'])->name('profile.details');
    Route::get('/user-profile/details/{id}',[\App\Http\Controllers\MemberController::class,'userProfileDetails'])->name('userProfile.details');
    Route::post('user/member/delete/{id}',[\App\Http\Controllers\MemberController::class,'userMemberDelete'])->name('userMember.delete');
    Route::get('logout',[\App\Http\Controllers\AuthController::class,'logout'])->name('logout');
});

