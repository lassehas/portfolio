<?php

namespace App\Filament\Resources\ProjectPostResource\Pages;

use App\Filament\Resources\ProjectPostResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProjectPost extends EditRecord
{
    protected static string $resource = ProjectPostResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
