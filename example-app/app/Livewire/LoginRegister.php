<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginRegister extends Component
{
    public $email, $password,$name;
    public $registerForm =  false;


    public function render()
    {
        return view('livewire.login-register');
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
    }

    public function login(): void
    {
        $validatedData = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if(\Auth::attempt(['email' => $this->email, 'password' => $this->password])){
            session()->flash('message', 'Login successful');
        }else{
            session()->flash('error', 'Login failed');
        }
    }

    public function register(){
        $this->registerForm = !$this->registerForm;
    }

    public function registerStore(){
        $validateData = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ]);
        session()->flash('message', 'Register successful');

        $this->resetInputFields();
    }




}
