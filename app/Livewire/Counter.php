<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Counter')]
class Counter extends Component
{
    public int $count = 1;

    public function increment(int $by): void
    {
        $this->count = $this->count + $by;
    }

    public function decrement(int $by): void
    {
        $this->count = $this->count - $by;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
