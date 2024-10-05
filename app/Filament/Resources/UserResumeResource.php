<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResumeResource\Pages;
use App\Filament\Resources\UserResumeResource\RelationManagers;
use App\Models\UserResume;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResumeResource extends Resource
{
    protected static ?string $model = UserResume::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-currency-bangladeshi';

    protected static ?string $navigationGroup = 'Resume';
    protected static ?string $navigationLabel = 'Resume';



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Resume Details')->schema([
                    Select::make('user_id')->relationship('user', 'name')->native(false),
                    RichEditor::make('resume_content')->label('Resume Intro'),
                    FileUpload::make('resume_file_cv')->label('Resume File'),
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
            'index' => Pages\ListUserResumes::route('/'),
            'create' => Pages\CreateUserResume::route('/create'),
            'edit' => Pages\EditUserResume::route('/{record}/edit'),
        ];
    }
}
