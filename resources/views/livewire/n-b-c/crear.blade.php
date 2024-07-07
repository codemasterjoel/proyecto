<div class="fixed z-50 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0 min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px] min-[992px]:max-w-[800px] min-[1200px]:max-w-[1140px]">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-4xl sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">    
            <div class="min-h-screen flex items-center justify-center">
                <div class="p-4 w-full bg-white rounded-lg">
                    <div class="flex items-center justify-center">
                        <img src="{{asset('img/logo.svg')}}" class="w-52">
                    </div>
                    <h3 class="text-2xl text-cyan-400 font-semibold text-center">REGISTRAR NUEVO NUCLEO DE BASE COMUNITARIO</h3>
                    <form>
                        <div class="relative flex flex-wrap items-stretch pt-4"> {{-- campo Nombre del NBC --}}
                            <span class="flex bg-cyan-300 font-semibold text-white items-center whitespace-nowrap rounded-l-lg border border-r-0 border-solid border-neutral-300 px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">Nombre del nbc</span>
                            <input wire:model="NombreNBC" type="text" class="rounded-0 relative m-0 block w-[1px] min-w-0 flex-auto border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary" />
                        </div>
                        <div class="grid grid-cols-3 gap-4 pt-4">
                            <div class="flex items-center justify-center"> {{-- campo estado --}}
                                <div class="w-full rounded-lg bg-gray-500">
                                <div class="flex">
                                    <span class="bg-cyan-300 p-2 rounded-tl-lg rounded-bl-lg text-white font-semibold hover:bg-cyan-500 transition-colors">Estado</span>
                                    <select class="w-full px-4 py-2 border rounded-r-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" wire:model.live="estadoId" required>
                                        <option value="">Seleccione</option>
                                        @foreach( $estados as $estado )
                                            <option value="{{ $estado->id }}">{{ $estado->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                </div>
                            </div>

                            @if (!is_null($municipios)) {{-- campo municipio --}}
                                <div class="flex items-center justify-center">
                                    <div class="w-full rounded-lg bg-gray-500">
                                    <div class="flex">
                                        <span class="bg-cyan-300 p-2 rounded-tl-lg rounded-bl-lg text-white font-semibold hover:bg-cyan-500 transition-colors">Municipio</span>
                                        <select class="w-full px-4 py-2 border rounded-r-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" wire:model.live="municipioId" required>
                                            <option value="">Seleccione</option>
                                            @foreach( $municipios as $municipio )
                                                <option value="{{ $municipio->id }}">{{ $municipio->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    </div>
                                </div>
                            @endif

                            @if (!is_null($parroquias)) {{-- campo Parroquia --}}
                                <div class="flex items-center justify-center">
                                    <div class="w-full rounded-lg bg-gray-500">
                                    <div class="flex">
                                        <span class="bg-cyan-300 p-2 rounded-tl-lg rounded-bl-lg text-white font-semibold hover:bg-cyan-500 transition-colors">Parroquia</span>
                                        <select class="w-full px-4 py-2 border rounded-r-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" wire:model="parroquiaId" required>
                                            <option value="">Seleccione</option>
                                            @foreach( $parroquias as $parroquia )
                                            <option value="{{ $parroquia->id }}">{{ $parroquia->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="grid grid-cols-4 gap-4 pt-4">
                            <div class="flex items-center justify-center py-4"> {{-- campo consejo comunales --}}
                                <div class="w-full rounded-lg bg-gray-500">
                                    <div class="flex">
                                        <input wire:model="CantConsejoComunal" type="number" placeholder="Consejos Comunales" class="w-full bg-white pl-2 text-base font-semibold outline-0 rounded-lg border-slate-200">
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-center py-4"> {{-- campo base de misiones --}}
                                <div class="w-full rounded-lg bg-gray-500">
                                    <div class="flex">
                                        <input wire:model="CantBaseMisiones" type="number" placeholder="Bases de Misiones" class="w-full bg-white pl-2 text-base font-semibold outline-0 rounded-lg border-slate-200">
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-center py-4"> {{-- campo urbanismos --}}
                                <div class="w-full rounded-lg bg-gray-500">
                                    <div class="flex">
                                        <input wire:model="CantUrbanismo" type="number" placeholder="Urbanismos" class="w-full bg-white pl-2 text-base font-semibold outline-0 rounded-lg border-slate-200">
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-center py-4"> {{-- campo cdi --}}
                                <div class="w-full rounded-lg bg-gray-500">
                                    <div class="flex">
                                        <input wire:model="CantCDI" type="number" placeholder="CDI" class="w-full bg-white pl-2 text-base font-semibold outline-0 rounded-lg border-slate-200">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4"> {{-- campo cedula --}}
                            <div class="flex items-center justify-center py-4">
                                <div class="w-full rounded-lg bg-gray-500">
                                    <div class="flex">
                                        <input wire:model="CedulaJefe" type="number" placeholder="Cedula Jefe de Nucleo" class="w-full bg-white pl-2 text-base font-semibold outline-0 rounded-tl-lg rounded-bl-lg border-slate-200">
                                        <input wire:click="consultar" type="button" value="Buscar" class="bg-gradient-primary p-2 rounded-tr-lg rounded-br-lg text-white font-semibold transition-colors">
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-center"> {{-- campo Correo --}}
                                <div class="w-full rounded-lg bg-gray-500">
                                  <div class="flex">
                                    <span class="bg-cyan-300 p-2 rounded-tl-lg rounded-bl-lg text-white font-semibold hover:bg-cyan-500 transition-colors">Nombre</span>
                                    <input wire:model="NombreJefe" type="text" class="w-full bg-white pl-2 text-base rounded-r-lg font-semibold outline-0 border-slate-200" />
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card-subcategories card-plain">
                          <div class="card-header">
                            <h2 class="card-title text-dark text-center">ESTRUCTURA DEL NUCLEO DE BASE COMUNITARIO</h2>
                          </div>
                          <div class="card-body">
                            <ul class="nav nav-pills-primary nav-pills-icons justify-content-center">
                              <li class="nav-item">
                                <a wire:click="MenuOrganizador" href="#">
                                  <div class=" bg-gradient-info rounded-t-lg py-3 px-1 text-white">
                                    <div class="card-icon text-center">
                                      <i class="material-icons">groups</i><br>ORGANIZADOR
                                    </div>
                                  </div>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#formador">
                                  <div class=" bg-gradient-primary rounded-t-lg py-3 px-3 text-white">
                                    <div class="card-icon text-center">
                                      <i class="material-icons">auto_stories</i><br>FORMADOR
                                    </div>
                                  </div>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link show" data-toggle="tab" href="#movilizador">
                                  <div class=" bg-gradient-secondary rounded-t-lg py-3 px-1 text-white">
                                    <div class="card-icon text-center">
                                      <i class="material-icons">directions_run</i><br>MOVILIZADOR
                                    </div>
                                  </div>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#defensa">
                                  <div class=" bg-gradient-success rounded-t-lg py-3 px-4 text-white">
                                    <div class="card-icon text-center">
                                      <i class="material-icons">military_tech</i><br>DEFENSA  
                                    </div>
                                  </div>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link show" data-toggle="tab" href="#productivo">
                                  <div class=" bg-gradient-danger rounded-t-lg py-3 px-2 text-white">
                                    <div class="card-icon text-center">
                                      <i class="material-icons">grass</i><br>PRODUCTIVO
                                    </div>
                                  </div>
                                </a>
                              </li>
                            </ul>
                              {{-- PESTANA ORGANIZADOR --}}
                              @if ($ContentOrganizador)
                                  <br><h4 class="text-info">DATOS DEL ORGANIZADOR DE NBC</h4>
                                  <label class="relative inline-flex cursor-pointer items-center pb-4 py-4 "> {{-- campo activo --}}
                                    <input type="checkbox" value="1" class="peer sr-only" wire:click="PoseeOrganizador" />
                                    <div class="peer flex h-8 items-center gap-4 rounded-full bg-cyan-600 px-3 after:absolute after:left-1 after: after:h-6 after:w-10 after:rounded-full after:bg-white/40 after:transition-all after:content-[''] peer-checked:bg-orange-600 cheked value='0' peer-checked:after:translate-x-full peer-focus:outline-none text-white">
                                        <span>SI</span>
                                        <span>NO</span>
                                    </div><h5 class="p-2"> Posee Organizador?</h5>
                                  </label>

                                  @if ($FormOrganizador)
                                    <div id="poseeOrganizador">
                                      <div class="rows">
                                        <div class="col-3">
                                          <div class="form-group label-floating">
                                            <label class="bmd-label-floating">CÉDULA:</label>
                                            <input type="number" class="form-control" name="organizadorCedula" id="organizadorCedula">
                                          </div>
                                        </div>
                                        <div class="col-1">
                                          <button class="btn btn-fab btn-round btn-primary" id="buscar_org" name="buscar_org" type="button" title="BUSCAR"><i class="material-icons">search</i></button>
                                        </div>
                                      </div><br>
                                      <div class="rows">
                                        <div class="col-7">
                                          <div class="form-group">
                                            <label>NOMBRE COMPLETO:</label><br>
                                            <label id="OrganizadorNombreCompleto" name="OrganizadorNombreCompleto" class="text-dark"></label>
                                            <input type="hidden" name="lsb_organizador" id="lsb_organizador">
                                          </div>
                                        </div>
                                        <div class="col-2">
                                          <div class="form-group">
                                            <label>FECHA DE NAC.:</label><br>
                                            <label id="OrganizadorFechaNac" name="OrganizadorFechaNac" class="text-dark"></label>
                                          </div>
                                        </div>
                                        <div class="col-3">
                                          <div class="form-group">
                                            <label>GENERO:</label><br>
                                            <label id="OrganizadorGenero" name="OrganizadorGenero" class="text-dark"></label>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="rows">
                                        <div class="col-2">
                                          <div class="form-group">
                                            <label>TELEFONO:</label><br>
                                            <label class="text-dark" name="OrganizadorTelefono" id="OrganizadorTelefono"></label>
                                          </div>
                                        </div>
                                        <div class="col-6">
                                          <div class="form-group">
                                            <label for="correo">CORREO:</label><br>
                                            <label class="text-dark" name="OrganizadorCorreo" id="OrganizadorCorreo"></label>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  @endif
                              @endif
                          </div>
                        </div>
                        <div class="px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <span class="flex w-full rounded-md sm:ml-3 sm:w-auto">
                                <button type="button" class="w-32 bg-gradient-to-r from-red-400 to-red-600 text-white py-2 rounded-lg mx-auto block focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mb-2" wire:click="cerrarModal()">SALIR</button>
                            </span>
                            <span class="flex w-full rounded-md sm:ml-3 sm:w-auto">
                                <button type="submit" class="w-32 bg-gradient-to-r from-cyan-400 to-cyan-600 text-white py-2 rounded-lg mx-auto block focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mb-2" wire:click.prevent="guardar()"  >GUARDAR</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>