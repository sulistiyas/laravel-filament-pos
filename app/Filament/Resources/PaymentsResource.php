<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PaymentsResource\Pages;
use App\Filament\Resources\PaymentsResource\RelationManagers;
use App\Models\Payment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PaymentsResource extends Resource
{
    protected static ?string $model = Payment::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';

    protected static ?string $navigationGroup = 'Order Management';

    protected static ?string $modelLabel = 'Payments';
    
    protected static ?string $navigationLabel = 'Payment';
    
    protected static ?string $slug = 'payment';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id_order')
                    ->label('Order')
                    ->relationship('order', 'id_order')
                    ->required(),
                Forms\Components\TextInput::make('payment_date')
                    ->label('Payment Date')
                    ->required(),
                Forms\Components\TextInput::make('amount')
                    ->label('Amount')
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
            'index' => Pages\ListPayments::route('/'),
            'create' => Pages\CreatePayments::route('/create'),
            'view' => Pages\ViewPayments::route('/{record}'),
            'edit' => Pages\EditPayments::route('/{record}/edit'),
        ];
    }
}
