<?php

namespace App\Http\Livewire\Luchador;

use Livewire\Component;

use App\Models\RegistroLuchador;
use App\Models\Estado;
use App\Models\Municipio;
use App\Models\Parroquia;
use App\Models\Genero;
use App\Models\Avanzada;
use App\Models\NivelAcademico;
use App\Models\Responsabilidad;
use App\Models\Saime;

use Ramsey\Uuid\Uuid;
use Livewire\WithPagination;
use Barryvdh\DomPDF\Facade\Pdf;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $modal, $estado, $filtro = false;
    public $municipios  = null; // Liste de Municipios
    public $estados     = null; // Lista de estados
    public $parroquias  = null; // Lista de parroquias
    public $nivelesAcademicos = null; //Niveles Academicos
    public $responsabilidades = null; //Responsabilidades
    public $cedula = null; //Cedula
    public $avanzadas = null; //Avanzadas
    public $correo = null; //Correo
    public $fechaNacimiento = null; //Fecha Nacimiento
    public $nombreCompleto = null; //Nombres
    public $generos = null; //Genero
    public $estatus = null; //Estatus
    public $telefono = null; //Telefono
    public $id = null; //Id
    public $search = "";
    public $estadoId, $municipioId, $parroquiaId, $nivelAcademicoId, $responsabilidadId, $avanzadaId, $generoId = null; //Id que recibo de los campos

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $lsbs = RegistroLuchador::where('cedula', 'like', "%$this->search%")
        ->paginate(5);
        $this->estados = Estado::all();
        $this->nivelesAcademicos = NivelAcademico::all();
        $this->responsabilidades = Responsabilidad::all();
        $this->avanzadas = Avanzada::all();
        $this->generos = Genero::all();

        return view('livewire.luchador.index', ['lsbs'=>$lsbs]);
    }
    public function crear()
    {
        $this->limpiarCampos();
        $this->abrirModal();
    }
    public function verfiltro()
    {
        if ($this->filtro) {
            $this->filtro = false;
        } else {
            $this->filtro = true;
        }
    } 
    public function abrirModal() 
    {
        $this->modal = true;
    }
    public function cerrarModal() 
    {
        $this->modal = false;
    }
    public function limpiarCampos()
    {
        $this->estatus = false;
        $this->cedula = null;
        $this->nombreCompleto = null;
        $this->fechaNacimiento = null;
        $this->telefono = null;
        $this->correo = null;
        $this->avanzadaId = null;
        $this->generoId = null;
        $this->nivelAcademicoId = null;
        $this->responsabilidadId = null;
        $this->estadoId = null;
        $this->municipioId = null;
        $this->parroquiaId = null;
    }
    public function updatedEstadoId($id)
    {
        $this->municipioId = null;
        $this->parroquiaId = null;
        $this->municipios = Municipio::where('estado_id', $id)->get();
    }
    public function updatedMunicipioId($id)
    {
        $this->parroquiaId = null;
        $this->parroquias = Parroquia::where('municipio_id', $id)->get();
    }
    public function consultar()
    {
        
        $existelsb = RegistroLuchador::where('cedula', '=', $this->cedula)->get();
        
        if (count($existelsb) > 0) //se encuentra registrado como jefe
        {
            session()->flash('yaregistrado', 'yaregistrado');
            // $this->cerrarFormulario();
            // $this->existelsb2 = $existelsb;
        } else 
        {
            $saime = Saime::where('cedula', '=', $this->cedula)->get();
            if (count($saime) > 0) {
                $saime = $saime->first();
                // dd($saime);
                $this->nombreCompleto = $saime->nombre1." ".$saime->nombre2." ".$saime->apellido1." ".$saime->apellido2;
                $this->generoId = $saime->genero_id;
                $this->fechaNacimiento = $saime->fecha_nac;
            } else {
                session()->flash('noencontrada', 'noencontrada');
            }
        }

    }
    public function editar($id)
    {
        $lsb = RegistroLuchador::findOrFail($id);

        $this->id = $id;
        $this->estatus = $lsb->estatus;
        $this->cedula = $lsb->cedula;
        $this->nombreCompleto = $lsb->NombreCompleto;
        $this->fechaNacimiento = $lsb->fecha_nac;
        $this->telefono = $lsb->telefono;
        $this->correo = $lsb->correo;
        $this->avanzadaId = $lsb->avanzada_id;
        $this->generoId = $lsb->genero_id;
        $this->nivelAcademicoId = $lsb->nivel_academico_id;
        $this->responsabilidadId = $lsb->responsabilidad_id;
        $this->estadoId = $lsb->estado_id;
        $this->municipioId = $lsb->municipio_id;
        $this->municipios = Municipio::where('estado_id', $lsb->estado_id)->get();
        $this->parroquiaId = $lsb->parroquia_id;
        $this->parroquias = Parroquia::where('municipio_id', $lsb->municipio_id)->get();

        $this->abrirModal();
    }
    public function guardar()
    {
        $lsb = RegistroLuchador::updateOrCreate(['id' => $this->id],
            [
            'estatus' => $this->estatus,
            'cedula' => $this->cedula,
            'NombreCompleto' => $this->nombreCompleto,
            'fecha_nac' => $this->fechaNacimiento,
            'telefono' => $this->telefono,
            'correo' => $this->correo,
            'avanzada_id' => $this->avanzadaId,
            'genero_id' => $this->generoId,
            'nivel_academico_id' => $this->nivelAcademicoId,
            'responsabilidad_id' => $this->responsabilidadId,
            'estado_id' => $this->estadoId,
            'municipio_id' => $this->municipioId,
            'parroquia_id' => $this->parroquiaId
        ]);
         
        session()->flash('success', 'success');
         
         $this->cerrarModal();
         $this->limpiarCampos();
    }
    public function borrar($id)
    {
        RegistroLuchador::find($id)->delete();
        session()->flash('integranteEliminado', 'success');
    }
    public function fichalsb($id)
    {
        $lsbs = RegistroLuchador::find($id);

        // return view('reportes.lsb');
        $pdf = Pdf::loadView('livewire.reportes.lsb', ['lsb'=>$lsbs]);
        set_time_limit(0);
        ini_set("memory_limit",-1);
        ini_set('max_execution_time', 0);
        return response()->streamDownload(function () use ($pdf) {
            echo $pdf->stream();
        }, 'aaa.pdf');
    }
}
