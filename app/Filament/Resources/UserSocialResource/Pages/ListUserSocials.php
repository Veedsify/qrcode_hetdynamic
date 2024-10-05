<?php

namespace App\Filament\Resources\UserSocialResource\Pages;

use App\Filament\Resources\UserSocialResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserSocials extends ListRecords
{
    protected static string $resource = UserSocialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
