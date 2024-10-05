<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserServiceResource\Pages;
use App\Filament\Resources\UserServiceResource\RelationManagers;
use App\Models\UserService;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserServiceResource extends Resource
{
    protected static ?string $model = UserService::class;

    protected static ?string $navigationIcon = 'heroicon-o-inbox-stack';

    protected static ?string $navigationLabel = 'Services';


    protected static ?string $navigationGroup = 'Service';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUserServices::route('/'),
            'create' => Pages\CreateUserService::route('/create'),
            'edit' => Pages\EditUserService::route('/{record}/edit'),
        ];
    }
}
