<?php

namespace App\MoonShine\Resources;

use App\Models\Concert;
use MoonShine\Fields\ID;

use MoonShine\Fields\Date;
use MoonShine\Fields\Text;
use MoonShine\Resources\Resource;
use MoonShine\Actions\FiltersAction;
use Illuminate\Database\Eloquent\Model;

class ConcertResource extends Resource
{
	public static string $model = Concert::class;

	public static string $title = 'Concerts';

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            Text::make('Name', 'name')
            ->required(),
            Text::make('City', 'city')
            ->required(),
            Date::make('Date', 'date')
            ->withTime()
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
