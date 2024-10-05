<?php

namespace App\Filament\Resources\UserResumeCertificationResource\Pages;

use App\Filament\Resources\UserResumeCertificationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserResumeCertification extends EditRecord
{
    protected static string $resource = UserResumeCertificationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
