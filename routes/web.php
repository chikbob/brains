<?php

use Inertia\Inertia;
use App\Models\Album;
use App\Models\Concert;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ConcertController;

Route::get('/', function () {
    return Inertia::render('index', [
        'concerts' => Concert::all(),
        'albums' => Album::all()
    ]);
});

Route::get('/concert/{concert}', [ConcertController::class, 'show']);
Route::get('/concert', [ConcertController::class, 'list']);
Route::get('/ticket/{ticket}', [TicketController::class, 'show'])->name('ticket.show');
Route::get('/order/{order}', [OrderController::class, 'show']);
Route::post('/ticket', [TicketController::class, 'store']);
