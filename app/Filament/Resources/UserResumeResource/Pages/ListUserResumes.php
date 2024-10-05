<?php

namespace App\Filament\Resources\UserResumeResource\Pages;

use App\Filament\Resources\UserResumeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserResumes extends ListRecords
{
    protected static string $resource = UserResumeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
