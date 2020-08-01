<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VagaEmpregoBeneficio extends Model
{
    protected $table = 'vaga_emprego_beneficio';



    public static function getAllByVagaId($vagaId)
    {
        $allBeneficios = self::where('vaga_emprego_id', $vagaId)->get();

        return $allBeneficios;
    }
}
