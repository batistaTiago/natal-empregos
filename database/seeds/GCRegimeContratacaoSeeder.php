<?php

use Illuminate\Database\Seeder;

use App\Models\GCRegimeContratacao;

class GCRegimeContratacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GCRegimeContratacao::insert([
            [
                'nome' => 'CLT'
            ],
            [
                'nome' => 'PJ'
            ]
        ]);
    }
}
