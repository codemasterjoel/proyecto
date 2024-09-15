<?php

namespace App\Http\Livewire\Formacion;

use Livewire\Component;
use App\Models\RegistroLuchador;
use Livewire\WithPagination;
use App\Models\postulacion;
use App\Models\Estado;
use App\Models\Municipio;
use App\Models\Parroquia;
use App\Models\Genero;
use App\Models\Avanzada;
use App\Models\NivelAcademico;
use App\Models\Responsabilidad;


class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $modalLuchador, $verPostulado, $verFormador = false;
    public $municipios, $municipio  = null; // Liste de Municipios
    public $estados, $estado     = null; // Lista de estados
    public $parroquias, $parroquia  = null; // Lista de parroquias
    public $nivelesAcademicos, $nivelAcademico = null; //Niveles Academicos
    public $responsabilidades, $responsabilidad = null; //Responsabilidades
    public $cedula = null; //Cedula
    public $avanzadas, $avanzada = null; //Avanzadas
    public $correo = null; //Correo
    public $fechaNacimiento = null; //Fecha Nacimiento
    public $nombreCompleto = null; //Nombres
    public $generos, $genero = null; //Genero
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
        $lsb = RegistroLuchador::findOrFail($id);

        $this->id = $id;
        $this->estatus = $lsb->estatus;
        $this->cedula = $lsb->cedula;
        $this->nombreCompleto = $lsb->NombreCompleto;
        $this->fechaNacimiento = $lsb->fecha_nac;
        $this->telefono = $lsb->telefono;
        $this->correo = $lsb->correo;
        $this->avanzada = $lsb->avanzada->nombre;
        $this->genero = $lsb->genero->nombre;
        $this->nivelAcademico = $lsb->nivelAcademico->nombre;
        $this->responsabilidad = $lsb->responsabilidad->nombre;
        $this->estado = $lsb->estado->nombre;
        $this->municipio = $lsb->municipio->nombre;
        $this->parroquia = $lsb->parroquia->nombre;

        $this->abrirModalLuchador();
    }
    public function abrirModalLuchador() 
    {
        $this->modalLuchador = true;
    }
    public function cerrarModalLuchador() 
    {
        $this->modalLuchador = false;
    }
}
