<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResumeSkillResource\Pages;
use App\Filament\Resources\UserResumeSkillResource\RelationManagers;
use App\Models\UserResumeSkill;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
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
                Section::make('Skill Details')->schema([
                    Select::make('user_id')->relationship('user', 'name')->native(false),
                    TextInput::make('skill_name'),
                    TextInput::make('skill_level')->label('Skill Level (1-100)%'),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('skill_name'),
                Tables\Columns\TextColumn::make('skill_level'),
                Tables\Columns\TextColumn::make('user.name')->label('For User'),
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
