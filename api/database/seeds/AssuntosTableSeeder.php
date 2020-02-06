<?php

use Illuminate\Database\Seeder;
use App\Models\Assunto;

class AssuntosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getAssuntos() as $assuntos) {
            $assuntoFilho = array_pop($assuntos);
            /** @var Assunto $assuntoPrincipal */
            $assuntoPrincipal = Assunto::firstOrCreate($assuntos);
            foreach ($assuntoFilho as $assuntoFilho) {
                $filho = Assunto::firstOrCreate($assuntoFilho);
                $assuntoPrincipal->filhos()->attach($filho);
            }
        }
    }

    private function getAssuntos()
    {
        return [
            [
                'nome' => 'Administração Financeira e Orçamentária (AFO)',
                'filhos' => [
                    ['nome' => 'Introdução à Administração Financeira e Orçamentária'],
                    ['nome' => 'Ciclo Orçamentário'],
                    ['nome' => 'Elaboração/Planejamento'],
                ]
            ],
            [
                'nome' => 'Código Penal',
                'filhos' => [
                    [
                        'nome' => 'Parte Geral',
                        // 'filhos' => [
                        //     ['nome' => 'Título I - Da Aplicação da Lei Penal'],
                        //     ['nome' => 'Título II - Do Crime'],
                        // ],
                        'nome' => 'Parte Especial',
                    ],
                ]
            ],
            [
                'nome' => 'Direito Penal Militar',
                'filhos' => [
                    ['nome' => 'Aplicação da Lei Penal Militar'],
                    ['nome' => 'Teoria Geral do Crime Militar'],
                    ['nome' => 'Extinção de punibilidade'],
                ],
            ],
        ];
    }    
}
