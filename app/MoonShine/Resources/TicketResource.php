<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Ticket;

use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;
use MoonShine\Fields\BelongsTo;
use MoonShine\Fields\Number;
use MoonShine\Fields\SwitchBoolean;

class TicketResource extends Resource
{
	public static string $model = Ticket::class;

	public static string $title = 'Tickets';

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            BelongsTo::make('Concert', 'concert_id')
            ->required(),
            SwitchBoolean::make('Avalaible', 'avalaible')
            ->default(true),
            Number::make('Price', 'price')
            ->required()
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
