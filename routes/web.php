<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();


Route::post('/user/login', [UserController::class, 'login'])->name('user.login');


Route::middleware(['auth'])->group(function () {
   
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
    Route::post('/user/{userId}/update_status', [App\Http\Controllers\AccountsController::class, 'update_status']);
    Route::post('/user/{userId}/delete', [App\Http\Controllers\AccountsController::class, 'destroy']);

    Route::post('/save-event', [App\Http\Controllers\EventController::class, 'create'])->name('calendar.saveEvent');

    Route::get('/get-events', [App\Http\Controllers\EventController::class, 'getEvents'])->name('calendar.getEvents');

    Route::post('/schedules-store', [App\Http\Controllers\ScheduleController::class, 'store'])->name('schedules.store');

    Route::post('/assign_priest', [App\Http\Controllers\ScheduleController::class, 'assign_priest'])->name('assign_priest');

    Route::post('/change-password', [UserController::class, 'changePassword']);

    Route::get('/list-request', [App\Http\Controllers\RequestController::class, 'getListSched'])->name('list-request');
});

Route::get('/notifications', function () {
    return auth()->user()->unreadNotifications;
})->middleware('auth');

Route::get('/notifications-count', function () {

    $user = Auth::user();

    if (!$user) {
        return response()->json(['error' => 'Unauthorized'], 401);
    }
    $unreadCount = $user->unreadNotifications()->count();

    return $unreadCount;
})->middleware('auth');

Route::post('/notifications/read/{id}', function ($id) {
    auth()->user()->notifications()->find($id)->markAsRead();
    return response()->json(['message' => 'Notification marked as read.']);
})->middleware('auth');