<div>

    <div class="row">
        <div class="col-md-12">
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
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" name="name" class="form-control" wire:model="name" autocomplete="name">
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" wire:model="email" autocomplete="email">
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" wire:model="password" autocomplete="new-password">
                @error('password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="nombre_empresa" class="form-label">Nombre de la Empresa</label>
                <input type="text" id="nombre_empresa" name="nombre_empresa" class="form-control" wire:model="nombre_empresa" autocomplete="organization">
                @error('nombre_empresa')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" id="telefono" name="telefono" class="form-control" wire:model="telefono" autocomplete="tel">
                @error('telefono')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-md-12 text-center">
                <button type="button" class="btn btn-primary" wire:click.prevent="registerStore">Registrarse</button>
            </div>

            <div class="col-md-12 text-center">
                <a class="text-primary" wire:click.prevent="register"><strong>Login</strong></a>
            </div>
        </form>
    @else
        <form>
            <div class="row">
                <div class="mb-3">
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control" wire:model="email" autocomplete="email">
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control" wire:model="password" autocomplete="new-password">
                        @error('password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <button type="button" class="btn text-white btn-success" wire:click.prevent="login">Login</button>
                </div>
                <div class="col-md-12 text-center">
                    <br>
                    NO TIENE CUENTA  <a class="btn text-white btn-sm  btn-primary" wire:click.prevent="register"><strong>Click aquí</strong></a>
                </div>
            </div>
        </form>
    @endif
</div>
