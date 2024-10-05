<?php

namespace App\Filament\Resources\UserResumeExperienceResource\Pages;

use App\Filament\Resources\UserResumeExperienceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserResumeExperiences extends ListRecords
{
    protected static string $resource = UserResumeExperienceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
