<?php

namespace App\Filament\Resources\Lectures\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class LecturesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Foto')
                    ->disk('public')
                    ->height(60)
                    ->circular(),

                TextColumn::make('nama')
                    ->label('Nama Dosen')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                TextColumn::make('nidn')
                    ->label('NIDN')
                    ->searchable()
                    ->toggleable(),

                TextColumn::make('jabatan')
                    ->label('Jabatan')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color('success'),

                TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->icon('heroicon-o-envelope'),

                TextColumn::make('topik')
                    ->label('Bidang Keahlian')
                    ->searchable()
                    ->limit(40)
                    ->tooltip(fn (?string $state): ?string => $state),

                TextColumn::make('pendidikan')
                    ->label('Pendidikan')
                    ->searchable()
                    ->limit(40)
                    ->tooltip(fn (?string $state): ?string => $state)
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('created_at')
                    ->label('Ditambahkan')
                    ->dateTime('d M Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            ->defaultSort('nama');
    }
}