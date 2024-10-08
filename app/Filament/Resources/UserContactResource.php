<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserContactResource\Pages;
use App\Filament\Resources\UserContactResource\RelationManagers;
use App\Models\UserContact;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserContactResource extends Resource
{
    protected static ?string $model = UserContact::class;

    protected static ?string $navigationIcon = 'heroicon-o-phone';

    protected static ?string $navigationGroup = 'Contact';
    protected static ?string $navigationLabel = 'Contacts';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make("Contact Requests")->schema([
                    Select::make('user_id')->relationship('user', 'name')->native(false),
                    TextInput::make('name'),
                    TextInput::make('email_address'),
                    Textarea::make('message')
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('email_address'),
                Tables\Columns\TextColumn::make('message'),
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
            'index' => Pages\ListUserContacts::route('/'),
            'create' => Pages\CreateUserContact::route('/create'),
            'edit' => Pages\EditUserContact::route('/{record}/edit'),
        ];
    }
}
