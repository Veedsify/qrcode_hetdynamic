<?php

namespace App\Filament\Resources\UserResumeServiceResource\Pages;

use App\Filament\Resources\UserResumeServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserResumeService extends EditRecord
{
    protected static string $resource = UserResumeServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
