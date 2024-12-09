<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class RegisterUserForm extends Component
{
    public $state = [
        'userType' => '',
    ];

    public function render()
    {
        return view('livewire.auth.register-user-form')->layout('layouts.guest');
    }
}
