<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderItemsResource\Pages;
use App\Filament\Resources\OrderItemsResource\RelationManagers;
use App\Models\OrderItem;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrderItemsResource extends Resource
{
    protected static ?string $model = OrderItem::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-check';

    protected static ?string $navigationGroup = 'Order Management';

    protected static ?string $modelLabel = 'Order Details';
    
    protected static ?string $navigationLabel = 'Order Detail';
    
    protected static ?string $slug = 'orderdetail';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id_order')
                    ->label('Order')
                    ->relationship('order', 'id_order')
                    ->required(),
                Forms\Components\Select::make('id_product')
                    ->label('Product')
                    ->relationship('product', 'name')
                    ->required(),
                Forms\Components\TextInput::make('quantity')
                    ->label('Quantity')
                    ->numeric(true)
                    ->required(),
                Forms\Components\TextInput::make('total_price')
                    ->label('Total Price')
                    ->numeric(true)
                    ->required(),
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
            'index' => Pages\ListOrderItems::route('/'),
            'create' => Pages\CreateOrderItems::route('/create'),
            'view' => Pages\ViewOrderItems::route('/{record}'),
            'edit' => Pages\EditOrderItems::route('/{record}/edit'),
        ];
    }
}
