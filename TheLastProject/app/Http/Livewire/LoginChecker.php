<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LoginChecker extends Component
{
    public $isLoggedIn;
    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

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

    public function login()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            $this->isLoggedIn = true;
        } else {
            $this->addError('email', 'Credenciales incorrectas. Por favor, inténtalo de nuevo.');
        }
    }
}
