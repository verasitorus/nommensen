<?php

namespace App\Filament\Resources\Footers\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class FootersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Logo')
                    ->disk('public')
                    ->height(50),

                TextColumn::make('alamat')
                    ->label('Alamat')
                    ->searchable()
                    ->limit(50),

                TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),

                TextColumn::make('wa')
                    ->label('WhatsApp')
                    ->prefix('+62 '),

                TextColumn::make('link_instagram')
                    ->label('Instagram')
                    ->limit(20),

                TextColumn::make('updated_at')
                    ->label('Diperbarui')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('updated_at', 'desc');
    }
}