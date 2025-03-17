<?php

namespace App\Filament\Resources\InvetoriesResource\Pages;

use App\Filament\Resources\InvetoriesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInvetories extends EditRecord
{
    protected static string $resource = InvetoriesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
