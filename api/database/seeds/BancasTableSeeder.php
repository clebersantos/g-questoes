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
            ['nome' => 'CEBRASPE (CESPE)', 'sigla' =>  'CEBRASPE'],
            ['nome' => 'CESGRANRIO', 'sigla' => 'CESGRANRIO'],
            ['nome' => 'QUADRIX', 'sigla' => 'QUADRIX']
        ];
    }
}
