<?php
namespace App\Traits;

trait CalcuFechaFin{
    /**
     * calcula los dias de fin de la suscripcion 
     * en base a la duracion del plan
     * retorna la fecha de fin
     */
    public function CfechaFin($plan){
        $fecha_ini = Date('Y-m-d');

        if($plan->duracion=='mes'){
            $fecha_final = Date('Y-m-d',strtotime($fecha_ini."+ 1 month"));
        }elseif ($plan->duracion=='trimestral') {
            $fecha_final = Date('Y-m-d',strtotime($fecha_ini."+ 3 month"));
        }elseif ($plan->duracion=='semestral') {
            $fecha_final = Date('Y-m-d',strtotime($fecha_ini."+ 6 month"));
        }elseif ($plan->duracion=='anual'){
            $fecha_final = Date('Y-m-d',strtotime($fecha_ini."+ 1 year"));
        }

        return $fecha_final;
    }
}