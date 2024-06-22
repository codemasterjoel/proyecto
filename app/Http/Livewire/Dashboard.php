<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\registro1x10ffm;
use App\Models\Integrante;

use DB;

class Dashboard extends Component
{
    public $jefe, $integrante = null;
    public $jefexestado, $integrantexestado = null;

    public function render()
    {
        $this->jefe = registro1x10ffm::all();
        $this->integrante = Integrante::all();

        $this->jefexestado = DB::select('SELECT COUNT(*) as jefes, estados.nombre from registro1x10ffms INNER JOIN estados on registro1x10ffms.estado_id = estados.id GROUP BY estados.nombre');
        $this->integrantexestado = DB::select('select estados.nombre, count(*) as integrantes from integrantes inner join registro1x10ffms on integrantes.jefe_id = registro1x10ffms.id INNER join estados on registro1x10ffms.estado_id = estados.id GROUP BY estados.nombre');
        return view('livewire.dashboard');
    }
}
