<?php

namespace App\Filament\Resources\UserResumeEducationResource\Pages;

use App\Filament\Resources\UserResumeEducationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserResumeEducation extends EditRecord
{
    protected static string $resource = UserResumeEducationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
