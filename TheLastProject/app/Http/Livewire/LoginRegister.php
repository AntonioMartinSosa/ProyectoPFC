<?php

namespace App\Http\Livewire;

use App\Models\Clientes;
use Livewire\Component;
use Illuminate\Support\Facades\Auth; // Agrega esta línea
use Illuminate\Support\Facades\Hash;

class LoginRegister extends Component
{
    public $email, $password, $name, $nombre_empresa, $telefono;
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
        $this->nombre_empresa = '';
        $this->telefono = '';
    }

    public function login(): void
    {
        $validatedData = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->flash('message', 'Login successful');
        } else {
            session()->flash('error', 'Login failed');
        }
    }

    public function register()
    {
        $this->registerForm = !$this->registerForm;
    }

    public function registerStore()
    {
        $validateData = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'nombre_empresa' => 'required',
            'telefono' => 'required',
        ]);

        $clientes = new Clientes([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'nombre_empresa' => $this->nombre_empresa,
            'telefono' => $this->telefono,
        ]);

        $clientes->save();

        session()->flash('message', 'Register successful');
        $this->resetInputFields();
    }
}
