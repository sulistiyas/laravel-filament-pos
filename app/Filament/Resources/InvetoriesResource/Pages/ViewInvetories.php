<?php

namespace App\Filament\Resources\InvetoriesResource\Pages;

use App\Filament\Resources\InvetoriesResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewInvetories extends ViewRecord
{
    protected static string $resource = InvetoriesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
