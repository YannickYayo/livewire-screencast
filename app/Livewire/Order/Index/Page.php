<?php

namespace App\Livewire\Order\Index;

use App\Models\Store;
use Livewire\Component;

class Page extends Component
{
    public Store $store;

    public function render()
    {
        return view(
            'livewire.order.index.page',
            [
                'orders' => $this->store->orders()->take(10)->get(),
            ],
        );
    }
}
