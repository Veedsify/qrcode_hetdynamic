<?php

namespace App\Filament\Resources\UserResumeEducationResource\Pages;

use App\Filament\Resources\UserResumeEducationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserResumeEducation extends ListRecords
{
    protected static string $resource = UserResumeEducationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
