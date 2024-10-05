<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResumeCertificationResource\Pages;
use App\Filament\Resources\UserResumeCertificationResource\RelationManagers;
use App\Models\UserResumeCertification;
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

class UserResumeCertificationResource extends Resource
{
    protected static ?string $model = UserResumeCertification::class;

    protected static ?string $navigationIcon = 'heroicon-o-trophy';

    protected static ?string $navigationGroup = 'Resume';
    protected static ?string $navigationLabel = 'Certifications';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Certification Details')->schema([
                    Select::make('user_id')->relationship('user', 'name')->native(false),
                    TextInput::make('certification_name'),
                    TextInput::make('receive_date'),
                    TextInput::make('description'),
                    TextInput::make('link'),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('certification_name'),
                Tables\Columns\TextColumn::make('receive_date'),
                Tables\Columns\TextColumn::make('description')->words(10),
                Tables\Columns\TextColumn::make('link')->words(10),
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
            'index' => Pages\ListUserResumeCertifications::route('/'),
            'create' => Pages\CreateUserResumeCertification::route('/create'),
            'edit' => Pages\EditUserResumeCertification::route('/{record}/edit'),
        ];
    }
}
