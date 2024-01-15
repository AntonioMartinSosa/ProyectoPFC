<!-- resources/views/livewire/login-checker.blade.php -->

<div>
    @if($isLoggedIn)
        <p>¡Hola, {{ Auth::user()->name }}! Estás autenticado.</p>
        <button wire:click="logout">Cerrar sesión</button>
    @else
        <p>No estás autenticado. Por favor, inicia sesión.</p>
        <!-- Agrega aquí tu formulario de inicio de sesión -->
    @endif
</div>
