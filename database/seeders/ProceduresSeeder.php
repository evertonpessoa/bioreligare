<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProceduresSeeder extends Seeder
{
    public function run()
    {
        $idNeuro = DB::table('specializations')->select()->where('name', 'Neuropsicologia')->first();
        $idNutri = DB::table('specializations')->select()->where('name', 'Nutrição')->first();
        $idFono = DB::table('specializations')->select()->where('name', 'Fonoaudiologia')->first();
        $idAcupuntura = DB::table('specializations')->select()->where('name', 'Acupuntura')->first();
        $idGastroenterologia = DB::table('specializations')->select()->where('name', 'Gastroenterologia')->first();
        $idGastroplastia = DB::table('specializations')->select()->where('name', 'Gastroplastia')->first();
        $idPsicologia = DB::table('specializations')->select()->where('name', 'Psicologia')->first();
        $idPsicoterapia = DB::table('specializations')->select()->where('name', 'Psicoterapia')->first();
        $idGruposTerapeuticos = DB::table('specializations')->select()->where('name', 'Grupos Terapêuticos')->first();

        DB::table('procedures')->insert([
            [
                'title' => 'Avaliação',
                'description' => 'A Avaliação Neuropsicológica consiste na utilização de exame clínico, aliado a outras ferramentas diagnósticas como os exames de neuroimagem, a observação do comportamento, os relatos da família do paciente e os instrumentos psicológicos de rastreio, inventários e outros testes. É um processo complexo, que precisa ser conduzido caso a caso, escolhendo as técnicas mais adequadas à situação real apresentada. A avaliação é o primeiro passo para a futura reabilitação neurológica, pois irá identificar as áreas cognitivas com maior dano e, a partir disso, poderá ser elaborado o plano de tratamento.',
                'banner_path' => 'neuroprocedimento1.jpg',
                'specialization_id' => $idNeuro->id
            ],
            [
                'title' => 'Intervenção',
                'description' => 'Nesta sessão, cabe ao neuropsicólogo re-estruturar com planejamento e orientação, as relações afetivo-familiares ou institucionais, e reorganizar hábitos que se inserem nas demandas de sobrevivência do paciente (portador de sequelas, processo degenerativo, deficiências ou necessidades especiais) que depende de seu cuidador.',
                'banner_path' => 'neuroprocedimento2.jpg',
                'specialization_id' => $idNeuro->id
            ],
            [
                'title' => 'Reabilitação',
                'description' => 'A Reabilitação é um processo multidisciplinar, envolvendo vários profissionais tais como, psicólogos, terapeutas ocupacionais, fonoaudiólogos e fisioterapeutas, neurologistas, e em casos específicos, o psiquiatra. Nesta perspectiva terapêutica, uma lesão cerebral, além das consequências cognitivas, pode resultar também em alterações comportamentais, emocionais e psicossociais. A reabilitação pode ocorrer visando as diversas funções executivas correlacionadas as áreas lesadas, através do uso de exercícios e variados tipos de investigação, entre outras técnicas de rastreio e estratégias múltiplas.',
                'banner_path' => 'neuroprocedimento3.png',
                'specialization_id' => $idNeuro->id
            ],
            [
                'title' => 'Suplementação Esportiva',
                'description' => 'A utilização de suplementos esportivos é uma práticaq que cresce a cada dia, seja entre atletas e pessoas que praticam atividade física. O uso destes produtos só se justifica em casos em que a alimentação não consiga suprir as necessidades nutricionais durante os treinos e/ou competições, levando-se em consideração os fatores que compõe a rotina diária do atleta (trabalho, escola, sono, tempo disponível para alimentação, etc). O suplemento só poderá apresentar resultados positivos mediante a associação com a dieta e a ativida física.',
                'banner_path' => 'nutriprocedimento1.jpg',
                'specialization_id' => $idNutri->id
            ],
            [
                'title' => 'Orientação Nutricional',
                'description' => 'A Orientação Nutricional pode ser definida como um modo cooperativo de interação entre o paciente e o profissional de saúde, com o objetivo de assistir os pacientes na adoção de comportamentos dietéticos saudáveis, identificar as deficiências e desequilíbrios nutricionais, avaliando as reais necessidades, prestando as devidas orientações e associando-as com a melhorias dos resultados de saúde.',
                'banner_path' => 'nutriprocedimento2.jpg',
                'specialization_id' => $idNutri->id
            ],
            [
                'title' => 'Dietoterapia',
                'description' => 'A finalidade básica da dietoterapia é oferecer ao organismo debilitado os nutrientes adequados da forma que melhor se adapte ao tipo de condição patológica e características físicas, nutricionais, psicológicas e sociais do indivíduo, recuperando-o. Para isso, é necessário que se estabeleça se as necessidades do indivíduo são de manutenção ou de recuperação. Objetivos: Recuperar e/ou manter o estado de saúde, levando o paciente às suas atividades normais. Ajustar a dieta à capacidade do organismo em digerir, absorver e tolerar determinados alimentos, bem como à capacidade em metabolizar os nutrientes. Contribuir para compensar estados específicos de deficiência nutricional. Estimular e/ou dar repouso a um determinado órgão. Educar pacientes e familiares para aquisição de hábitos alimentares compatíveis com a saúde e com seu estilo de vida.',
                'banner_path' => 'nutriprocedimento3.jpg',
                'specialization_id' => $idNutri->id
            ],
            [
                'title' => 'Fitoterapia',
                'description' => 'É um método de tratamento muito antigo, praticamente ancestral, que está em pleno crescimento científico na área da pesquisa, e clinicamente segue atuando na prevenção de doenças, auxiliando nos cuidados paliativos de diversas enfermidades, caracterizada pela utilização de plantas medicinais. Na terapia pelas plantas, em suas diferentes preparações, não há utilização de substâncias ativas isoladas. São considerados medicamentos fitoterápicos, aqueles obtidos com o emprego exclusivo de matérias-primas ativas vegetais, cuja eficácia e segurança, são validadas por meio de levantamentos etno-farmacológicos, de utilização, documentações tecnocientíficas ou evidências clínicas.',
                'banner_path' => 'nutriprocedimento4.jpg',
                'specialization_id' => $idNutri->id
            ],
            [
                'title' => 'Audiometria',
                'description' => 'A audiometria é um exame que avalia a audição e deve ser realizado pelo profissional especializado: fonoaudiólogo. O paciente, no interior de uma cabine, é testado para sua audição. O resultado é expresso em um audiograma, que é um gráfico que revela as capacidades auditivas do paciente. Os principais tipos de audiometria são: - audiometria tonal, que é considerado um teste subjetivo para avaliar o grau e o tipo de perda auditiva.- audiometria vocal, que pesquisa a capacidade de compreensão da fala humana.',
                'banner_path' => 'fonoprocedimento1.jpg',
                'specialization_id' => $idFono->id
            ],
            [
                'title' => 'Sistêmica',
                'description' => 'Esta técnica busca avaliar e melhorar a função fisiológica do sistema sacro-craniano. É indicada para qualquer faixa etária e raramente tem contra-indicações. Em doentes de idades mais avançadas, esta terapia pode melhorar a mobilidade funcional e proporcionar mais energia. É cada vez mais usada como terapia preventiva por ser benéfica no apoio e reforço ás resistências naturais contra as doenças e é eficaz numa grande variedade de males associados á dor e á disfunção.',
                'banner_path' => 'acuprocedimento1.jpg',
                'specialization_id' => $idAcupuntura->id
            ],
            [
                'title' => 'Auricular',
                'description' => 'É uma técnica que usa o pavilhão auricular para tratar a saúde como um todo, aproveitando o reflexo que o pavilhão auricular exerce sobre SNC (Sistema Nervoso Central). Cada orelha tem pontos de reflexo que correspondem a todos os órgãos e funções do corpo. Ao efetuar a sensibilização desses prontos por agulhas de acupuntura, o cérebro recebe um impulso que desencadeia uma série de fenômenos físicos, relacionados com a área do corpo, produzindo efeitos terapêuticos e preventivos. Não apresenta colaterais, desde que o diagnóstico seja realizado com critérios corretos e os programas de tratamento sejam bem dimensionados.',
                'banner_path' => 'acuprocedimento2.jpg',
                'specialization_id' => $idAcupuntura->id
            ],
            [
                'title' => 'Crânio-sacral',
                'description' => 'Esta técnica busca avaliar e melhorar a função fisiológica do sistema sacro-craniano. É indicada para qualquer faixa etária e raramente tem contra-indicações. Em doentes de idades mais avançadas, esta terapia pode melhorar a mobilidade funcional e proporcionar mais energia. É cada vez mais usada como terapia preventiva por ser benéfica no apoio e reforço ás resistências naturais contra as doenças e é eficaz numa grande variedade de males associados á dor e á disfunção.',
                'banner_path' => 'acuprocedimento3.jpg',
                'specialization_id' => $idAcupuntura->id
            ],
            [
                'title' => 'Moxaterapia',
                'description' => 'É uma técnica terapêutica, originária do norte da China, que significa literalmente, "longo tempo de aplicação do fogo", é uma espécie de acupuntura términa, feita pela combustão da erva Artemisia sinensis e Artemisia vulgaris, na forma de bastões especiais. A moxabustão se baseia nos mesmos princípios e conhecimento dos meridianos de energia trabalhados na acupuntura, trata e previne doenças através da aplicação de calor da combustão da Artemísia, em pontos e/ou regiões do corpo humano, com a propriedade de aquecer profundamente A aplicação do calor produzido pela moxa nos pontos ou meridianos de acupuntura, remove bloqueios de energia que obstruem o seu fluxo pelos meridianos, eliminando a umidade e o frio que promovem no organismo. A técnica pode ser utilizada sozinha ou associada ás práticas de acupuntura tradicional e ventosaterapia.',
                'banner_path' => 'acuprocedimento4.png',
                'specialization_id' => $idAcupuntura->id
            ],

            [
                'title' => 'Consulta Anamnese',
                'description' => 'Anamnese é um instrumento clínico de caráter investigatório, sempre utilizado na consulta inicial, e consiste em obter dados gerais da história de vida do indivíduo. Coleta informações sobre as características biopsicossociais com maior profundidade, identificando possíveis áreas de conflito que deverão ser mais exploradas do que outras ao longo do processo.',
                'banner_path' => 'psicologia-procedimento-1-consulta.jpg',
                'specialization_id' => $idPsicologia->id
            ],
            [
                'title' => 'Aconselhamento Psicológico',
                'description' => 'O Aconselhamento Psicológico, é uma abordagem que potencializa os processos personalizados e individualizados, destinados a ajudar o indivíduo a reconhecer seus traços positivos e negativos de personalidade, bons e maus hábitos pessoais e sociais, habilidades, tomadas de decisão, crenças e valores. O caráter psicológico desta intervenção, geralmente é centrada em sentimentos, pensamentos, percepções, conflitos e na facilitação ou auxilio às transformações comportamentais da demanda do indivíduo. Oferece ao indivíduo, a oportunidade de escuta, acolhimento, e orientação na busca de resolução dos problemas, levando-o à tomada de decisão frente as crises pessoais, a melhoria das relações interpessoais, a promoção do auto-conhecimento e autonomia pessoal.',
                'banner_path' => 'psicologia-procedimento-2-aconselhamento.jpg',
                'specialization_id' => $idPsicologia->id
            ],
            [
                'title' => 'Orientação Vocacional',
                'description' => 'A Orientação Vocacional (O.V) é um trabalho preventivo de investigação e aconselhamento focal, cujo objetivo consiste em providenciar elementos necessários para possibilitar a melhor situação de escolha e esclarecimento das aptidões vocacionais para cada sujeito, disponibilizando um conjunto de aplicações e testagens de probabilidades. Convém destacar que a procura vocacional é uma tarefa pessoal onde cada indivíduo deve reconhecer-se como protagonista, contando com os recursos necessários para favorecer e enriquecer essa procura. De uma forma geral, a O.V está mais voltada para adolescentes que estejam concluindo os seus estudos no ensino médio, mas também a estudantes universitários, jovens em geral e adultos.',
                'banner_path' => 'psicologia-procedimento-3-orientacao.png',
                'specialization_id' => $idPsicologia->id
            ],
            [
                'title' => 'Avaliação Psicológica',
                'description' => 'Avaliação Psicológica é um conjunto de procedimentos que tem como objetivo investigar por meio de instrumentos previamente validados, uma determinada função, dentre diversos processos psicológicos complexos que compõe o indivíduo. Atua sob os princípios éticos que visam não somente a imparcialidade do processo em si, mas principalmente a humanização deste, tendo como foco a preservação e integridade do sujeito. Os Testes Psicológicos em geral, se caracterizam por uma série de tarefas e/ou problemas específicos, que o indivíduo precisa responder e/ou resolver, bem como, medir aspectos normalmente não observáveis. Estão acessíveis somente para profissionais habilitados. Em Psicodiagnóstico, realizamos uma avaliação inicial, onde iremos obter informações importantes sobre a estrutura psíquica, mental e emocional do indivíduo, seu dinamismo e demais características. Identificamos os traços de personalidade do indivíduo, seu processo criativo em lidar com as situações da vida, que irá permitir identificar e compreender amplamente a queixa e o possível distúrbio que o indivíduo apresenta, auxiliando o psicoterapeuta, na formulação de hipóteses diagnósticas mais precisas.',
                'banner_path' => 'avaliacao-psicologica-psicodiagnostico.jpg',
                'specialization_id' => $idPsicologia->id
            ],
        ]);
    }
}
