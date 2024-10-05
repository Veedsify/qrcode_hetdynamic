<?php

namespace App\Filament\Resources\UserResumeServiceResource\Pages;

use App\Filament\Resources\UserResumeServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserResumeServices extends ListRecords
{
    protected static string $resource = UserResumeServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
