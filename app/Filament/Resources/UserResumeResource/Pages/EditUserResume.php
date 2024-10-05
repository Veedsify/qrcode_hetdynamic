<?php

namespace App\Filament\Resources\UserResumeResource\Pages;

use App\Filament\Resources\UserResumeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserResume extends EditRecord
{
    protected static string $resource = UserResumeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
