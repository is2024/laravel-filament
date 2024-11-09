<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class PosPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-m-shopping-bag';

    protected static string $view = 'filament.pages.pos-page';

    protected static ?int $navigationSort = 105;
}
