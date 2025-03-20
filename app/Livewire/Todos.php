<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{
    public string $todo = '';
    public array $todos = [];

    public function mount(): void
    {
        $this->todos = [
            'Take out trash',
            'Do dishes',
        ];
    }

    public function updatedTodo(string $value): void
    {
        $this->todo = strtoupper($value);
    }

    public function add(): void
    {
        $this->todos[] = $this->todo;

        $this->reset('todo');
    }

    public function render()
    {
        return view('livewire.todos');
    }
}
