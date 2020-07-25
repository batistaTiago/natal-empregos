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
                'empresa' => 'Garantistas Coding LTDA',
                'titulo' => 'Analista de Banco de Dados',
                'sub_titulo' => 'Garantistas CORPs',
                'local' => 'Alecrim',
                'descricao' => 'Analise de banco de dados e infraestrutura',
                'observacoes' => 'Vale refeicao, vale transporte',
                'regime_contratacao_id' => 1, // CLT
                'remuneracao' => 16200
            ],
            [
                'empresa' => 'Garantistas Coding LTDA',
                'titulo' => 'Web Designer',
                'sub_titulo' => 'Garantistas CORPs',
                'local' => 'Pronta Negra',
                'descricao' => 'AdobeXD e photoshop, se souber html e css eh um bonus',
                'observacoes' => 'Vale refeicao, vale transporte',
                'regime_contratacao_id' => 2, // CLT
                'remuneracao' => 420
            ],
            [
                'empresa' => 'Garantistas Coding LTDA',
                'titulo' => 'ASG',
                'sub_titulo' => 'Garantistas CORPs',
                'local' => 'Macaiba',
                'descricao' => 'Tia da limpeza',
                'observacoes' => 'Vale refeicao, vale transporte',
                'regime_contratacao_id' => 1, // CLT
                'remuneracao' => 4.20
            ]
        ]);
    }
}
