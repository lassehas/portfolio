<?php

namespace App\Filament\Resources\ProjectPostResource\Pages;

use App\Filament\Resources\ProjectPostResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProjectPosts extends ListRecords
{
    protected static string $resource = ProjectPostResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
