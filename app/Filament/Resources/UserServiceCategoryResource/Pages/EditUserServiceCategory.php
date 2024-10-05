<?php

namespace App\Filament\Resources\UserServiceCategoryResource\Pages;

use App\Filament\Resources\UserServiceCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserServiceCategory extends EditRecord
{
    protected static string $resource = UserServiceCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
