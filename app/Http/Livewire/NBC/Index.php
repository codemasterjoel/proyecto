<?php

namespace App\Livewire\NBC;

use Livewire\Component;

use App\Models\NBC;
use App\Models\RegistroLuchador;
use App\Models\Estado;
use App\Models\Municipio;
use App\Models\Parroquia;

use Ramsey\Uuid\Uuid;
use Livewire\WithPagination;

class Index extends Component
{
    public $modal, $PoseeOrganizador, $PoseeFormador, $PoseeMovilizador, $PoseeDefensa, $PoseeProductivo = false;
    public $ContentOrganizador = false;
    public $FormOrganizador = false;
    public $estados     = null; // Lista de estados
    public $municipios  = null; // Liste de Municipios
    public $parroquias  = null; // Lista de parroquias
    public $CedulaJefe, $CedulaOrganizador, $CedulaFormador, $CedulaMolizador, $CedulaDefensa, $CedulaProductivo = null; //Cedula
    public $NombreNBC = null; // Nombre del NBC
    public $CantConsejoComunal, $CantBaseMisiones, $CantUrbanismo, $CantCDI = null;
    public $NombreJefe, $NombreOrganizador, $NombreFormador, $NombreMovilizador, $NombreDefensa, $NombreProductivo = null; // Cedula

    public $estadoId, $municipioId, $parroquiaId = null; //Id que recibo de los campos

    public function render()
    {
        $nbcs = NBC::all();
        $this->estados = Estado::all();
        return view('livewire.n-b-c.index', ['nbcs' => $nbcs])->layout('layouts.app');
    }
    public function crear()
    {
        // $this->limpiarCampos();
        $this->abrirModal();
    }
    public function abrirModal() 
    {
        $this->modal = true;
    }
    public function organizador() 
    {
        $this->ModalOrganizador = true;
    }
    public function cerrarModal() 
    {
        $this->modal = false;
    }
    public function limpiarCampos()
    {
        // $this->estatus = false;
        // $this->cedula = null;
        // $this->nombreCompleto = null;
        // $this->fechaNacimiento = null;
        // $this->telefono = null;
        // $this->correo = null;
        // $this->avanzadaId = null;
        // $this->generoId = null;
        // $this->nivelAcademicoId = null;
        // $this->responsabilidadId = null;
        // $this->estadoId = null;
        // $this->municipioId = null;
        // $this->parroquiaId = null;
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
        $saime = Saime::where('cedula', '=', $this->cedula)->firstOrFail();
        $this->nombreCompleto = $saime->nombre1." ".$saime->nombre2." ".$saime->apellido1." ".$saime->apellido2;
        $this->generoId = $saime->genero_id;
        $this->fechaNacimiento = $saime->fecha_nac;
    }
    public function editar($id)
    {
        $nbc = NBC::findOrFail($id);

        $this->id = $id;
        $this->NombreNBC = $nbc->nombre;
        $this->CedulaJefe = $nbc->jefe->cedula;
        $this->CedulaOrganizador = $nbc->organizador->cedula;
        $this->CedulaFormador = $nbc->formador->cedula;
        $this->CedulaMovilizador = $nbc->movilizador->cedula;
        $this->CedulaDefensa = $nbc->defensa->cedula;
        $this->CedulaProductivo = $nbc->productivo->cedula;

        $this->NombreJefe = $nbc->jefe->NombreCompleto;
        $this->NombreOrganizador = $nbc->organizador->NombreCompleto;
        $this->NombreFormador = $nbc->formador->NombreCompleto;
        $this->NombreMovilizador = $nbc->movilizador->NombreCompleto;
        $this->NombreDefensa = $nbc->defensa->NombreCompleto;
        $this->NombreProductivo = $nbc->productivo->NombreCompleto;

        $this->estadoId = $nbc->estado_id;
        $this->municipioId = $nbc->municipio_id;
        $this->municipios = Municipio::where('estado_id', $nbc->estado_id)->get();
        $this->parroquiaId = $nbc->parroquia_id;
        $this->parroquias = Parroquia::where('municipio_id', $nbc->municipio_id)->get();

        $this->CantConsejoComunal = $nbc->cant_consejos_comunales;
        $this->CantBaseMisiones = $nbc->cant_bases_misiones;
        $this->CantUrbanismo = $nbc->cant_urbanismos;
        $this->CantCDI = $nbc->cant_cdi;

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
         
         session()->flash('message', 'success');
         
         $this->cerrarModal();
         $this->limpiarCampos();
    }
    public function borrar($id)
    {
        RegistroLuchador::find($id)->delete();
        session()->flash('message', 'delete');
    }
    public function MenuOrganizador()
    {
        if ($this->ContentOrganizador) {
            $this->ContentOrganizador = false; 
        } else {
            $this->ContentOrganizador = true; 
        }
    }
    public function poseeOrganizador()
    {
        if ($this->FormOrganizador) {
            $this->FormOrganizador = false;
        } else {
            $this->FormOrganizador = true;
        }
    } 
}
