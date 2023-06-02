<?php

namespace App\Http\Controllers;

use App\Models\Concert;
use App\Models\Ticket;
use App\Models\Album;
use Inertia\Inertia;
use Inertia\Response as InertiaPage;

class ConcertController extends Controller
{
    public function show(Concert $concert): InertiaPage
    {
        return Inertia::render('concert/[id]', [
            'concert' => $concert,
            'tickets' => Ticket::all(),
        ]);
    }

    public function list(): InertiaPage
    {
        return Inertia::render('concert', [
            'concerts' => Concert::all(),
        ]);
    }
}
