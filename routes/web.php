<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ReferralController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/users/create', function () {
    return view('user.create');
});


Route::post('/users', [UserController::class, 'store']);


Route::get('/referrals/create', function () {
    return view('referral.create');
});


Route::post('/referrals', [ReferralController::class, 'store']);


Route::get('/users/{id}/referrals', [UserController::class, 'referrals']);


Route::get('/users/referrals', [UserController::class, 'fetchReferralData']);