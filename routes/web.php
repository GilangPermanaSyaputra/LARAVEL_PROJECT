<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\mencoba;
use App\Http\Controllers\Teams\TeamInvitationController;
use App\Http\Middleware\EnsureTeamMembership;
use Illuminate\Support\Facades\Route;

Route::inertia('/', 'Welcome')->name('home');

Route::prefix('{current_team}')
    ->middleware(['auth', 'verified', EnsureTeamMembership::class])
    ->group(function () {
        Route::get('dashboard', DashboardController::class)->name('dashboard');
    });

Route::middleware(['auth'])->group(function () {
    Route::post('invitations/{invitation}/accept', [TeamInvitationController::class, 'accept'])->name('invitations.accept');
    Route::delete('invitations/{invitation}', [TeamInvitationController::class, 'decline'])->name('invitations.decline');
});

require __DIR__.'/settings.php';

Route::get('/as', [mencoba::class, 'index']);

Route::get('/user', [mencoba::class, 'index']);

Route::get('/pek', function () {
    return 'ASHDHSJDK';
});

Route::get('/jaja/{woi}', function ($woi) {
    return view('belajar');
})->name('jaja');

Route::get('/josjis/{woi}', [mencoba::class, 'index'])->name('josjis');

Route::get('/routee/{aku?}', function ($aku = 'skibidi') {
    return 'nama saya gilang dan saya suka '.$aku;
});
