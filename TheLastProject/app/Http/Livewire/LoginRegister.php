<?php

namespace App\Http\Livewire;

use App\Models\Clientes;
use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LoginRegister extends Component
{
    public $email, $password, $name, $nombre_empresa, $telefono;
    public $registerForm = false;

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

    public function login(): void
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
        if (Auth::check()) {
            Auth::logout();
            Session::forget('email');
            session()->flash('message', 'Logout successful');
        }
    }

    public function actualizarUsuario(Request $request)
    {
        // Validación de los datos del formulario
        $validatedData = $request->validate([
            'name' => 'sometimes|required',
            'email' => 'required|email',
            'nombre_empresa' => 'required',
            'telefono' => 'required',
        ]);

        $cliente = Auth::user();

        // Actualizar los campos del cliente si están presentes en la solicitud
        if ($request->input('name')) {
            $cliente->name = $request->input('name');
        }
        if ($request->input('email')) {
            $cliente->email = $request->input('email');
        }
        if ($request->input('nombre_empresa')) {
            $cliente->nombre_empresa = $request->input('nombre_empresa');
        }
        if ($request->input('telefono')) {
            $cliente->telefono = $request->input('telefono');
        }

        // Guardar los cambios en la base de datos
        $cliente->save();

        // Mensaje flash para informar al usuario sobre el éxito de la actualización
        session()->flash('message', 'Información de usuario actualizada correctamente.');
        return back();

    }







    public function cerrarSesion()
    {
        auth()->logout();
        Session::forget('email');
        session()->flash('message', 'Logout successful');
        $this->emit('cerrarSesion'); // Emitting a Livewire event


        return view('index');

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
