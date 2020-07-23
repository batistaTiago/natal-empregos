<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GCVagaEmprego extends Model
{
    protected $table = 'g_c_vaga_emprego';

    public function regime() {
        return $this->belongsTo(GCRegimeContratacao::class, 'regime_contratacao_id');
    }
}
