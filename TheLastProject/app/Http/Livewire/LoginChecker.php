<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LoginChecker extends Component
{
    public $isLoggedIn;

    public function render()
    {
        $this->isLoggedIn = Auth::check();

        return view('livewire.login-checker');
    }

    public function logout()
    {
        Auth::logout();
        $this->isLoggedIn = false;
    }

}
