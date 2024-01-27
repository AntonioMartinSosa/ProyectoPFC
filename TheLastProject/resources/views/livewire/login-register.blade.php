<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            @if(session()->has('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
        </div>
    </div>

    @if($registerForm)
        <form class="mt-4">
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" id="name" name="name" class="form-control" wire:model="name" autocomplete="name" placeholder="Ingresa tu nombre">
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" id="email" name="email" class="form-control" wire:model="email" autocomplete="email" placeholder="TuCorreo@example.com">
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" id="password" name="password" class="form-control" wire:model="password" autocomplete="new-password" placeholder="********">
                @error('password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="nombre_empresa" class="form-label">Nombre de la Empresa</label>
                <input type="text" id="nombre_empresa" name="nombre_empresa" class="form-control" wire:model="nombre_empresa" autocomplete="organization" placeholder="Nombre de tu empresa">
                @error('nombre_empresa')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" id="telefono" name="telefono" class="form-control" wire:model="telefono" autocomplete="tel" placeholder="Número de teléfono">
                @error('telefono')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="text-center">
                <button type="button" class="btn btn-primary btn-block" wire:click.prevent="registerStore">Registrarse</button>
            </div>

            <div class="text-center mt-3">
                <p class="text-muted">¿Ya tienes cuenta? <a class="text-primary" wire:click.prevent="register"><strong>Iniciar Sesión</strong></a></p>
            </div>
        </form>
    @else
        <form class="mt-4">
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" id="email" name="email" class="form-control" wire:model="email" autocomplete="email" placeholder="TuCorreo@example.com">
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" id="password" name="password" class="form-control" wire:model="password" autocomplete="new-password" placeholder="********">
                @error('password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="text-center">
                <button type="button" class="btn btn-success btn-block" wire:click.prevent="login">Iniciar Sesión</button>
            </div>

            <div class="text-center mt-3">
                <p class="text-muted">¿No tienes cuenta?</p> <a class="btn btn-primary btn-sm" wire:click.prevent="register"><strong>Regístrate</strong></a>
            </div>
        </form>
    @endif
</div>
