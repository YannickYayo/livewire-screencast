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
    public string $country = '';
    public bool $receive_emails = false;
    public bool $receive_updates = false;
    public bool $receive_offers = false;

    public function rules(): array
    {
        return [
            'username' => [
                'required',
                Rule::unique('users', 'name')->ignore($this->user),
            ],
            'country' => [
                'required',
            ],
        ];
    }

    public function setUser(User $user): void
    {
        $this->user = $user;

        $this->username = $this->user->username;
        $this->bio = $this->user->bio ?? '';
        $this->country = $this->user->country ?? '';

        $this->receive_emails = $this->user->receive_emails ?? '';
        $this->receive_updates = $this->user->receive_updates ?? '';
        $this->receive_offers = $this->user->receive_offers ?? '';
    }

    public function update(): void
    {
        $this->validate();

        $this->user->name = $this->username;
        $this->user->bio = $this->bio;
        $this->user->country = $this->country;

        $this->user->receive_emails = $this->receive_emails;
        $this->user->receive_updates = $this->receive_updates;
        $this->user->receive_offers = $this->receive_offers;

        $this->user->save();
    }
}
