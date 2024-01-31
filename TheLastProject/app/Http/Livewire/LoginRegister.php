<?php

namespace App\Http\Livewire;

use App\Models\Clientes;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LoginRegister extends Component
{
    public $email, $password, $name, $nombre_empresa, $telefono;
    public $registerForm =  false;

    public function render()
    {
        return view('livewire.login-register');
    }

    public function devolverEstado(): bool
    {
        return $this->registerForm;
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->nombre_empresa = '';
        $this->telefono = '';
    }

    public function login():void
    {
        $validatedData = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->flash('message', 'Login successful');
            Session::put('email', $this->email);
        } else {
            session()->flash('error', 'Login failed');
        }
    }
    public function logout()
    {
        Session::forget('email');
        Auth::logout();
        return redirect()->route('index'); // O redirige a donde desees después del cierre de sesión
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

    public function redirectToFormulario()
    {
        return Redirect::to('/formulario');
    }

    public function renderLogin()
    {
        // Obtener el nombre de usuario desde la sesión
        $email = Session::get('email');

        // Renderizar la vista con el nombre de usuario
        return view('livewire.indexAuth', ['email' => $email]);
    }
    public function editarPerfil()
    {
        // Obtener el nombre de usuario desde la sesión
        $email = Session::get('email');

        // Renderizar la vista con el nombre de usuario
        return view('livewire.edit-porfile', ['email' => $email]);
    }
}
