<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResumeEducationResource\Pages;
use App\Filament\Resources\UserResumeEducationResource\RelationManagers;
use App\Models\UserResumeEducation;
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
                Section::make('Education Details')->schema([
                    Select::make('user_id')->relationship('user', 'name')->native(false),
                    TextInput::make('school'),
                    TextInput::make('degree'),
                    TextInput::make('education_start_date'),
                    TextInput::make('education_end_date'),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('school'),
                Tables\Columns\TextColumn::make('degree'),
                Tables\Columns\TextColumn::make('education_start_date'),
                Tables\Columns\TextColumn::make('education_end_date'),
                Tables\Columns\TextColumn::make('user.name')->label('For User'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
