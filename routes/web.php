<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/accounts', [App\Http\Controllers\AccountsController::class, 'index'])->name('accounts');
Route::get('/request', [App\Http\Controllers\RequestController::class, 'index'])->name('request');
Route::get('/liturgical', [App\Http\Controllers\LiturgicalController::class, 'index'])->name('liturgical');
Route::get('/schedules', [App\Http\Controllers\ScheduleController::class, 'index'])->name('schedules');
Route::get('/anouncements', [App\Http\Controllers\AnnouncementController::class, 'index'])->name('anouncements');
Route::get('/marriage_bann', [App\Http\Controllers\AnnouncementController::class, 'marriage_bann'])->name('marriage_bann');
Route::get('/post_regular_sched', [App\Http\Controllers\AnnouncementController::class, 'post_regular_sched'])->name('post_regular_sched');
Route::get('/project_financial', [App\Http\Controllers\AnnouncementController::class, 'project_financial'])->name('project_financial');
Route::get('/public_announce', [App\Http\Controllers\AnnouncementController::class, 'public_announce'])->name('public_announce');
Route::get('/report-priest', [App\Http\Controllers\ReportController::class, 'report_priest'])->name('report-priest');
Route::get('/report-total', [App\Http\Controllers\ReportController::class, 'report_total'])->name('report-total');

Route::post('/donors/store', [App\Http\Controllers\ReportController::class, 'storeDonor'])->name('donors.store');
Route::post('/marriage/store', [App\Http\Controllers\ReportController::class, 'storeMarriage'])->name('marriage.store');
Route::get('/announcements/fetch', [App\Http\Controllers\AnnouncementController::class, 'fetchAnnouncements'])->name('announcements.fetch');
Route::post('/save-announcement', [App\Http\Controllers\ReportController::class, 'storePublic'])->name('save_announcement');

Route::post('/announcements/store', [App\Http\Controllers\AnnouncementController::class, 'storePost'])->name('announcements.store');

Route::post('/user/store', [UserController::class, 'store'])->name('user.store');

Route::get('/user-list', [App\Http\Controllers\AccountsController::class, 'users_list'])->name('user-list');


Route::get('/user/{userId}/edit', [App\Http\Controllers\AccountsController::class, 'edit']);
Route::post('/user/{userId}/update', [App\Http\Controllers\AccountsController::class, 'update']);