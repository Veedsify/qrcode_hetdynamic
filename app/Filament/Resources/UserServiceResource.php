<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserServiceResource\Pages;
use App\Filament\Resources\UserServiceResource\RelationManagers;
use App\Models\UserService;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserServiceResource extends Resource
{
    protected static ?string $model = UserService::class;
    protected static ?string $navigationIcon = 'heroicon-o-inbox-stack';
    protected static ?string $navigationLabel = 'Services';
    protected static ?string $navigationGroup = 'Service';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Service Details')->schema([
                    Select::make('user_id')->relationship('user', 'name')->native(false),
                    Select::make('user_service_category_id')->label('Service Category')->relationship('user_service_category', 'service_category_name')->native(false),
                    TextInput::make('service_name')->label('Service Name'),
                    FileUpload::make('service_cover')->label('Service Image')
                        ->image()
                        ->imageEditor()
                        ->avatar()
                        ->circleCropper(),
                    RichEditor::make('service_content')->label('Service Content')
                ])
            ]);
    }
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('service_cover')->label('Service Image'),
                Tables\Columns\TextColumn::make('service_name')->label('Service Name'),
                Tables\Columns\TextColumn::make('user.name')->label('For User'),
                Tables\Columns\TextColumn::make('user_service_category.service_category_name')->label('Service Category'),
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
            'index' => Pages\ListUserServices::route('/'),
            'create' => Pages\CreateUserService::route('/create'),
            'edit' => Pages\EditUserService::route('/{record}/edit'),
        ];
    }
}
