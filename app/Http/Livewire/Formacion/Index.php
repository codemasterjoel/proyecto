<?php

namespace App\Http\Livewire\Formacion;

use Livewire\Component;
use App\Models\RegistroLuchador;
use Livewire\WithPagination;
use App\Models\Avanzada;
use App\Models\NivelAcademico;
use App\Models\Responsabilidad;


class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $verLuchador, $verPostulado, $verFormador = false;
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
    
    public $search = "";
    public $data = "luchador";

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $lsbs = RegistroLuchador::where('cedula', 'like', "%$this->search%")
        ->paginate(5);
        $postulados = postulacion::where('cedula', 'like', "%$this->search%")
        ->paginate(5);

        return view('livewire.formacion.index', ['lsbs'=>$lsbs, 'postulados'=>$postulados]);
    }
    public function ver($campo) 
    {
        $this->data = $campo;
    }

    public function verLuchador($id)
    {
        dd($id);
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

        $this->abrirModalLuchador();
    }
    public function abrirModalLuchador() 
    {
        $this->verLuchador = true;        
    }
}
