<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResumeExperienceResource\Pages;
use App\Filament\Resources\UserResumeExperienceResource\RelationManagers;
use App\Models\UserResumeExperience;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResumeExperienceResource extends Resource
{
    protected static ?string $model = UserResumeExperience::class;

    protected static ?string $navigationIcon = 'heroicon-o-adjustments-horizontal';

    protected static ?string $navigationGroup = 'Resume';
    protected static ?string $navigationLabel = 'Experiences';


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
            'index' => Pages\ListUserResumeExperiences::route('/'),
            'create' => Pages\CreateUserResumeExperience::route('/create'),
            'edit' => Pages\EditUserResumeExperience::route('/{record}/edit'),
        ];
    }
}
