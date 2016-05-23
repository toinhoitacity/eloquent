<?php

use Illuminate\Database\Seeder;
use eloquent\Models\DepartamentoModel;

class DepartamentoSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departamento = new DepartamentoModel();
        $departamento->nome = "Vendas";
        $departamento->save();
        
        $departamento = new DepartamentoModel();
        $departamento->nome = "Tecnologia da Informação";
        $departamento->save();
    }
}
