<?php

use App\Models\VagaEmprego;
use App\Models\VagaEmpregoBeneficio;
use Illuminate\Database\Seeder;

class VagaEmpregoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $d = [
            [
                'id' => 1,
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
                'id' => 2,
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
                'id' => 3,
                'empresa_id' => 1,
                'titulo' => 'ASG',
                'sub_titulo' => 'Garantistas CORPs',
                'descricao' => 'Tia da limpeza',
                'observacoes' => 'Vale refeicao, vale transporte',
                'regime_contratacao_id' => 1, // CLT
                'remuneracao' => 4.20,
                'aceita_remoto' => false,
            ],
        ];

        try {

            DB::beginTransaction();

            foreach ($d as $data) {

                $vaga = new VagaEmprego($data);
                
                $temVR = rand(0, 1);
                $temVT = rand(0, 1);

                $beneficios = [];

                if (rand(0, 1)) {
                    // tem VA
                    $beneficios[] = [
                        'beneficio_id' => 1, // VA
                        'vaga_emprego_id' => $vaga->id,
                        'valor' => rand(0, 420),
                    ];
                }

                if (rand(0, 1)) {
                    // tem VR
                    $beneficios[] = [
                        'beneficio_id' => 2, // VR
                        'vaga_emprego_id' => $vaga->id,
                        'valor' => rand(0, 420),
                    ];
                }

                if (rand(0, 1)) {
                    // tem VA
                    $beneficios[] = [
                        'beneficio_id' => 3, // VT
                        'vaga_emprego_id' => $vaga->id,
                        'valor' => rand(0, 420),
                    ];
                }

                $vaga->save();
                VagaEmpregoBeneficio::insert($beneficios);
            }

            DB::commit();

        } catch (\Throwable $e) {
            DB::rollBack();

            throw $e;
        }
    }
}
