<?php

namespace App\Models;

use MoonShine\Fields\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Order extends Model
{
    use HasFactory, Notifiable;

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

    protected $fillable = [
        'ticket_id',
        'email',
        'hash'
    ];
}
