<?php

namespace App\Filament\Resources\UserTestimonialResource\Pages;

use App\Filament\Resources\UserTestimonialResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserTestimonials extends ListRecords
{
    protected static string $resource = UserTestimonialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
