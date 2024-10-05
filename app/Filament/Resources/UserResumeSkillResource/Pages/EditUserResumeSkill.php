<?php

namespace App\Filament\Resources\UserResumeSkillResource\Pages;

use App\Filament\Resources\UserResumeSkillResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserResumeSkill extends EditRecord
{
    protected static string $resource = UserResumeSkillResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
