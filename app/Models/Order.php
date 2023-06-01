<?php

namespace App\Models;

use MoonShine\Fields\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

    protected $fillable = [
        'ticket_id',
        'email'
    ];
}
