<?php

namespace App\Enums;

enum Country: string
{
    case United_States = 'US';
    case France = 'FR';
    case Australia = 'AU';
    case Mexico = 'MX';
    case Brazil = 'BR';
    case Germany = 'GE';

    public function label(): string
    {
        return (string) str($this->name)->replace('_', ' ');
    }
}
