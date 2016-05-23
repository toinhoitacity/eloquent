<?php

use Illuminate\Database\Seeder;
use eloquent\Models\FuncionarioModel;

class FuncionarioSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $funcionario = new FuncionarioModel();
        $funcionario->nome = "Anthony Richard";
        $funcionario->idade = 18;
        $funcionario->id_departamento = 1;
        $funcionario->save();
        
        $funcionario = new FuncionarioModel();
        $funcionario->nome = "Beatriz Carvalho";
        $funcionario->idade = 23;
        $funcionario->id_departamento = 1;
        $funcionario->save();
        
        $funcionario = new FuncionarioModel();
        $funcionario->nome = "Camile Pitanga";
        $funcionario->idade = 28;
        $funcionario->id_departamento = 2;
        $funcionario->save();
        
        $funcionario = new FuncionarioModel();
        $funcionario->nome = "Damiana Cavalcante";
        $funcionario->idade = 33;
        $funcionario->id_departamento = 2;
        $funcionario->save();
        
        $funcionario = new FuncionarioModel();
        $funcionario->nome = "Fabiana Tuarez";
        $funcionario->idade = 38;
        $funcionario->id_departamento = 2;
        $funcionario->save();
    }
}
