<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Order;
use Illuminate\Support\Str;
use App\Http\Requests\TicketRequest;
use Illuminate\Http\RedirectResponse;
use App\Notifications\OrderNotification;

class OrderController extends Controller
{
    public function show(Order $order): \Inertia\Response
    {
        return Inertia::render('order/[id]', [
            'order' => $order
        ]);
    }

    /**
     * @param TicketRequest $request
     * @return RedirectResponse
     */
    public function store(TicketRequest $request): RedirectResponse
    {
        /* @var Order $order */
        $order = Order::query()
            ->create([
                ...$request->validated(),
                'hash' => Str::uuid()
            ]);

        $order->notify(new OrderNotification($order->hash));

        return to_route('concert');
    }
}
