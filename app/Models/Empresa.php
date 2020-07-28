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
    /**
     * Busca empresa por nome, se não achar, cria uma nova e retorna já salvando no banco
     */
    public static function procurarPorNomeOuCriar($nome)
    {
        $slug = \slugify($nome);

        try {
            $empresa = Empresa::where('slug', $slug)->first();
            if (!isset($empresa)) {
                $empresa = new Empresa(compact('nome', 'slug'));
                $empresa->save();
            }
        } catch (\Throwable $e) {
            $empresa = null;
        }
        return $empresa;
    }
}
