<?php

use Illuminate\Database\Seeder;
use \App\Contato;

class ContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Contato::create([
        //     'name'=>'paulo',
        //     'telefone'=>'41991040301',
        //     'email'=>'emaildopaulo',
        //     'motivo'=>'erro no discord'
        // ]);
        // Contato::create([
        //     'name'=>'vitor',
        //     'telefone'=>'41991040301',
        //     'email'=>'emaildovitor',
        //     'motivo'=>'erro no vscode'
        // ]);
        factory(Contato::class,100)->create();
    }
}
