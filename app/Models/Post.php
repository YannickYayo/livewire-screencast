<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    protected function casts(): array
    {
        return [
            'archive' => 'boolean',
        ];
    }

    public function archive(): void
    {
        $this->update(['archived' => true]);
    }
}
