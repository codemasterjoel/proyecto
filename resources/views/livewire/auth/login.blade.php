<section>
    @if($modal)
        @include('livewire.postulacion.index')
    @endif
    @if($modalReset)
        @include('livewire.auth.reset')
    @endif
    @if(session()->has('success')== 'success')
        @include('livewire.components.success')
    @endif
    <div class="nav-item mr-8 d-flex align-self-end p-4 absolute flex z-40">
        <a href="#" wire:click="crear()" class=" text-red-500 mb-0 text-bold text-uppercase absolute" role="button" aria-pressed="true">Postulate!!</a>
    </div>
    <div class="page-header section-height-75">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                    <div class="card card-plain mt-2">
                        <div class="card-header pb-0 text-left bg-transparent">
                            <img src="{{asset('img/logo.svg')}}" class="navbar-brand-img h-100">
                        </div>
                        <div class="card-body">
                            <form wire:submit="login" action="#" method="POST" role="form text-left">
                                <div class="mb-3">
                                    <label for="email">{{ __('Correo') }}</label>
                                    <div class="@error('email')border border-danger rounded-3 @enderror">
                                        <input wire:model.live="email" id="email" type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                                    </div>
                                    @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password">{{ __('Contraseña') }}</label>
                                    <div class="@error('password')border border-danger rounded-3 @enderror">
                                        <input wire:model.live="password" id="password" type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                                    </div>
                                    @error('password') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class=" text-end -mt-3">
                                    <a href="#" wire:click="resetPassword()" class=" text-red-500 text-uppercase" role="button" aria-pressed="true">¿Olvido la Contraseña?</a>
                                </div>
                                <div class="text-center">
                                    <button type="submit"
                                        class="btn bg-gradient-danger w-100 mt-4 mb-0">{{ __('Ingresar') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                        <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('../assets/img/curved-images/fondo_login.jpg')"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
