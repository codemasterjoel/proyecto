<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use App\Models\Estado;
use App\Models\Municipio;
use App\Models\Parroquia;
use App\Models\Genero;
use App\Models\NivelAcademico;
use App\Models\postulacion;

use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\Mail;

use App\Mail\UserCreated;
use App\Mail\resetMail;

class Login extends Component
{
    public $email = '';
    public $password = '';
    public $remember_me = false;  
    public $modal, $estado, $modalReset = false;
    public $estados, $municipios, $parroquias, $nivelesAcademicos, $generos = null; // Listas desplegables
    public $cedula = null; //Cedula
    public $telefono = null; //Telefono
    public $correo = null; //Correo
    public $fechaNacimiento = null; //Fecha Nacimiento
    public $nombreCompleto = null; //Nombres
    public $direccion = null; //Direccion
    public $estadoId, $municipioId, $parroquiaId, $nivelAcademicoId, $generoId = null; //Id que recibo de las listas desplegables
    public $showSuccesNotification, $showFailureNotification = false;

    protected $rules = [
        'email' => 'required|email:rfc,dns',
        'password' => 'required',
    ];

    public function mount() 
    {
        if(auth()->user()){
            redirect('/dashboard');
        }
        $this->fill(['email' => 'admin@email.com', 'password' => '21246813']);
    }
    public function login() 
    {    
        $user = User::where('email', '=', $this->email)->first();
        
        if($user->email == $this->email and password_verify($this->password, $user->password)) 
        {
            auth()->login($user, $this->remember_me);
            return redirect()->intended('/dashboard'); 

        }else
        {
            return $this->addError('email', trans('auth.failed')); 
        }
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
    public function crear()
    {
        
        $this->abrirModal();
    }
    public function abrirModal() 
    {
        $this->estados = Estado::all();
        $this->nivelesAcademicos = NivelAcademico::all();
        $this->generos = Genero::all();

        $this->modal = true;
    }
    public function cerrarModal() 
    {
        $this->modal = false;
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
         
         $this->cerrarModal();
         $this->limpiarCampos();
    }
    public function resetPassword()
    {
        $this->modalReset = true;
    }
    public function recoverPassword()
    {
        $user = User::where('email', '=', $this->email)->first();
        
        //dd($user);

        if(isset($user))
        {
            //dd($user->email);
            //return view('livewire.auth.reset');
            Mail::to($user->email)->send(new resetMail());
            $this->showSuccesNotification = true;
        }
        else
        {
            $this->showFailureNotification = true;
        }
    }
}
