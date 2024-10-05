<?php

namespace App\Filament\Resources\UserServiceCategoryResource\Pages;

use App\Filament\Resources\UserServiceCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserServiceCategories extends ListRecords
{
    protected static string $resource = UserServiceCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
