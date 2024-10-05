<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserServiceCategoryResource\Pages;
use App\Filament\Resources\UserServiceCategoryResource\RelationManagers;
use App\Models\UserServiceCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserServiceCategoryResource extends Resource
{
    protected static ?string $model = UserServiceCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Service';
    protected static ?string $navigationLabel = 'Service Categories';

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
            'index' => Pages\ListUserServiceCategories::route('/'),
            'create' => Pages\CreateUserServiceCategory::route('/create'),
            'edit' => Pages\EditUserServiceCategory::route('/{record}/edit'),
        ];
    }
}
