<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresa';

    public function vagas()
    {
        return $this->hasMany(VagaEmprego::class);
    }
}
