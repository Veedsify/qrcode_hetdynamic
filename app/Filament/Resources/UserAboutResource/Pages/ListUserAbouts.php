<?php

namespace App\Filament\Resources\UserAboutResource\Pages;

use App\Filament\Resources\UserAboutResource;
use App\Models\UserAbout;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserAbouts extends ListRecords
{
    protected static string $resource = UserAboutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->label('Add About')
            ->visible(function () {
                return UserAbout::count() < 4;
            }),
        ];
    }
}
