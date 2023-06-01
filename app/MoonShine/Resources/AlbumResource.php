<?php

namespace App\MoonShine\Resources;

use App\Models\Album;
use MoonShine\Fields\ID;

use MoonShine\Fields\Text;
use MoonShine\Resources\Resource;
use MoonShine\Actions\FiltersAction;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Fields\Url;

class AlbumResource extends Resource
{
	public static string $model = Album::class;

	public static string $title = 'Albums';

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            Text::make('Album', 'album'),
            Url::make('Poster', 'poster'),
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
