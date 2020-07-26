<?php

use Illuminate\Database\Seeder;

use App\Models\VagaEmprego;
use App\Models\VagaEmpregoImagem;

class VagaEmpregoImagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (VagaEmprego::all() as $vaga) {
            $n_imgs = rand(1,5);
            $imgs = [];

            $principal = true;

            for ($i = 0; $i < $n_imgs; $i++) {
                $imgs[] = [
                    'vaga_emprego_id' => $vaga->id,
                    'url' => 'https://picsum.photos/168/105',
                    'principal' => $principal
                ];

                $principal = false;
            }


            $images = VagaEmpregoImagem::insert($imgs);
        }
    }
}
