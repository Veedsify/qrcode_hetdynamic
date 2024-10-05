<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserDataResource\Pages;
use App\Filament\Resources\UserDataResource\RelationManagers;
use App\Models\UserData;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section as ComponentsSection;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Infolists\Components\Section;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserDataResource extends Resource
{
    protected static ?string $model = UserData::class;

    protected static ?string $navigationIcon = 'heroicon-o-identification';

    protected static ?string $navigationGroup = 'About';
    protected static ?string $navigationLabel = 'My Info';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                ComponentsSection::make('User Info')
                    ->schema([
                        TextInput::make('fullname')->label('Name')->required(),
                        TextInput::make('profession')->label('Profession')->required(),
                        Textarea::make('introduction')->label('Introduction')->required(),
                        TextInput::make('born_in')->label('Born In')->required(),
                        TextInput::make('experience')->label('Experience')->required(),
                        TextInput::make('date_of_birth')->label('Date of Birth')
                        ->placeholder('YYYY-MM-DD')
                        ->type('date')
                        ->required(),
                        FileUpload::make('profile_picture')->label('Profile Picture')->required(),
                        RichEditor::make('about_me')->label('About Me')->required(),
                        TextInput::make('phone_number')->label('Phone Number')->required(),
                        TextInput::make('email')->label('Email')->required(),
                        TextInput::make('address')->label('Address')->required(),
                        Select::make('user_id')
                            ->label('User')
                            ->relationship('user', 'name')
                            ->required(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('profile_picture'),
                Tables\Columns\TextColumn::make('fullname'),
                Tables\Columns\TextColumn::make('profession'),
                Tables\Columns\TextColumn::make('user.name')->label('User'),
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
            'index' => Pages\ListUserData::route('/'),
            'create' => Pages\CreateUserData::route('/create'),
            'edit' => Pages\EditUserData::route('/{record}/edit'),
        ];
    }
}
