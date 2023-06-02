<?php

namespace App\MoonShine\Resources;

use App\Models\Ticket;
use MoonShine\Fields\ID;

use MoonShine\Fields\Text;
use MoonShine\Fields\Number;
use MoonShine\Fields\BelongsTo;
use MoonShine\Resources\Resource;
use MoonShine\Fields\SwitchBoolean;
use MoonShine\Actions\FiltersAction;
use Illuminate\Database\Eloquent\Model;

class TicketResource extends Resource
{
	public static string $model = Ticket::class;

	public static string $title = 'Tickets';

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            Text::make('Name', 'title')
            ->required(),
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
