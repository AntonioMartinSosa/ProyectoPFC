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
                <label for="name" class="form-label">name</label>
                <input type="text" class="form-control" wire:model="name">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3 ">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" wire:model="email">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" wire:model="password">
                @error('password')
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
                        <input type="email" class="form-control" wire:model="email">
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                </div>
                <div class="mb-3">
                    <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" wire:model="password">
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
                    NO TIENE CUENTA  <a class="btn text-white btn-sm  btn-primary" wire:click.prevent="register"><strong>Click aqui</strong></a>
                </div>
            </div>

        </form>
    @endif
</div>
