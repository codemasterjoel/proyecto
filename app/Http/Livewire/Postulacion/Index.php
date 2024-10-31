<?php

namespace App\Http\Livewire\Postulacion;

use Livewire\Component;
use App\Models\Estado;
use App\Models\Municipio;
use App\Models\Parroquia;
use App\Models\Genero;
use App\Models\NivelAcademico;
use App\Models\postulacion;

use Ramsey\Uuid\Uuid;

class Index extends Component
{
    public $modal, $estado, $modalReset = false;
    public $estados, $municipios, $parroquias, $nivelesAcademicos, $generos = null; // Listas desplegables
    public $cedula = null; //Cedula
    public $telefono = null; //Telefono
    public $correo = null; //Correo
    public $fechaNacimiento = null; //Fecha Nacimiento
    public $nombreCompleto = null; //Nombres
    public $direccion = null; //Direccion
    public $estadoId, $municipioId, $parroquiaId, $nivelAcademicoId, $generoId = null; //Id que recibo de las listas desplegables

    public function mount()
    {
        $this->fill(['cedula' => '5555', 'nombreCompleto' => 'Juanito', 'fechaNacimiento'=>'1990-10-17', 'generoId' => '1', 'telefono' => '(0000) 000-0000', 'correo' => 'usuario@gmail.com', 'direccion' => 'calle 10', 'nivelAcademicoId' => '1', 'estadoId' => '2']);
    }

    protected $rules = [
        'cedula' => 'required|min:7|max:8',
    ];

    public function render()
    {
        $this->estados = Estado::all();
        $this->nivelesAcademicos = NivelAcademico::all();
        $this->generos = Genero::all();

        return view('livewire.postulacion.index')->layout('layouts.single');
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
    public function guardar()
    {
        $this->validate();
        
        $lsb = postulacion::create([
            'id' => Uuid::uuid4()->toString(),
            'cedula' => $this->cedula,
            'NombreCompleto' => $this->nombreCompleto,
            'fecha_nac' => $this->fechaNacimiento,
            'telefono' => $this->telefono,
            'correo' => $this->correo,
            'genero_id' => $this->generoId,
            'nivel_academico_id' => $this->nivelAcademicoId,
            'estado_id' => $this->estadoId,
            'municipio_id' => $this->municipioId,
            'parroquia_id' => $this->parroquiaId,
            'direccion' => $this->direccion
        ]);
         
        session()->flash('success', 'success');
         
        return redirect('login');
         $this->cerrarModal();
         $this->limpiarCampos();
    }
    public function limpiarCampos()
    {
        $this->cedula = null;
        $this->nombreCompleto = null;
        $this->fechaNacimiento = null;
        $this->telefono = null;
        $this->correo = null;
        $this->generoId = null;
        $this->nivelAcademicoId = null;
        $this->estadoId = null;
        $this->municipioId = null;
        $this->parroquiaId = null;
        $this->direccion = null;
    }
    public function cerrarModal() 
    {
        $this->modal = false;
    }
}
