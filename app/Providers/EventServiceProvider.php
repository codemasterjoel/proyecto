<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

use App\Models\RegistroLuchador;
use App\Models\cne;
use App\Models\Integrante;
use App\Models\NBC;
use App\Models\postulacion;
use App\Models\registro1x10ffm;
use App\Models\Saime;
use App\Models\User;
use App\Observers\LuchadorObserver;
use App\Observers\cneObserver;
use App\Observers\IntegranteObserver;
use App\Observers\NBCObserver;
use App\Observers\PostulacionObserver;
use App\Observers\Registro1x10ffmsObserver;
use App\Observers\SaimeObserver;
use App\Observers\UserObserver;

class EventServiceProvider extends ServiceProvider
{

    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    public function boot():void 
    {
        RegistroLuchador::observe(LuchadorObserver::class);
        cne::observe(cneObserver::class);
        Integrante::observe(IntegranteObserver::class);
        NBC::observe(NBCObserver::class);
        postulacion::observe(postulacionObserver::class);
        registro1x10ffm::observe(Registro1x10ffmsObserver::class);
        Saime::observe(SaimeObserver::class);
        User::observe(UserObserver::class);
    }
}
