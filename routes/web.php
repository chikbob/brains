<?php

use App\Http\Controllers\ConcertController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TicketController;
use App\Models\Concert;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('index', [
        'concerts' => Concert::all()
    ]);
});

Route::get('/concert/{concert}', [ConcertController::class, 'show']);
Route::get('/ticket/{ticket}', [TicketController::class, 'show'])->name('ticket.show');
Route::get('/order/{order}', [OrderController::class, 'show']);
Route::post('/ticket', [TicketController::class, 'store']);
