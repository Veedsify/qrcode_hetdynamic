<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResumeExperienceResource\Pages;
use App\Filament\Resources\UserResumeExperienceResource\RelationManagers;
use App\Models\UserResumeExperience;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextArea;
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
                Section::make('Experience Details')->schema([
                    Select::make('user_id')->relationship('user', 'name')->native(false),
                    TextInput::make('company_name'),
                    TextInput::make('job_title'),
                    TextInput::make('start_date'),
                    TextInput::make('end_date'),
                    TextArea::make('description'),
                ])
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
