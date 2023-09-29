<?php

use Illuminate\Database\Seeder;
use \App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $forncedor = new Fornecedor();
        $forncedor->name='fornecedor 1';
        $forncedor->produto='maca';
        $forncedor->email='forn1@gmail';
        $forncedor->UF='PR';
        $forncedor->save();

        Fornecedor::create([
            'name'=>'ze',
            'email'=>'emaildoze',
            'produto'=>'caqui',
            'UF'=>'PR'
        ]);

        DB::table('fornecedors')->insert([
            'name'=>'joao',
            'email'=>'emailjoao',
            'produto'=>'pera',
            'UF'=>'RJ'
        ]); //nao encaminha create e update
    }
}
