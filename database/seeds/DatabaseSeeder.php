<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsuarioSeeder::class);
        $this->call(RegimeContratacaoSeeder::class);
        $this->call(ContatoSeeder::class);

        $this->call(BeneficioSeeder::class);
        $this->call(EmpresaSeeder::class);
        $this->call(VagaEmpregoSeeder::class);
    }
}
