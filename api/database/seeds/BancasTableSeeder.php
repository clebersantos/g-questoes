<?php

use Illuminate\Database\Seeder;
use App\Models\Banca;


class BancasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->obterBancas() as $banca) {
            Banca::firstOrCreate($banca);
        }
    }
 
    private function obterBancas()
    {
        return [
            ['nome' => 'CEBRASPE (CESPE)', 'sigla' =>  'cebraspe'],
            ['nome' => 'CESGRANRIO', 'sigla' => 'Cesgranrio'],
            ['nome' => 'QUADRIX', 'sigla' => 'Quadrix'],
            ['nome' => 'FUNCEPE', 'sigla' => 'Funcepe'],
        ];
    }
}
