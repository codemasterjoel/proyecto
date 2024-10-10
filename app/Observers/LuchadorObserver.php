<?php

namespace App\Observers;

use App\Models\RegistroLuchador;
use App\Models\Auditoria;

class LuchadorObserver
{
    public function created(RegistroLuchador $registroLuchador): void
    {
        Auditoria::create([
            'accion' => 'creado',
            'model_type' => get_class($registroLuchador),
            'model_id' => $registroLuchador->id,
            'user_id' => auth()->user()->id,
            'cambios' => json_encode($registroLuchador->toArray())
        ]);
    }
    public function updated(RegistroLuchador $registroLuchador): void
    {
        //
    }
    public function deleted(RegistroLuchador $registroLuchador): void
    {
        //
    }
    public function restored(RegistroLuchador $registroLuchador): void
    {
        //
    }
    public function forceDeleted(RegistroLuchador $registroLuchador): void
    {
        //
    }
}
