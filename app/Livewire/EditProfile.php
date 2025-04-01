<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;

class EditProfile extends Component
{
    public User $user;
    #[Validate]
    public string $username = '';
    public string $bio = '';

    public bool $show_success_indicator = false;

    public function mount(): void
    {
        auth()->login(User::first());

        $this->user = auth()->user();
        $this->username = $this->user->username;
        $this->bio = $this->user->bio ?? '';
    }

    public function rules(): array
    {
        return [
            'username' => [
                'required',
                Rule::unique('users', 'name')->ignore($this->user),
            ],
        ];
    }

    public function save(): void
    {
        $this->validate();

        $this->user->name = $this->username;
        $this->user->bio = $this->bio;

        $this->user->save();

        sleep(1);

        $this->show_success_indicator = true;
    }

    public function render()
    {
        return view('livewire.edit-profile');
    }
}
