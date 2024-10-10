<div class="fixed z-50 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0 min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px] min-[992px]:max-w-[800px] min-[1200px]:max-w-[1140px]">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-xl sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">    
            <div class="min-h-screen flex justify-center">
                <div class="p-4 w-full bg-white rounded-lg">
                    <div class="flex justify-center">
                        <img src="{{asset('img/logo.svg')}}" class="w-52">
                    </div>
                    <h3 class="text-xl text-red-500 font-semibold">INGRESE EL CORREO PARA RECUPERAR LA CONTRASEÑA.</h3>
                    <div class="card card-plain">
                        <div class="card-body">
                            <form>
                                <div>
                                    <label for="email">{{ __('Correo') }}</label>
                                    <div class="@error('email')border border-danger rounded-3 @enderror">
                                        <input wire:model.live="email" id="email" type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                                    </div>
                                    @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class="text-center">
                                    <button wire:click.prevent="recoverPassword()" type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">{{ __('Recuperar Contraseña') }}</button>
                                </div>
                            </form>
                            @if ($showSuccesNotification)
                                <div wire:model.live="showSuccesNotification" class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
                                    <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                                    <span class="alert-text text-white uppercase">se ha enviado un correo para cambiar la contraseña</span>
                                    <button wire:click="$set('showSuccesNotification', false)" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            @if ($showFailureNotification)
                                <div wire:model.live="showFailureNotification" class="mt-3 alert alert-danger alert-dismissible fade show" role="alert">
                                    <span class="alert-text text-white uppercase">este correo no se encuentra registrado</span>
                                    <button wire:click="$set('showFailureNotification', false)" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><strong>X</strong></button>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>