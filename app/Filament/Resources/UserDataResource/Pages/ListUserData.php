<?php

namespace App\Filament\Resources\UserDataResource\Pages;

use App\Filament\Resources\UserDataResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserData extends ListRecords
{
    protected static string $resource = UserDataResource::class;

    public static ?string $title = 'User Info';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
