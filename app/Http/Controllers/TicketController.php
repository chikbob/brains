<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response as InertiaPage;

class TicketController extends Controller
{
    public function show(Ticket $ticket): InertiaPage
    {
        return Inertia::render('ticket/[id]', [
            'ticket' => $ticket
        ]);
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        Order::query()->create([
            'ticket_id' => $request->ticket_id,
            'email' => $request->email,
        ]);

        return redirect()->to("/ticket/{$request->ticket_id}");
    }
}
