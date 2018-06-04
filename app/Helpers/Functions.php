<?php

namespace App\Helpers;

use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class Functions
{
    /**
     * @return string
     */
    public static function percent($value, $total)
    {

        if ($total == 0) {
            return 0;
        }
        $values = ($value * 100) / $total;
        return number_format($values, 0, ".", "");
    }

    /**
     * Retorna o status da vaquinha.
     *
     * @param $status
     *
     * @return string
     */
    public static function status($status)
    {
        if ($status == "aberta") {
            $st = '<span class="badge badge-success">Aberta</span>';
        }elseif($status == "fechada"){
            $st = '<span class="badge badge-danger">Fechada</span>';
        }

        return $st;
    }

    /**
     * Retorna o status do usuário.
     *
     * @param $status
     *
     * @return string
     */
    public static function statusUsers($status)
    {
        if ($status == 0) {
            $st = '<span class="badge badge-success">Ativo</span>';
        }else{
            $st = '<span class="badge badge-danger">Bloqueado</span>';
        }

        return $st;
    }

    /**
     *  Verifica quantidade de dias da última contribuição.
     *
     * @param $date
     *
     * @return string
     */
    public static function diffDateContri($date)
    {
        $today = Carbon::now();
        $diff = new Carbon($date);
        return ($date!=""?$diff->diffForHumans($today):" - ");
    }

    /**
     * Retorna o tipo de usuário para apresentação.
     *
     * @param string $type
     *
     * @return string
     */
    public static function typeUser($type)
    {
        if ($type == 'administrador') {
            $st = '<span class="badge badge-warning"><i class="fa fa-user-secret"></i> Administrador</span>';
        }else{
            $st = '<span class="badge badge-info"><i class="fa fa-user"></i> Usuário</span>';
        }

        return $st;
    }

}