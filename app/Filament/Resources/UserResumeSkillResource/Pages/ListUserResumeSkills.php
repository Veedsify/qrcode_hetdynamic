<?php

namespace App\Filament\Resources\UserResumeSkillResource\Pages;

use App\Filament\Resources\UserResumeSkillResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserResumeSkills extends ListRecords
{
    protected static string $resource = UserResumeSkillResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
