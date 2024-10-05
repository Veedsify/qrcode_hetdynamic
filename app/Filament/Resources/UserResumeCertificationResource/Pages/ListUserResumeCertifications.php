<?php

namespace App\Filament\Resources\UserResumeCertificationResource\Pages;

use App\Filament\Resources\UserResumeCertificationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserResumeCertifications extends ListRecords
{
    protected static string $resource = UserResumeCertificationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
