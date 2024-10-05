<?php

namespace App\Filament\Resources\UserServiceResource\Pages;

use App\Filament\Resources\UserServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUserService extends CreateRecord
{
    protected static string $resource = UserServiceResource::class;
}
