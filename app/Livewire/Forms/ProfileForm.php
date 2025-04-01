<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ProfileForm extends Form
{
    public User $user;
    #[Validate]
    public string $username = '';
    public string $bio = '';

    public function rules(): array
    {
        return [
            'username' => [
                'required',
                Rule::unique('users', 'name')->ignore($this->user),
            ],
        ];
    }

    public function setUser(User $user): void
    {
        $this->user = $user;
        $this->username = $this->user->username;
        $this->bio = $this->user->bio ?? '';
    }

    public function update(): void
    {
        $this->validate();

        $this->user->name = $this->username;
        $this->user->bio = $this->bio;

        $this->user->save();
    }
}
