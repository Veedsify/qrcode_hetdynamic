<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResumeSkillResource\Pages;
use App\Filament\Resources\UserResumeSkillResource\RelationManagers;
use App\Models\UserResumeSkill;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResumeSkillResource extends Resource
{
    protected static ?string $model = UserResumeSkill::class;

    protected static ?string $navigationIcon = 'heroicon-o-cube-transparent';

    protected static ?string $navigationGroup = 'Resume';
    protected static ?string $navigationLabel = 'Resume Skills';

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
            'index' => Pages\ListUserResumeSkills::route('/'),
            'create' => Pages\CreateUserResumeSkill::route('/create'),
            'edit' => Pages\EditUserResumeSkill::route('/{record}/edit'),
        ];
    }
}
