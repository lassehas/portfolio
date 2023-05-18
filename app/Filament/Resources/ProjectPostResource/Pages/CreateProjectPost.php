<?php

namespace App\Filament\Resources\ProjectPostResource\Pages;

use App\Filament\Resources\ProjectPostResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProjectPost extends CreateRecord
{
    protected static string $resource = ProjectPostResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }
}
