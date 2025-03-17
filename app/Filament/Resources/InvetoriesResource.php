<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InvetoriesResource\Pages;
use App\Filament\Resources\InvetoriesResource\RelationManagers;
use App\Models\Inventory;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InvetoriesResource extends Resource
{
    protected static ?string $model = Inventory::class;

    protected static ?string $navigationIcon = 'heroicon-o-circle-stack';

    protected static ?string $navigationGroup = 'Product Management';

    protected static ?string $modelLabel = 'Inventories';
    
    protected static ?string $navigationLabel = 'Inventory';
    
    protected static ?string $slug = 'inventory';

    protected static ?int $navigationSort = 2;
    
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id_product')
                    ->label('Product')
                    ->relationship('product', 'name')
                    ->required(),
                Forms\Components\Section::make('Stock Information')
                ->columns(3)
                ->schema([
                    Forms\Components\TextInput::make('stock')
                        ->label('Stock')
                        ->numeric(true)
                        ->required(),
                    Forms\Components\TextInput::make('stock_min')
                        ->label('Stock Min')
                        ->numeric(true)
                        ->required(),
                    Forms\Components\TextInput::make('stock_max')
                        ->label('Stock Max')
                        ->numeric(true)
                        ->required(),
                ]),
                
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
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListInvetories::route('/'),
            'create' => Pages\CreateInvetories::route('/create'),
            'view' => Pages\ViewInvetories::route('/{record}'),
            'edit' => Pages\EditInvetories::route('/{record}/edit'),
        ];
    }
}
