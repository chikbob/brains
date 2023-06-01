<?php

namespace App\MoonShine\Resources;

use App\Models\Order;
use MoonShine\Fields\ID;

use MoonShine\Fields\Email;
use MoonShine\Resources\Resource;
use MoonShine\Actions\FiltersAction;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Fields\BelongsTo;

class OrderResource extends Resource
{
	public static string $model = Order::class;

	public static string $title = 'Orders';

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            Email::make('E-mail', 'email')
            ->required(),
            BelongsTo::make('Ticket', 'ticket_id')
            ->required(),
        ];
	}

	public function rules(Model $item): array
	{
	    return [];
    }

    public function search(): array
    {
        return ['id'];
    }

    public function filters(): array
    {
        return [];
    }

    public function actions(): array
    {
        return [
            FiltersAction::make(trans('moonshine::ui.filters')),
        ];
    }
}
