<?php

namespace App\Filament\Resources\Footers\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class FooterForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                FileUpload::make('image')
                    ->label('Logo Universitas')
                    ->image()
                    ->directory('footers')
                    ->disk('public')
                    ->visibility('public')
                    ->imagePreviewHeight('120')
                    ->maxSize(2048)
                    ->required()
                    ->helperText('Upload logo universitas (JPG/PNG, maksimal 2 MB).'),

                TextInput::make('alamat')
                    ->label('Alamat Lengkap')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Jl. Pendidikan No.1, Pematangsiantar'),

                TextInput::make('link_gmaps')
                    ->label('Link Google Maps')
                    ->url()
                    ->required()
                    ->placeholder('https://www.google.com/maps/...'),

                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required()
                    ->placeholder('info@universitas.ac.id'),

                TextInput::make('wa')
                    ->label('WhatsApp')
                    ->required()
                    ->prefix('+62')
                    ->placeholder('81234567890'),

                TextInput::make('link_instagram')
                    ->label('Instagram')
                    ->url()
                    ->required()
                    ->placeholder('https://instagram.com/universitas'),

                TextInput::make('link_youtube')
                    ->label('YouTube')
                    ->url()
                    ->required()
                    ->placeholder('https://youtube.com/@universitas'),

                TextInput::make('link_linkedin')
                    ->label('LinkedIn')
                    ->url()
                    ->required()
                    ->placeholder('https://linkedin.com/school/universitas'),

                TextInput::make('link_facebook')
                    ->label('Facebook')
                    ->url()
                    ->required()
                    ->placeholder('https://facebook.com/universitas'),
            ])
            ->columns(2);
    }
}