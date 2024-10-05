<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserAboutResource\Pages;
use App\Filament\Resources\UserAboutResource\RelationManagers;
use App\Models\UserAbout;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserAboutResource extends Resource
{
    protected static ?string $model = UserAbout::class;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';

    protected static ?string $navigationLabel = 'About';
    protected static ?string $navigationGroup = 'About';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('About')
                    ->schema([
                        TextInput::make('title')->label('Title')->required(),
                        TextInput::make('item')->label('Item')->required(),
                        FileUpload::make('icon')->label('Icon')->image(),
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
                ImageColumn::make('icon'),
                TextColumn::make('title'),
                TextColumn::make('item'),
                TextColumn::make('user.name')->label('User'),
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
            'index' => Pages\ListUserAbouts::route('/'),
            'create' => Pages\CreateUserAbout::route('/create'),
            'edit' => Pages\EditUserAbout::route('/{record}/edit'),
        ];
    }
}
