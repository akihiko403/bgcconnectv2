<?php

namespace App\Infolists\Components;

use Filament\Infolists\Components\Component;

class overview extends Component
{
    protected string $view = 'infolists.components.overview';

    public static function make(): static
    {
        return app(static::class);
    }
}
