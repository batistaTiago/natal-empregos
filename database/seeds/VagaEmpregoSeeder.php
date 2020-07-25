<?php

use Illuminate\Database\Seeder;

use App\Models\VagaEmprego;

class VagaEmpregoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VagaEmprego::insert([
            [
                'empresa_id' => 1,
                'titulo' => 'Analista de Banco de Dados',
                'sub_titulo' => 'Garantistas CORPs',
                'descricao' => 'Analise de banco de dados e infraestrutura',
                'observacoes' => 'Vale refeicao, vale transporte',
                'regime_contratacao_id' => 1, // CLT
                'remuneracao' => 16200,
                'aceita_remoto' => true,
            ],
            [
                'empresa_id' => 1,
                'titulo' => 'Web Designer',
                'sub_titulo' => 'Garantistas CORPs',
                'descricao' => 'AdobeXD e photoshop, se souber html e css eh um bonus',
                'observacoes' => 'Vale refeicao, vale transporte',
                'regime_contratacao_id' => 2, // CLT
                'remuneracao' => 420,
                'aceita_remoto' => true,
            ],
            [
                'empresa_id' => 1,
                'titulo' => 'ASG',
                'sub_titulo' => 'Garantistas CORPs',
                'descricao' => 'Tia da limpeza',
                'observacoes' => 'Vale refeicao, vale transporte',
                'regime_contratacao_id' => 1, // CLT
                'remuneracao' => 4.20,
                'aceita_remoto' => false,
            ]
        ]);
    }
}
