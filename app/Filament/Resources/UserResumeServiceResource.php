<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResumeServiceResource\Pages;
use App\Filament\Resources\UserResumeServiceResource\RelationManagers;
use App\Models\UserResumeService;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResumeServiceResource extends Resource
{
    protected static ?string $model = UserResumeService::class;

    protected static ?string $navigationIcon = 'heroicon-o-wrench';

    protected static ?string $navigationGroup = 'Resume';
    protected static ?string $navigationLabel = 'Resume Services';


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
            'index' => Pages\ListUserResumeServices::route('/'),
            'create' => Pages\CreateUserResumeService::route('/create'),
            'edit' => Pages\EditUserResumeService::route('/{record}/edit'),
        ];
    }
}
