<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TicketRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'ticket_id' => 'required|exists:tickets,id',
            'concert_id' => 'required|exists:concerts,id',
            'email' => 'required|email'
        ];
    }
}
