<?php

use Illuminate\Database\Seeder;
use App\Models\Orgao;
class OrgaosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->obterOrgaos() as $orgao) {
            Orgao::firstOrCreate($orgao);
        }
    }

    private function obterOrgaos()
    {
        return [
            ['nome' => 'Agência Nacional de Aviação Civil', 'sigla' => 'ANAC'],
            ['nome' => 'Agência Nacional de Águas', 'sigla' => 'ANA'],
            ['nome' => 'Polícia Civil do Estado do Maranhão', 'sigla' => 'PC-MA'],
            ['nome' => 'Polícia Civil do Distrito Federal', 'sigla' => 'PC-DF'],
        ];
    }
}
