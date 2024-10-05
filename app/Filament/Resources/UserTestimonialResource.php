<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserTestimonialResource\Pages;
use App\Filament\Resources\UserTestimonialResource\RelationManagers;
use App\Models\UserTestimonial;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserTestimonialResource extends Resource
{
    protected static ?string $model = UserTestimonial::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-bottom-center-text';

    protected static ?string $navigationGroup = 'Testimonials';

    protected static ?string $navigationLabel = 'Testimonials';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Testimonial Details')->schema([
                    Select::make('user_id')->relationship('user', 'name')->native(false),
                    TextInput::make('name'),
                    TextInput::make('position'),
                    TextInput::make('description'),
                    FileUpload::make('image'),
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
            'index' => Pages\ListUserTestimonials::route('/'),
            'create' => Pages\CreateUserTestimonial::route('/create'),
            'edit' => Pages\EditUserTestimonial::route('/{record}/edit'),
        ];
    }
}
