<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrdersResource\Pages;
use App\Filament\Resources\OrdersResource\RelationManagers;
use App\Models\Order;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrdersResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    protected static ?string $navigationGroup = 'Order Management';

    protected static ?string $modelLabel = 'Orders';
    
    protected static ?string $navigationLabel = 'Order';
    
    protected static ?string $slug = 'order';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id_customer')
                    ->label('Customer')
                    ->relationship('customer', 'name')
                    ->required(),
                Forms\Components\TextInput::make('status')
                    ->label('Status')
                    ->required(),
                Forms\Components\Datepicker::make('order_date')
                    ->label('Order Date')
                    ->required(),
                Forms\Components\TextInput::make('total_cost')
                    ->label('Total Cost')
                    ->numeric(true)
                    ->required(),
            ])->columns(2);
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
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrders::route('/create'),
            'view' => Pages\ViewOrders::route('/{record}'),
            'edit' => Pages\EditOrders::route('/{record}/edit'),
        ];
    }
}
