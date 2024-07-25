<div class="main-content mt-5">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div>
                        <h5 class="mb-2">REGISTRO SAIME</h5>
                    </div>
                    <div class="d-flex flex-row justify-content-between">
                        <input wire:model.live="search" type="text" placeholder="Filtrar por Cedula" class="w-30 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500">
                        <button wire:click="crear()" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; NUEVO REGISTRO</button>
                    </div>
                </div>
                @if(session()->has('message')== 'success')
                    @include('livewire.components.success')
                @endif
                @if(session()->has('message')== 'delete')
                    @include('livewire.components.delete')
                @endif
                @if($modal)
                    @include('livewire.saime.crear')
                @endif  
                
                @if ($saimes->count())
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">nacionalidad</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">cèdula</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nombre</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">apellido</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">genero</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $indice =0; ?>
                                    @foreach ($saimes as $saime)
                                    <?php $indice += 1; ?>
                                    <tr><td class="ps-4"><p class="text-xs font-weight-bold mb-0"><?php echo $indice; ?></p></td>
                                        <td class="text-center text-uppercase"><p class="text-xs font-weight-bold mb-0">{{$saime->letra}}</p></td>
                                        <td class="text-center text-uppercase"><p class="text-xs font-weight-bold mb-0">{{$saime->cedula}}</p></td>
                                        <td class="text-center text-uppercase"><p class="text-xs font-weight-bold mb-0">{{$saime->nombre1." ".$saime->nombre2}}</p></td>
                                        <td class="text-center text-uppercase"><p class="text-xs font-weight-bold mb-0">{{$saime->apellido1." ".$saime->apellido2}}</p></td>
                                        <td class="text-center text-uppercase"><p class="text-xs font-weight-bold mb-0">{{$saime->genero->nombre}}</p></td>
                                        <td class="text-center"><a href="#" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Editar Saime">
                                            <a wire:click="editar('{{$saime->id}}')" class=" text-success px-2 py-1 mb-0" type="button"><span class="material-symbols-outlined">person_edit</span></a>
                                            <a wire:click="borrar('{{$saime->id}}')" class=" text-danger font-bold py-2 px-4"><span class="material-symbols-outlined">person_cancel</span></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                         {{$saimes->links()}}
                    </div>
                @else
                    <div class="card-dody px-4 pt-2 py-8 pb-2">
                        <strong class="px-4 mt-8">No existen Resultados</strong>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>