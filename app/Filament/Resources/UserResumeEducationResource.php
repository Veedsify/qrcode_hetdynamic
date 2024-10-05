<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResumeEducationResource\Pages;
use App\Filament\Resources\UserResumeEducationResource\RelationManagers;
use App\Models\UserResumeEducation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResumeEducationResource extends Resource
{
    protected static ?string $model = UserResumeEducation::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    protected static ?string $navigationGroup = 'Resume';
    protected static ?string $navigationLabel = 'Education';

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
            'index' => Pages\ListUserResumeEducation::route('/'),
            'create' => Pages\CreateUserResumeEducation::route('/create'),
            'edit' => Pages\EditUserResumeEducation::route('/{record}/edit'),
        ];
    }
}
