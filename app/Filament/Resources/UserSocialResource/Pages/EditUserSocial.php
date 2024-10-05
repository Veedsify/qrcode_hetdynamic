<?php

namespace App\Filament\Resources\UserSocialResource\Pages;

use App\Filament\Resources\UserSocialResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserSocial extends EditRecord
{
    protected static string $resource = UserSocialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
