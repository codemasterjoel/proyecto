<div class="main-content mt-5">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <a href="#" wire:click="ver('luchador')" class="btn bg-gradient-success active mb-0 text-white" role="button" aria-pressed="true">LUCHADORES</a>
                    <a href="#" wire:click="ver('formacion')" class="btn bg-gradient-warning active mb-0 text-white" role="button" aria-pressed="true">FORMACIÓN</a>
                    <a href="#" wire:click="ver('postulados')" class="btn bg-gradient-danger active mb-0 text-white" role="button" aria-pressed="true">POSTULADOS</a>
                    @if($modalLuchador)
                        @include('livewire.formacion.verlsb')   
                    @endif  
                    @if ($data == 'postulados')
                        <div class="mt-4">
                            <h3 class="text-2xl text-cyan-400 font-semibold text-center">LISTADO DE POSTULADOS</h3>
                        </div>
                        <div class="d-flex flex-row justify-content-between">
                            <input wire:model.live="search" type="text" placeholder="Filtrar por Cedula" class="w-30 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500">
                        </div>
                        @if ($postulados->count())
                            <div class="card-body px-0 pt-0 pb-2">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">cedula</th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nombre</th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">estado</th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">municipio</th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">parroquia</th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">estatus</th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $indice =0; ?>
                                            @foreach ($postulados as $postulado)
                                            <?php $indice += 1; ?>
                                            <tr><td class="ps-4"><p class="text-xs font-weight-bold mb-0"><?php echo $indice; ?></p></td>
                                                <td class="text-center text-uppercase"><p class="text-xs font-weight-bold mb-0">{{$postulado->cedula}}</p></td>
                                                <td class="text-center text-uppercase"><p class="text-xs font-weight-bold mb-0">{{$postulado->NombreCompleto}}</p></td>
                                                <td class="text-center text-uppercase"><p class="text-xs font-weight-bold mb-0">{{$postulado->estado->nombre}}</p></td>
                                                <td class="text-center text-uppercase"><p class="text-xs font-weight-bold mb-0">{{$postulado->municipio->nombre}}</p></td>
                                                <td class="text-center text-uppercase"><p class="text-xs font-weight-bold mb-0">{{$postulado->parroquia->nombre}}</p></td>
                                                <td class="text-center text-uppercase"><p class="text-xs font-weight-bold mb-0 {{$postulado->estatus ? 'text-cyan-500 bg-cyan-100' : 'text-red-500 bg-red-100'}} rounded-lg">{{$postulado->estatus ? 'activo' : 'inactivo'}}</p></td>
                                                <td class="text-center"><a href="#" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Editar postulado">
                                                    <a wire:click="verPostulado('{{$postulado->id}}')" class=" text-success px-2 py-1 mb-0" type="button"><span class="material-symbols-outlined">person_edit</span></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                {{-- {{$postulados->links()}} --}}
                            </div>
                        @else
                            <div class="card-dody px-4 pt-2 py-8 pb-2">
                                <strong class="px-4 mt-8">No existen Resultados</strong>
                            </div>
                        @endif
                    @elseif ($data == 'formacion')
                        <div class="mt-4">
                            <h3 class="text-2xl text-cyan-400 font-semibold text-center">LISTADO DE PERSONAS EN FORMACIÓN</h3>
                        </div>
                    @elseif ($data == 'luchador')
                        <div class="mt-4">
                            <h3 class="text-2xl text-cyan-400 font-semibold text-center">LISTADO DE LUCHADORES</h3>
                        </div>
                        <div class="d-flex flex-row justify-content-between">
                            <input wire:model.live="search" type="text" placeholder="Filtrar por Cedula" class="w-30 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500">
                        </div>
                        @if ($lsbs->count())
                            <div class="card-body px-0 pt-0 pb-2">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">foto</th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nombre</th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">estado</th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">municipio</th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">parroquia</th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">estatus</th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $indice =0; ?>
                                            @foreach ($lsbs as $lsb)
                                            <?php $indice += 1; ?>
                                            <tr><td class="ps-4"><p class="text-xs font-weight-bold mb-0"><?php echo $indice; ?></p></td>
                                                <td><div><img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3"></div></td>
                                                <td class="text-center text-uppercase"><p class="text-xs font-weight-bold mb-0">{{$lsb->NombreCompleto}}</p></td>
                                                <td class="text-center text-uppercase"><p class="text-xs font-weight-bold mb-0">{{$lsb->estado->nombre}}</p></td>
                                                <td class="text-center text-uppercase"><p class="text-xs font-weight-bold mb-0">{{$lsb->municipio->nombre}}</p></td>
                                                <td class="text-center text-uppercase"><p class="text-xs font-weight-bold mb-0">{{$lsb->parroquia->nombre}}</p></td>
                                                <td class="text-center text-uppercase"><p class="text-xs font-weight-bold mb-0 {{$lsb->estatus ? 'text-cyan-500 bg-cyan-100' : 'text-red-500 bg-red-100'}} rounded-lg">{{$lsb->estatus ? 'activo' : 'inactivo'}}</p></td>
                                                <td class="text-center"><a href="#" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Editar lsb">
                                                    <a wire:click="verLuchador('{{$lsb->id}}')" class=" text-success px-2 py-1 mb-0" type="button"><span class="material-symbols-outlined">person_edit</span></a>
                                                    <a wire:click="verLuchador('{{$lsb->id}}')" rel="tooltip" title="Generar Ficha" type="button" class="text-warning font-bold py-2 px-2"><i class="material-icons">contact_page</i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                {{-- {{$lsbs->links()}} --}}
                            </div>
                        @else
                            <div class="card-dody px-4 pt-2 py-8 pb-2">
                                <strong class="px-4 mt-8">No existen Resultados</strong>
                            </div>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>