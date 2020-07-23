<?php

use Illuminate\Database\Seeder;

use App\Models\GCVagaEmprego;

class GCVagaEmpregoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GCVagaEmprego::insert([
            [
                'titulo' => 'Analista de Banco de Dados',
                'sub_titulo' => 'Garantistas CORPs',
                'regime_contratacao_id' => 1, // CLT
                'remuneracao' => 16200
            ],
            [
                'titulo' => 'Web Designer',
                'sub_titulo' => 'Garantistas CORPs',
                'regime_contratacao_id' => 2, // CLT
                'remuneracao' => 420
            ],
            [
                'titulo' => 'ASG',
                'sub_titulo' => 'Garantistas CORPs',
                'regime_contratacao_id' => 1, // CLT
                'remuneracao' => 4.20
            ]
        ]);
        
    }
}
