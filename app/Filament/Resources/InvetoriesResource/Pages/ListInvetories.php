<?php

namespace App\Filament\Resources\InvetoriesResource\Pages;

use App\Filament\Resources\InvetoriesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInvetories extends ListRecords
{
    protected static string $resource = InvetoriesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
