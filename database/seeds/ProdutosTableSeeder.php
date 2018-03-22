<?php

use Illuminate\Database\Seeder;

class ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert([
            'nome' => 'Iogurte',
            'marca' => 'Batavo',
            'quant' => 12,
            'preco' => 3.90
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Suco de Uva',
            'marca' => 'Elege',
            'quant' => 30,
            'preco' => 2.50
        ]);
        
        DB::table('produtos')->insert([
            'nome' => 'Margarina',
            'marca' => 'Becel',
            'quant' => 8,
            'preco' => 5.30
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Sorvete',
            'marca' => 'Kibon',
            'quant' => 30,
            'preco' => 21.90
        ]);
    }
}
