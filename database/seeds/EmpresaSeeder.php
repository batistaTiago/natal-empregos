<?php

use Illuminate\Database\Seeder;

use App\Models\Empresa;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Empresa::insert([
            [
                'nome' => 'Garantistas Coding Corp',
                'nome_fantasia' => 'GCC',
                'cpnj' => '420'
            ]
        ]);
    }
}
