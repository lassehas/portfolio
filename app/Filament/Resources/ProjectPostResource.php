<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectPostResource\Pages;
use App\Filament\Resources\ProjectPostResource\RelationManagers;
use App\Models\ProjectPost;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectPostResource extends Resource
{
    protected static ?string $model = ProjectPost::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->autofocus()
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Title'),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->placeholder('Description'),
                Forms\Components\TextInput::make('picture_path')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Picture Path'),
                Forms\Components\TextInput::make('link_path')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Link Path'),
                Forms\Components\TextInput::make('link_text')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Link Text'),
                Forms\Components\TextInput::make('link_path_2')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Link Path 2'),
                Forms\Components\TextInput::make('link_text_2')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Link Text 2'),
                Forms\Components\TextInput::make('language_logo_path')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Language Logo Path'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListProjectPosts::route('/'),
            'create' => Pages\CreateProjectPost::route('/create'),
            'edit' => Pages\EditProjectPost::route('/{record}/edit'),
        ];
    }
}
