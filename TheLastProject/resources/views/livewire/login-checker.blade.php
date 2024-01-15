<!-- resources/views/livewire/login-checker.blade.php -->

<div>
    @if($isLoggedIn)
        <p>¡Hola, {{ Auth::user()->name }}! Estás autenticado.</p>
        <button wire:click="logout">Cerrar sesión</button>
    @else
        <p>No estás autenticado. Por favor, inicia sesión.</p>

        <form wire:submit.prevent="login">
            <input type="email" wire:model="email" placeholder="Correo electrónico">
            @error('email') <span>{{ $message }}</span> @enderror

            <input type="password" wire:model="password" placeholder="Contraseña">
            @error('password') <span>{{ $message }}</span> @enderror

            <button type="submit">Iniciar sesión</button>
        </form>
    @endif
</div>
