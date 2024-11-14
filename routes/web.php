<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\referralControler;
use App\Http\Controllers\myWorksCon;
use App\Http\Controllers\contentsController;
use App\Http\Controllers\optionalWorkCon;
use App\Http\Controllers\employeeContro;
use App\Http\Controllers\contentHelperCon;
use App\Http\Controllers\memberCon;
use App\Http\Controllers\profileCon;
use App\Http\Controllers\othersProfCon;

Route::get('/', function () {
    return view('welcomee');
});

Route::get('/dashboard', function () {
    return view('dashboardd');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin-auth.php';

 
Route::get('/refGraphicalView', [referralControler::class, 'refGrapchicalView']);
Route::get('/refMembersView', [referralControler::class, 'refMembersView']);
Route::get('/refDetails', [referralControler::class, 'refDetails']);


Route::get('/myWorkView', [myWorksCon::class, 'myWorkView']);
Route::post('/workdataStor', [myWorksCon::class, 'workdataStor']);
Route::get('/optionalWorkView', [myWorksCon::class, 'optionalWorkView']);


Route::get('/uploadWorks', [contentsController::class, 'uploadWorks']);
Route::post('/uploadWorkssend', [contentsController::class, 'uploadWorksSend']);
Route::get('/workList', [contentsController::class, 'workList']);
Route::get('/workListByDay', [contentsController::class, 'workListByDay']);
Route::post('/workListByDayCheck', [contentsController::class, 'workListByDayCheckd']);
Route::get('/memberWorkingCheck', [contentsController::class, 'memberWorkingCheck']);


Route::get('/postajob', [optionalWorkCon::class, 'postajob']);
Route::post('/postajobSend', [optionalWorkCon::class, 'postajobSend']);


Route::get('/findajob', [othersProfCon::class, 'findajob']);
Route::get('/addSingleView/{id}', [othersProfCon::class, 'singaddView']);
Route::post('/otherProfsend', [othersProfCon::class, 'sendProf']);

//emplyee
Route::get('/sobemployee', [employeeContro::class, 'sobemployee']);
Route::get('/contentInspect', [employeeContro::class, 'contentInspect']);
Route::get('/memberInspect', [employeeContro::class, 'memberInspect']);

//content helper
Route::get('/contentCreator', [contentHelperCon::class, 'contentCreator']);
Route::get('/contentCheckerPost', [contentHelperCon::class, 'contentCheckerPost']);

//Members
Route::get('/allMember', [memberCon::class, 'allMember']);
Route::get('/deactiveMember', [memberCon::class, 'deactiveMember']);
Route::get('/silverMember', [memberCon::class, 'silverMember']);
Route::get('/goldMember', [memberCon::class, 'goldMember']);
Route::get('/platinumMember', [memberCon::class, 'platinumMember']);

//profile
Route::get('/userprofile', [profileCon::class, 'userprofile']);
Route::get('/Withdraw', [profileCon::class, 'Withdraw']);