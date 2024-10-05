<?php

namespace App\Filament\Resources\UserTestimonialResource\Pages;

use App\Filament\Resources\UserTestimonialResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserTestimonial extends EditRecord
{
    protected static string $resource = UserTestimonialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
