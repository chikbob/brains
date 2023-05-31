<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Inertia\Inertia;

class OrderController extends Controller
{
    public function show(Order $order): \Inertia\Response
    {
        return Inertia::render('order/[id]', [
            'order' => $order
        ]);
    }
}
