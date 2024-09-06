<div class="fixed z-50 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0 min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px] min-[992px]:max-w-[800px] min-[1200px]:max-w-[1140px]">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        @if(session()->has('yaregistrado')== 'yaregistrado')
        @include('livewire.components.yaregistrado')
    @endif
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-4xl sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">    
            <div class="min-h-screen flex items-center justify-center">
                <div class="p-4 w-full bg-white rounded-lg">
                    <div class="flex items-center justify-center">
                        <img src="{{asset('img/logo.svg')}}" class="w-52">
                    </div>
                    <h3 class="text-2xl text-cyan-400 font-semibold text-center">REGISTRAR NUEVO NUCLEO DE BASE COMUNITARIO</h3>
                    <form>
                        <div class=" flex items-stretch pt-4"> {{-- campo Nombre del NBC --}}
                            <span class="flex bg-cyan-300 font-semibold text-white items-center whitespace-nowrap rounded-l-lg border border-r-0 border-solid border-neutral-300 px-3 py-[0.25rem] text-center text-base leading-[1.6] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">Nombre del nbc</span>
                            <input wire:model="NombreNBC" type="text" class="w-full flex-auto relative bg-white pl-2 text-base border rounded-r-lg font-semibold outline-0 border-slate-200" />
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
                                        <input wire:model="CantConsejoComunal" type="number" placeholder="Consejos Comunales" class="w-full bg-white pl-2 text-base border font-semibold outline-0 rounded-lg border-slate-200">
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-center py-4"> {{-- campo base de misiones --}}
                                <div class="w-full rounded-lg bg-gray-500">
                                    <div class="flex">
                                        <input wire:model="CantBaseMisiones" type="number" placeholder="Bases de Misiones" class="w-full bg-white pl-2 text-base border font-semibold outline-0 rounded-lg border-slate-200">
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-center py-4"> {{-- campo urbanismos --}}
                                <div class="w-full rounded-lg bg-gray-500">
                                    <div class="flex">
                                        <input wire:model="CantUrbanismo" type="number" placeholder="Urbanismos" class="w-full bg-white pl-2 text-base border font-semibold outline-0 rounded-lg border-slate-200">
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-center py-4"> {{-- campo cdi --}}
                                <div class="w-full rounded-lg bg-gray-500">
                                    <div class="flex">
                                        <input wire:model="CantCDI" type="number" placeholder="CDI" class="w-full bg-white pl-2 text-base border font-semibold outline-0 rounded-lg border-slate-200">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4"> {{-- campo cedula --}}
                            <div class="flex items-center justify-center py-4">
                                <div class="w-full rounded-lg bg-gray-500">
                                    <div class="flex">
                                        <input wire:model="CedulaJefe" type="number" placeholder="Cedula Jefe de Nucleo" class="w-full bg-white pl-2 text-base border font-semibold outline-0 rounded-tl-lg rounded-bl-lg border-slate-200">
                                        <input wire:click="consultar('jefe')" type="button" value="Buscar" class="bg-gradient-primary p-2 rounded-tr-lg rounded-br-lg text-white font-semibold transition-colors">
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-center"> {{-- campo Nombre --}}
                                <div class="w-full rounded-lg bg-gray-500">
                                  <div class="flex">
                                    <span class="bg-cyan-300 p-2 rounded-tl-lg rounded-bl-lg text-white font-semibold hover:bg-cyan-500 transition-colors">Nombre</span>
                                    <input wire:model="NombreJefe" type="text" class="w-full bg-white pl-2 text-base border rounded-r-lg font-semibold outline-0 border-slate-200" />
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
                                <a class="nav-link" wire:click="MenuOrganizador" href="#">
                                  <div class=" bg-gradient-info rounded-t-lg py-3 px-1 text-white">
                                    <div class="card-icon text-center">
                                      <i class="material-icons">groups</i><br>ORGANIZADOR
                                    </div>
                                  </div>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" wire:click="MenuFormador" data-toggle="tab" href="#">
                                  <div class=" bg-gradient-primary rounded-t-lg py-3 px-3 text-white">
                                    <div class="card-icon text-center">
                                      <i class="material-icons">auto_stories</i><br>FORMADOR
                                    </div>
                                  </div>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" wire:click="MenuMovilizacion" data-toggle="tab" href="#">
                                  <div class=" bg-gradient-secondary rounded-t-lg py-3 px-1 text-white">
                                    <div class="card-icon text-center">
                                      <i class="material-icons">directions_run</i><br>MOVILIZADOR
                                    </div>
                                  </div>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" wire:click="MenuDefensa" data-toggle="tab" href="#">
                                  <div class=" bg-gradient-success rounded-t-lg py-3 px-4 text-white">
                                    <div class="card-icon text-center">
                                      <i class="material-icons">military_tech</i><br>DEFENSA  
                                    </div>
                                  </div>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" wire:click="MenuProductivo" data-toggle="tab" href="#">
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
                                    <input type="checkbox" value="1" class="peer sr-only" wire:model.live="PoseeOrganizador" />
                                    <div class="peer flex h-8 flex-row-reverse items-center gap-4 rounded-full bg-cyan-600 px-3 after:absolute after:left-1 after: after:h-6 after:w-10 after:rounded-full after:bg-white/40 after:transition-all after:content-[''] peer-checked:bg-orange-600 cheked value='0' peer-checked:after:translate-x-full peer-focus:outline-none text-white">
                                        <span>SI</span>
                                        <span>NO</span>
                                    </div><h5 class="p-2"> Posee Organizador?</h5>
                                  </label>

                                  @if ($FormOrganizador)
                                    <div class="grid grid-cols-2 gap-4"> {{-- campo cedula --}}
                                      <div class="flex items-center justify-center py-4">
                                          <div class="w-full rounded-lg bg-gray-500">
                                              <div class="flex">
                                                  <input wire:model="CedulaOrganizador" type="number" placeholder="Cedula Organizador del Nucleo" class="w-full bg-white pl-2 text-base border font-semibold outline-0 rounded-tl-lg rounded-bl-lg border-slate-200">
                                                  <input wire:click="consultar('organizador')" type="button" value="Buscar" class="bg-gradient-primary p-2 rounded-tr-lg rounded-br-lg text-white font-semibold transition-colors">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="flex items-center justify-center"> {{-- campo Nombre --}}
                                        <div class="w-full rounded-lg bg-gray-500">
                                          <div class="flex">
                                            <span class="bg-cyan-300 p-2 rounded-tl-lg rounded-bl-lg text-white font-semibold hover:bg-cyan-500 transition-colors">Nombre</span>
                                            <input wire:model="NombreOrganizador" type="text" class="w-full bg-white pl-2 text-base border rounded-r-lg font-semibold outline-0 border-slate-200" />
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  @endif
                              @endif
                              {{-- PESTANA FORMADOR --}}
                              @if ($ContentFormador)
                                <br><h4 class="text-info">DATOS DEL FORMADOR DE NBC</h4>
                                <label class="relative inline-flex cursor-pointer items-center pb-4 py-4 "> {{-- campo activo --}}
                                  <input type="checkbox" value="1" class="peer sr-only" wire:model.live="PoseeFormador" />
                                  <div class="peer flex flex-row-reverse h-8 items-center gap-4 rounded-full bg-cyan-600 px-3 after:absolute after:left-1 after: after:h-6 after:w-10 after:rounded-full after:bg-white/40 after:transition-all after:content-[''] peer-checked:bg-orange-600 cheked value='0' peer-checked:after:translate-x-full peer-focus:outline-none text-white">
                                      <span>SI</span>
                                      <span>NO</span>
                                  </div><h5 class="p-2"> Posee Formador?</h5>
                                </label>

                                @if ($FormFormador)
                                  <div class="grid grid-cols-2 gap-4"> {{-- campo cedula --}}
                                    <div class="flex items-center justify-center py-4">
                                        <div class="w-full rounded-lg bg-gray-500">
                                            <div class="flex">
                                                <input wire:model="CedulaFormador" type="number" placeholder="Cedula Formador del Nucleo" class="w-full bg-white pl-2 text-base border font-semibold outline-0 rounded-tl-lg rounded-bl-lg border-slate-200">
                                                <input wire:click="consultar('formador')" type="button" value="Buscar" class="bg-gradient-primary p-2 rounded-tr-lg rounded-br-lg text-white font-semibold transition-colors">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-center"> {{-- campo Nombre --}}
                                      <div class="w-full rounded-lg bg-gray-500">
                                        <div class="flex">
                                          <span class="bg-cyan-300 p-2 rounded-tl-lg rounded-bl-lg text-white font-semibold hover:bg-cyan-500 transition-colors">Nombre</span>
                                          <input wire:model="NombreFormador" type="text" class="w-full bg-white pl-2 text-base border rounded-r-lg font-semibold outline-0 border-slate-200" />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                @endif
                              @endif
                              {{-- PESTANA MOVILIZADOR --}}
                              @if ($ContentMovilizador)
                                <br><h4 class="text-info">DATOS DEL MOVILIZADOR DE NBC</h4>
                                <label class="relative inline-flex cursor-pointer items-center pb-4 py-4 "> {{-- campo activo --}}
                                  <input type="checkbox" value="1" class="peer sr-only" wire:model.live="PoseeMovilizador" />
                                  <div class="peer flex flex-row-reverse h-8 items-center gap-4 rounded-full bg-cyan-600 px-3 after:absolute after:left-1 after: after:h-6 after:w-10 after:rounded-full after:bg-white/40 after:transition-all after:content-[''] peer-checked:bg-orange-600 cheked value='0' peer-checked:after:translate-x-full peer-focus:outline-none text-white">
                                      <span>SI</span>
                                      <span>NO</span>
                                  </div><h5 class="p-2"> Posee Movilizador?</h5>
                                </label>

                                @if ($FormMovilizador)
                                  <div class="grid grid-cols-2 gap-4"> {{-- campo cedula --}}
                                    <div class="flex items-center justify-center py-4">
                                        <div class="w-full rounded-lg bg-gray-500">
                                            <div class="flex">
                                                <input wire:model="CedulaMovilizador" type="number" placeholder="Cedula Movilizador del Nucleo" class="w-full bg-white pl-2 text-base border font-semibold outline-0 rounded-tl-lg rounded-bl-lg border-slate-200">
                                                <input wire:click="consultar('movilizador')" type="button" value="Buscar" class="bg-gradient-primary p-2 rounded-tr-lg rounded-br-lg text-white font-semibold transition-colors">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-center"> {{-- campo Nombre --}}
                                      <div class="w-full rounded-lg bg-gray-500">
                                        <div class="flex">
                                          <span class="bg-cyan-300 p-2 rounded-tl-lg rounded-bl-lg text-white font-semibold hover:bg-cyan-500 transition-colors">Nombre</span>
                                          <input wire:model="NombreMovilizador" type="text" class="w-full bg-white pl-2 text-base border rounded-r-lg font-semibold outline-0 border-slate-200" />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                @endif
                              @endif
                              {{-- PESTANA DEFENSA --}}
                              @if ($ContentDefensa)
                                <br><h4 class="text-info">DATOS DE EL DE DEFENSA DE NBC</h4>
                                <label class="relative inline-flex cursor-pointer items-center pb-4 py-4 "> {{-- campo activo --}}
                                  <input type="checkbox" value="1" class="peer sr-only" wire:model.live="PoseeDefensa" />
                                  <div class="peer flex flex-row-reverse h-8 items-center gap-4 rounded-full bg-cyan-600 px-3 after:absolute after:left-1 after: after:h-6 after:w-10 after:rounded-full after:bg-white/40 after:transition-all after:content-[''] peer-checked:bg-orange-600 cheked value='0' peer-checked:after:translate-x-full peer-focus:outline-none text-white">
                                      <span>SI</span>
                                      <span>NO</span>
                                  </div><h5 class="p-2"> Posee el de Defensa?</h5>
                                </label>

                                @if ($FormDefensa)
                                  <div class="grid grid-cols-2 gap-4"> {{-- campo cedula --}}
                                    <div class="flex items-center justify-center py-4">
                                        <div class="w-full rounded-lg bg-gray-500">
                                            <div class="flex">
                                                <input wire:model="CedulaDefensa" type="number" placeholder="Cedula Defensa del Nucleo" class="w-full bg-white pl-2 text-base border font-semibold outline-0 rounded-tl-lg rounded-bl-lg border-slate-200">
                                                <input wire:click="consultar('defensa')" type="button" value="Buscar" class="bg-gradient-primary p-2 rounded-tr-lg rounded-br-lg text-white font-semibold transition-colors">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-center"> {{-- campo Nombre --}}
                                      <div class="w-full rounded-lg bg-gray-500">
                                        <div class="flex">
                                          <span class="bg-cyan-300 p-2 rounded-tl-lg rounded-bl-lg text-white font-semibold hover:bg-cyan-500 transition-colors">Nombre</span>
                                          <input wire:model="NombreDefensa" type="text" class="w-full bg-white pl-2 text-base border rounded-r-lg font-semibold outline-0 border-slate-200" />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                @endif
                              @endif
                              {{-- PESTANA PRODUCTIVO --}}
                              @if ($ContentProductivo)
                                <br><h4 class="text-info">DATOS DEL PRODUCTOR DE NBC</h4>
                                <label class="relative inline-flex cursor-pointer items-center pb-4 py-4 "> {{-- campo activo --}}
                                  <input type="checkbox" value="1" class="peer sr-only" wire:model.live="PoseeProductivo" />
                                  <div class="peer flex flex-row-reverse h-8 items-center gap-4 rounded-full bg-cyan-600 px-3 after:absolute after:left-1 after: after:h-6 after:w-10 after:rounded-full after:bg-white/40 after:transition-all after:content-[''] peer-checked:bg-orange-600 cheked value='0' peer-checked:after:translate-x-full peer-focus:outline-none text-white">
                                      <span>SI</span>
                                      <span>NO</span>
                                  </div><h5 class="p-2"> Posee Productor?</h5>
                                </label>

                                @if ($FormProductivo)
                                  <div class="grid grid-cols-2 gap-4"> {{-- campo cedula --}}
                                    <div class="flex items-center justify-center py-4">
                                        <div class="w-full rounded-lg bg-gray-500">
                                            <div class="flex">
                                                <input wire:model="CedulaProductivo" type="number" placeholder="Cedula Productor del Nucleo" class="w-full bg-white pl-2 text-base border font-semibold outline-0 rounded-tl-lg rounded-bl-lg border-slate-200">
                                                <input wire:click="consultar('productor')" type="button" value="Buscar" class="bg-gradient-primary p-2 rounded-tr-lg rounded-br-lg text-white font-semibold transition-colors">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-center"> {{-- campo Nombre --}}
                                      <div class="w-full rounded-lg bg-gray-500">
                                        <div class="flex">
                                          <span class="bg-cyan-300 p-2 rounded-tl-lg rounded-bl-lg text-white font-semibold hover:bg-cyan-500 transition-colors">Nombre</span>
                                          <input wire:model="NombreProductivo" type="text" class="w-full bg-white pl-2 text-base border rounded-r-lg font-semibold outline-0 border-slate-200" />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                @endif
                              @endif
                            <div class="row">
                              <div class="col-sm-12">
                                <div class="font-weight-bold text-white text-center"><h3>GEOREFERENCIACION</h3></div>
                              </div>
                            </div>
                            <div class="items-center">
                                <div id="map" style="width: 100%; height: 500px;"></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-6">
                                  <label>COORDENADA UTM</label>
                                  <input style="width: 500px;" type="text" name="latitud" id="latitud" class="form-control" required>
                                  <input style="width: 500px;" type="text" name="longitud" id="longitud" class="form-control" required>
                                </div>
                              </div>
                              <div class="px-4 py-3 sm:px-6 sm:flex">                                  
                                <span class="flex w-full rounded-md sm:ml-3 sm:w-auto">
                                    <button type="submit" class="w-32 bg-gradient-to-r from-cyan-400 to-cyan-600 text-white py-2 rounded-lg mx-auto block focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mb-2" wire:click.prevent="guardar()"  >GUARDAR</button>
                                  </span>
                                <span class="flex w-full rounded-md sm:ml-3 sm:w-auto">
                                    <button type="button" class="w-32 bg-gradient-to-r from-red-400 to-red-600 text-white py-2 rounded-lg mx-auto block focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mb-2" wire:click="cerrarModal()">SALIR</button>
                                  </span>
                                </div>
                              </div>
                        </div>
                      </form>
                </div>
            </div>
          </div>
        </div>
      </div>
      @push('js')
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZhH6WXRQpmvkrpZ6w-kBIQTqOwHuPncI&v=weekly&loading=async"></script>

      @script
        <script>
            console.log("Listo");
            var marker;
            var coords = {};
            initMap = function () 
              {
                navigator.geolocation.getCurrentPosition(
                function (position){
                  coords =  {
                    lng: position.coords.longitude,
                    lat: position.coords.latitude
                  };
                  setMapa(coords);
                },function(error){console.log(error);});
              }
              function setMapa (coords)
                {
                  var map = new google.maps.Map(document.getElementById('map'),
                    {
                      zoom: 13,
                      center:new google.maps.LatLng(coords.lat,coords.lng),
                    });
                  marker = new google.maps.Marker({
                    map: map,
                    draggable: true,
                    animation: google.maps.Animation.DROP,
                    position: new google.maps.LatLng(coords.lat,coords.lng),
                  });
                  marker.addListener( 'dragend', function (event)
                    {
                      document.getElementById("latitud").value = this.getPosition().lat();
                      document.getElementById("longitud").value = this.getPosition().lng();
                    });
                }
        </script>
      @endscript
@endpush