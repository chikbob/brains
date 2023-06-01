<?php

namespace App\Providers;

use MoonShine\MoonShine;
use MoonShine\Menu\MenuItem;
use MoonShine\Menu\MenuGroup;
use Illuminate\Support\ServiceProvider;
use App\MoonShine\Resources\AlbumResource;
use App\MoonShine\Resources\OrderResource;
use App\MoonShine\Resources\TicketResource;
use App\MoonShine\Resources\ConcertResource;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;

class MoonShineServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        app(MoonShine::class)->menu([
            MenuGroup::make('moonshine::ui.resource.system', [
                MenuItem::make('moonshine::ui.resource.admins_title', new MoonShineUserResource())
                    ->translatable()
                    ->icon('users'),
                MenuItem::make('moonshine::ui.resource.role_title', new MoonShineUserRoleResource())
                    ->translatable()
                    ->icon('bookmark'),
            ])->translatable(),

            MenuItem::make('Альбоми групи', new AlbumResource())
                    ->icon('bookmark'),
            MenuItem::make('Концерт', new ConcertResource())
                    ->icon('bookmark'),
            MenuItem::make('Замовлення', new OrderResource())
                    ->icon('bookmark'),
            MenuItem::make('Білети', new TicketResource())
                    ->icon('bookmark'),
        ]);
    }
}
