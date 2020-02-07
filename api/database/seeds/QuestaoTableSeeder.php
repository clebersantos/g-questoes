<?php

use Illuminate\Database\Seeder;
use App\Models\Questao;
use App\Models\Orgao;
use App\Models\Banca;
use App\Models\Assunto;

class QuestaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getQuestoes() as $questao) {
            Questao::firstOrCreate([
                'nome' => $questao['nome'],
                'orgao_id' => Orgao::firstOrCreate(['sigla' => $questao['sigla_orgao']])->id,
                'banca_id' => Banca::firstOrCreate(['sigla' => $questao['sigla_banca']])->id,
                'assunto_id' => Assunto::firstOrCreate(['nome' => $questao['nome_assunto']])->id,
            ]);
        }
    }

    private function getQuestoes()
    {
        return [
            [
                'nome' => 'As receitas públicas classificam-se quanto à categoria econômica em receitas de capital e receitas correntes, sendo o laudêmio um exemplo de receita corrente.',
                'sigla_orgao' => 'ANAC',
                'sigla_banca' => 'CESGRANRIO',
                'nome_assunto' => 'Introdução à Administração Financeira e Orçamentária',

            ],
            [
                'nome' => 'A dívida ativa constitui-se dos créditos não financeiros oriundos de tributos lançados e não arrecadados em um exercício, bem como dos autos de infração não contestados.',
                'sigla_orgao' => 'ANAC',
                'sigla_banca' => 'CESGRANRIO',
                'nome_assunto' => 'Introdução à Administração Financeira e Orçamentária',
            ],
            [
                'nome' => 'Integer nisi orci, pellentesque ac neque eget, congue eleifend tellus',
                'sigla_orgao' => 'ANAC',
                'sigla_banca' => 'CESGRANRIO',
                'nome_assunto' => 'Ciclo Orçamentário',

            ],
            [
                'nome' => 'Nunc sed lorem vehicula, congue risus sed, varius nisl..',
                'sigla_orgao' => 'ANAC',
                'sigla_banca' => 'CESGRANRIO',
                'nome_assunto' => 'Ciclo Orçamentário',
            ],
            [
                'nome' => 'Nulla enim nisi, fringilla eu nulla non, aliquam laoreet sem. Morbi id eros lectus. Suspendisse ac vehicula nisl',
                'sigla_orgao' => 'ANAC',
                'sigla_banca' => 'CESGRANRIO',
                'nome_assunto' => 'Elaboração/Planejamento',

            ],
            [
                'nome' => 'Lorem Ipsum Dolor',
                'sigla_orgao' => 'ANAC',
                'sigla_banca' => 'CESGRANRIO',
                'nome_assunto' => 'Elaboração/Planejamento',
            ],


            [
                'nome' => 'O estágio de lançamento da receita compreende o registro, em contas devedoras e credoras, do valor a ser arrecadado pelo Estado.',
                'sigla_orgao' => 'ANAC',
                'sigla_banca' => 'CEBRASPE',
                'nome_assunto' => 'Introdução à Administração Financeira e Orçamentária',

            ],
            [
                'nome' => 'O montante da despesa autorizada em cada exercício financeiro não poderá ser superior ao total da receita estimada para o mesmo período. Tal premissa representa o princípio orçamentário do equilíbrio',
                'sigla_orgao' => 'ANAC',
                'sigla_banca' => 'CEBRASPE',
                'nome_assunto' => 'Introdução à Administração Financeira e Orçamentária',
            ],
            [
                'nome' => 'Integer nisi orci, pellentesque ac neque eget, congue eleifend tellus',
                'sigla_orgao' => 'ANAC',
                'sigla_banca' => 'CEBRASPE',
                'nome_assunto' => 'Ciclo Orçamentário',

            ],
            [
                'nome' => 'Nunc sed lorem vehicula, congue risus sed, varius nisl..',
                'sigla_orgao' => 'ANAC',
                'sigla_banca' => 'CEBRASPE',
                'nome_assunto' => 'Ciclo Orçamentário',
            ],
            [
                'nome' => 'Nulla enim nisi, fringilla eu nulla non, aliquam laoreet sem. Morbi id eros lectus. Suspendisse ac vehicula nisl',
                'sigla_orgao' => 'ANAC',
                'sigla_banca' => 'CEBRASPE',
                'nome_assunto' => 'Elaboração/Planejamento',

            ],
            [
                'nome' => 'Lorem Ipsum Dolor',
                'sigla_orgao' => 'ANAC',
                'sigla_banca' => 'CEBRASPE',
                'nome_assunto' => 'Elaboração/Planejamento',
            ],


            [
                'nome' => 'O orçamento fiscal referente aos Poderes da União, seus fundos, órgãos e entidades da administração direta e indireta, inclusive fundações instituídas e mantidas pelo Poder Público.',
                'sigla_orgao' => 'ANAC',
                'sigla_banca' => 'QUADRIX',
                'nome_assunto' => 'Introdução à Administração Financeira e Orçamentária',

            ],
            [
                'nome' => 'O orçamento da seguridade social, abrangendo todas as entidades e órgãos a ela vinculados, da administração direta ou indireta, bem como os fundos e fundações instituídos e mantidos pelo Poder Público.',
                'sigla_orgao' => 'ANAC',
                'sigla_banca' => 'QUADRIX',
                'nome_assunto' => 'Introdução à Administração Financeira e Orçamentária',
            ],
            [
                'nome' => 'Integer nisi orci, pellentesque ac neque eget, congue eleifend tellus',
                'sigla_orgao' => 'ANAC',
                'sigla_banca' => 'QUADRIX',
                'nome_assunto' => 'Ciclo Orçamentário',
            ],
            [
                'nome' => 'Nunc sed lorem vehicula, congue risus sed, varius nisl..',
                'sigla_orgao' => 'ANAC',
                'sigla_banca' => 'QUADRIX',
                'nome_assunto' => 'Ciclo Orçamentário',
            ],
            [
                'nome' => 'Nulla enim nisi, fringilla eu nulla non, aliquam laoreet sem. Morbi id eros lectus. Suspendisse ac vehicula nisl',
                'sigla_orgao' => 'ANAC',
                'sigla_banca' => 'QUADRIX',
                'nome_assunto' => 'Elaboração/Planejamento',

            ],
            [
                'nome' => 'Lorem Ipsum Dolor',
                'sigla_orgao' => 'ANAC',
                'sigla_banca' => 'QUADRIX',
                'nome_assunto' => 'Elaboração/Planejamento',
            ],
            [
                'nome' => 'Os planos e programas nacionais, regionais e setoriais previstos na Constituição Federal a serem elaborados em consonância com o plano plurianual e apreciados pelo Congresso Nacional.',
                'sigla_orgao' => 'PC-DF',
                'sigla_banca' => 'CESGRANRIO',
                'nome_assunto' => 'Introdução à Administração Financeira e Orçamentária',

            ],
            [
                'nome' => 'O orçamento de investimento das empresas em que a União, direta ou indiretamente, detenha a maioria do capital social com direito a voto.',
                'sigla_orgao' => 'PC-DF',
                'sigla_banca' => 'CESGRANRIO',
                'nome_assunto' => 'Introdução à Administração Financeira e Orçamentária',
            ],
            [
                'nome' => 'Integer nisi orci, pellentesque ac neque eget, congue eleifend tellus',
                'sigla_orgao' => 'PC-DF',
                'sigla_banca' => 'CESGRANRIO',
                'nome_assunto' => 'Ciclo Orçamentário',

            ],
            [
                'nome' => 'Nunc sed lorem vehicula, congue risus sed, varius nisl..',
                'sigla_orgao' => 'PC-DF',
                'sigla_banca' => 'CESGRANRIO',
                'nome_assunto' => 'Ciclo Orçamentário',
            ],
            [
                'nome' => 'Nulla enim nisi, fringilla eu nulla non, aliquam laoreet sem. Morbi id eros lectus. Suspendisse ac vehicula nisl',
                'sigla_orgao' => 'PC-DF',
                'sigla_banca' => 'CESGRANRIO',
                'nome_assunto' => 'Elaboração/Planejamento',

            ],
            [
                'nome' => 'Lorem Ipsum Dolor',
                'sigla_orgao' => 'PC-DF',
                'sigla_banca' => 'CESGRANRIO',
                'nome_assunto' => 'Elaboração/Planejamento',
            ],


            [
                'nome' => 'Até cento e oitenta dias após a publicação dos orçamentos, o Poder Executivo estabelecerá a programação financeira e o cronograma de execução mensal de desembolso orçamentário.',
                'sigla_orgao' => 'PC-DF',
                'sigla_banca' => 'CEBRASPE',
                'nome_assunto' => 'Introdução à Administração Financeira e Orçamentária',

            ],
            [
                'nome' => 'Cabe ao legislativo editar, de forma independente, leis quanto ao plano plurianual, das diretrizes orçamentárias e dos orçamentos anuais, com a aprovação do poder executivo, mediante estudos pelas secretarias de planejamento.',
                'sigla_orgao' => 'PC-DF',
                'sigla_banca' => 'CEBRASPE',
                'nome_assunto' => 'Introdução à Administração Financeira e Orçamentária',
            ],
            [
                'nome' => 'Integer nisi orci, pellentesque ac neque eget, congue eleifend tellus',
                'sigla_orgao' => 'PC-DF',
                'sigla_banca' => 'CEBRASPE',
                'nome_assunto' => 'Ciclo Orçamentário',

            ],
            [
                'nome' => 'Nunc sed lorem vehicula, congue risus sed, varius nisl..',
                'sigla_orgao' => 'PC-DF',
                'sigla_banca' => 'CEBRASPE',
                'nome_assunto' => 'Ciclo Orçamentário',
            ],
            [
                'nome' => 'Nulla enim nisi, fringilla eu nulla non, aliquam laoreet sem. Morbi id eros lectus. Suspendisse ac vehicula nisl',
                'sigla_orgao' => 'PC-DF',
                'sigla_banca' => 'CEBRASPE',
                'nome_assunto' => 'Elaboração/Planejamento',

            ],
            [
                'nome' => 'Lorem Ipsum Dolor',
                'sigla_orgao' => 'PC-DF',
                'sigla_banca' => 'CEBRASPE',
                'nome_assunto' => 'Elaboração/Planejamento',
            ],


            [
                'nome' => 'O demonstrativo das metas anuais, instruído com memória e metodologia de cálculo que justifiquem os resultados pretendidos, comparando-as com as fixadas nos três exercícios anteriores e evidenciando a consistência delas com as premissas e os objetivos da política econômica nacional, faz parte integrante do anexo à lei de diretrizes orçamentárias.',
                'sigla_orgao' => 'PC-DF',
                'sigla_banca' => 'QUADRIX',
                'nome_assunto' => 'Introdução à Administração Financeira e Orçamentária',

            ],
            [
                'nome' => 'O projeto do direito orçamentário anual será elaborado de forma compatível com o plano econômico, fiscal e contábil, bem como com a lei que estatui norma de direito financeiro para elaboração orçamentária e com as normativas da secretaria do planejamento.',
                'sigla_orgao' => 'PC-DF',
                'sigla_banca' => 'QUADRIX',
                'nome_assunto' => 'Introdução à Administração Financeira e Orçamentária',
            ],
            [
                'nome' => 'Integer nisi orci, pellentesque ac neque eget, congue eleifend tellus',
                'sigla_orgao' => 'PC-DF',
                'sigla_banca' => 'QUADRIX',
                'nome_assunto' => 'Ciclo Orçamentário',

            ],
            [
                'nome' => 'Nunc sed lorem vehicula, congue risus sed, varius nisl..',
                'sigla_orgao' => 'PC-DF',
                'sigla_banca' => 'QUADRIX',
                'nome_assunto' => 'Ciclo Orçamentário',
            ],
            [
                'nome' => 'Nulla enim nisi, fringilla eu nulla non, aliquam laoreet sem. Morbi id eros lectus. Suspendisse ac vehicula nisl',
                'sigla_orgao' => 'PC-DF',
                'sigla_banca' => 'QUADRIX',
                'nome_assunto' => 'Elaboração/Planejamento',

            ],
            [
                'nome' => 'Lorem Ipsum Dolor',
                'sigla_orgao' => 'PC-DF',
                'sigla_banca' => 'QUADRIX',
                'nome_assunto' => 'Elaboração/Planejamento',
            ],



            [
                'nome' => 'A lei que estatui norma de direito financeiro para elaboração orçamentária dispensará o Anexo de Riscos Fiscais, em que serão avaliados os passivos contingentes e outros riscos capazes de afetar as contas públicas, informando as providências a serem tomadas, caso se concretizem, uma vez que esse anexo será parte integrante da prestação de contas da transparência.',
                'sigla_orgao' => 'ANA',
                'sigla_banca' => 'CESGRANRIO',
                'nome_assunto' => 'Introdução à Administração Financeira e Orçamentária',
            ],
            [
                'nome' => 'Somente para suprir a excepcionalidade dos Regimes Próprios de Previdência Social (RPPS), o Balanço Orçamentário dos entes públicos poderá incluir recursos arrecadados em exercícios anteriores para fins de equilíbrio orçamentário.',
                'sigla_orgao' => 'ANA',
                'sigla_banca' => 'CESGRANRIO',
                'nome_assunto' => 'Introdução à Administração Financeira e Orçamentária',
            ],
            [
                'nome' => 'Integer nisi orci, pellentesque ac neque eget, congue eleifend tellus',
                'sigla_orgao' => 'ANA',
                'sigla_banca' => 'CESGRANRIO',
                'nome_assunto' => 'Ciclo Orçamentário',

            ],
            [
                'nome' => 'Nunc sed lorem vehicula, congue risus sed, varius nisl..',
                'sigla_orgao' => 'ANA',
                'sigla_banca' => 'CESGRANRIO',
                'nome_assunto' => 'Ciclo Orçamentário',
            ],
            [
                'nome' => 'Nulla enim nisi, fringilla eu nulla non, aliquam laoreet sem. Morbi id eros lectus. Suspendisse ac vehicula nisl',
                'sigla_orgao' => 'ANA',
                'sigla_banca' => 'CESGRANRIO',
                'nome_assunto' => 'Elaboração/Planejamento',

            ],
            [
                'nome' => 'Lorem Ipsum Dolor',
                'sigla_orgao' => 'ANA',
                'sigla_banca' => 'CESGRANRIO',
                'nome_assunto' => 'Elaboração/Planejamento',
            ],


            [
                'nome' => 'A escrituração das contas públicas observará que as receitas e despesas previdenciárias serão apresentadas em demonstrativos financeiros e orçamentários específicos.',
                'sigla_orgao' => 'ANA',
                'sigla_banca' => 'CEBRASPE',
                'nome_assunto' => 'Introdução à Administração Financeira e Orçamentária',

            ],
            [
                'nome' => 'O ente da Federação que mantiver ou vier a instituir regime próprio de previdência social para seus servidores conferir-lhe-á caráter contributivo e o organizará com base em normas de contabilidade e atuária que preservem seu equilíbrio financeiro e atuarial. ',
                'sigla_orgao' => 'ANA',
                'sigla_banca' => 'CEBRASPE',
                'nome_assunto' => 'Introdução à Administração Financeira e Orçamentária',
            ],
            [
                'nome' => 'Integer nisi orci, pellentesque ac neque eget, congue eleifend tellus',
                'sigla_orgao' => 'ANA',
                'sigla_banca' => 'CEBRASPE',
                'nome_assunto' => 'Ciclo Orçamentário',

            ],
            [
                'nome' => 'Nunc sed lorem vehicula, congue risus sed, varius nisl..',
                'sigla_orgao' => 'ANA',
                'sigla_banca' => 'CEBRASPE',
                'nome_assunto' => 'Ciclo Orçamentário',
            ],
            [
                'nome' => 'Nulla enim nisi, fringilla eu nulla non, aliquam laoreet sem. Morbi id eros lectus. Suspendisse ac vehicula nisl',
                'sigla_orgao' => 'ANA',
                'sigla_banca' => 'CEBRASPE',
                'nome_assunto' => 'Elaboração/Planejamento',

            ],
            [
                'nome' => 'Lorem Ipsum Dolor',
                'sigla_orgao' => 'ANA',
                'sigla_banca' => 'CEBRASPE',
                'nome_assunto' => 'Elaboração/Planejamento',
            ],


            [
                'nome' => 'A inserção de uma vírgula imediatamente após a palavra “Assim” (l.2) alteraria os sentidos do texto.',
                'sigla_orgao' => 'ANA',
                'sigla_banca' => 'QUADRIX',
                'nome_assunto' => 'Introdução à Administração Financeira e Orçamentária',

            ],
            [
                'nome' => 'A substituição do termo “do futuro”, em “modelos do futuro” (l. 5 e 6), pelo adjetivo futuristas manteria os sentidos originais do texto.',
                'sigla_orgao' => 'ANA',
                'sigla_banca' => 'QUADRIX',
                'nome_assunto' => 'Introdução à Administração Financeira e Orçamentária',
            ],
            [
                'nome' => 'Integer nisi orci, pellentesque ac neque eget, congue eleifend tellus',
                'sigla_orgao' => 'ANA',
                'sigla_banca' => 'QUADRIX',
                'nome_assunto' => 'Ciclo Orçamentário',

            ],
            [
                'nome' => 'Nunc sed lorem vehicula, congue risus sed, varius nisl..',
                'sigla_orgao' => 'ANA',
                'sigla_banca' => 'QUADRIX',
                'nome_assunto' => 'Ciclo Orçamentário',
            ],
            [
                'nome' => 'Nulla enim nisi, fringilla eu nulla non, aliquam laoreet sem. Morbi id eros lectus. Suspendisse ac vehicula nisl',
                'sigla_orgao' => 'ANA',
                'sigla_banca' => 'QUADRIX',
                'nome_assunto' => 'Elaboração/Planejamento',

            ],
            [
                'nome' => 'Lorem Ipsum Dolor',
                'sigla_orgao' => 'ANA',
                'sigla_banca' => 'QUADRIX',
                'nome_assunto' => 'Elaboração/Planejamento',
            ],
            [
                'nome' => 'Por meio da classificação por fonte/destinação de recursos é possível identificar se os recursos são vinculados ou não e, no caso dos vinculados, a classificação é indicativa de sua finalidade.',
                'sigla_orgao' => 'PC-MA',
                'sigla_banca' => 'CESGRANRIO',
                'nome_assunto' => 'Introdução à Administração Financeira e Orçamentária',

            ],
            [
                'nome' => 'A destinação ordinária é o processo de vinculação entre a origem e a aplicação de recursos, em atendimento às finalidades específicas estabelecidas em lei. ',
                'sigla_orgao' => 'PC-MA',
                'sigla_banca' => 'CESGRANRIO',
                'nome_assunto' => 'Introdução à Administração Financeira e Orçamentária',
            ],
            [
                'nome' => 'Integer nisi orci, pellentesque ac neque eget, congue eleifend tellus',
                'sigla_orgao' => 'PC-MA',
                'sigla_banca' => 'CESGRANRIO',
                'nome_assunto' => 'Ciclo Orçamentário',

            ],
            [
                'nome' => 'Nunc sed lorem vehicula, congue risus sed, varius nisl..',
                'sigla_orgao' => 'PC-MA',
                'sigla_banca' => 'CESGRANRIO',
                'nome_assunto' => 'Ciclo Orçamentário',
            ],
            [
                'nome' => 'Nulla enim nisi, fringilla eu nulla non, aliquam laoreet sem. Morbi id eros lectus. Suspendisse ac vehicula nisl',
                'sigla_orgao' => 'PC-MA',
                'sigla_banca' => 'CESGRANRIO',
                'nome_assunto' => 'Elaboração/Planejamento',

            ],
            [
                'nome' => 'Lorem Ipsum Dolor',
                'sigla_orgao' => 'PC-MA',
                'sigla_banca' => 'CESGRANRIO',
                'nome_assunto' => 'Elaboração/Planejamento',
            ],


            [
                'nome' => 'O PPA será apreciado pelas duas casas do Congresso nacional e terá vigência de quatro anos, iniciando-se no segundo ano de mandato do Chefe do Poder Executivo',
                'sigla_orgao' => 'PC-MA',
                'sigla_banca' => 'CEBRASPE',
                'nome_assunto' => 'Introdução à Administração Financeira e Orçamentária',

            ],
            [
                'nome' => 'A LDO estabelece diretrizes, objetivos e metas da administração, para os próximos exercícios',
                'sigla_orgao' => 'PC-MA',
                'sigla_banca' => 'CEBRASPE',
                'nome_assunto' => 'Introdução à Administração Financeira e Orçamentária',
            ],
            [
                'nome' => 'Integer nisi orci, pellentesque ac neque eget, congue eleifend tellus',
                'sigla_orgao' => 'PC-MA',
                'sigla_banca' => 'CEBRASPE',
                'nome_assunto' => 'Ciclo Orçamentário',

            ],
            [
                'nome' => 'Nunc sed lorem vehicula, congue risus sed, varius nisl..',
                'sigla_orgao' => 'PC-MA',
                'sigla_banca' => 'CEBRASPE',
                'nome_assunto' => 'Ciclo Orçamentário',
            ],
            [
                'nome' => 'Nulla enim nisi, fringilla eu nulla non, aliquam laoreet sem. Morbi id eros lectus. Suspendisse ac vehicula nisl',
                'sigla_orgao' => 'PC-MA',
                'sigla_banca' => 'CEBRASPE',
                'nome_assunto' => 'Elaboração/Planejamento',

            ],
            [
                'nome' => 'Lorem Ipsum Dolor',
                'sigla_orgao' => 'PC-MA',
                'sigla_banca' => 'CEBRASPE',
                'nome_assunto' => 'Elaboração/Planejamento',
            ],


            [
                'nome' => 'A LOA compreenderá as metas e prioridades da administração pública federal, incluindo as despesas correntes para o exercícios financeiro subsequente',
                'sigla_orgao' => 'PC-MA',
                'sigla_banca' => 'QUADRIX',
                'nome_assunto' => 'Introdução à Administração Financeira e Orçamentária',

            ],
            [
                'nome' => 'O PPA, compreenderá o orçamento fiscal, o orçamento de investimento e o orçamento da seguridade social',
                'sigla_orgao' => 'PC-MA',
                'sigla_banca' => 'QUADRIX',
                'nome_assunto' => 'Introdução à Administração Financeira e Orçamentária',
            ],
            [
                'nome' => 'Integer nisi orci, pellentesque ac neque eget, congue eleifend tellus',
                'sigla_orgao' => 'PC-MA',
                'sigla_banca' => 'QUADRIX',
                'nome_assunto' => 'Ciclo Orçamentário',

            ],
            [
                'nome' => 'Nunc sed lorem vehicula, congue risus sed, varius nisl..',
                'sigla_orgao' => 'PC-MA',
                'sigla_banca' => 'QUADRIX',
                'nome_assunto' => 'Ciclo Orçamentário',
            ],
            [
                'nome' => 'Nulla enim nisi, fringilla eu nulla non, aliquam laoreet sem. Morbi id eros lectus. Suspendisse ac vehicula nisl',
                'sigla_orgao' => 'PC-MA',
                'sigla_banca' => 'QUADRIX',
                'nome_assunto' => 'Elaboração/Planejamento',

            ],
            [
                'nome' => 'Lorem Ipsum Dolor',
                'sigla_orgao' => 'PC-MA',
                'sigla_banca' => 'QUADRIX',
                'nome_assunto' => 'Elaboração/Planejamento',
            ],


            [
                'nome' => 'Integer nisi orci, pellentesque ac neque eget, congue eleifend tellus',
                'sigla_orgao' => 'PC-MA',
                'sigla_banca' => 'CEBRASPE',
                'nome_assunto' => 'Parte Geral',

            ],
            [
                'nome' => 'Nunc sed lorem vehicula, congue risus sed, varius nisl..',
                'sigla_orgao' => 'PC-MA',
                'sigla_banca' => 'QUADRIX',
                'nome_assunto' => 'Parte Geral',
            ],
            [
                'nome' => 'Nulla enim nisi, fringilla eu nulla non, aliquam laoreet sem. Morbi id eros lectus. Suspendisse ac vehicula nisl',
                'sigla_orgao' => 'PC-MA',
                'sigla_banca' => 'QUADRIX',
                'nome_assunto' => 'Parte Especial',

            ],
            [
                'nome' => 'Lorem Ipsum Dolor',
                'sigla_orgao' => 'PC-MA',
                'sigla_banca' => 'QUADRIX',
                'nome_assunto' => 'Parte Especial',
            ],
            [
                'nome' => 'Nulla enim nisi, fringilla eu nulla non, aliquam laoreet sem. Morbi id eros lectus. Suspendisse ac vehicula nisl',
                'sigla_orgao' => 'ANAC',
                'sigla_banca' => 'CEBRASPE',
                'nome_assunto' => 'Aplicação da Lei Penal Militar',

            ],
            [
                'nome' => 'Lorem Ipsum Dolor',
                'sigla_orgao' => 'ANAC',
                'sigla_banca' => 'CEBRASPE',
                'nome_assunto' => 'Teoria Geral do Crime Militar',
            ],
            [
                'nome' => 'Nulla enim nisi, fringilla eu nulla non, aliquam laoreet sem. Morbi id eros lectus. Suspendisse ac vehicula nisl',
                'sigla_orgao' => 'PC-MA',
                'sigla_banca' => 'CESPE',
                'nome_assunto' => 'Parte Especial',

            ],
            [
                'nome' => 'Lorem Ipsum Dolor',
                'sigla_orgao' => 'PC-MA',
                'sigla_banca' => 'CESPE',
                'nome_assunto' => 'Parte Geral',
            ],
            [
                'nome' => 'Nulla enim nisi, fringilla eu nulla non, aliquam laoreet sem. Morbi id eros lectus. Suspendisse ac vehicula nisl',
                'sigla_orgao' => 'PC-DF',
                'sigla_banca' => 'CESPE',
                'nome_assunto' => 'Parte Especial',

            ],
            [
                'nome' => 'Lorem Ipsum Dolor',
                'sigla_orgao' => 'PC-DF',
                'sigla_banca' => 'CESPE',
                'nome_assunto' => 'Parte Geral',
            ],
        ];
    }
}
