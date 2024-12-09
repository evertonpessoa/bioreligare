<?php

namespace Database\Seeders;

use App\Domain\User\Models\Specialization;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $idPreventiva = DB::table('specialty_type')->select('id')->where('slug', 'preventiva')->first();
        $idIntegrativa = DB::table('specialty_type')->select('id')->where('slug', 'integrativa')->first();

        $idTherapeutic = DB::table('professional_types')->select('id')->where('slug', 'equipe-terapeutica')->first()->id;
        $idMedical = DB::table('professional_types')->select('id')->where('slug', 'equipe-medica')->first()->id;

        $pages = [
            [
                'specialty_type_id' => $idPreventiva->id,
                'name' => 'Neuropsicologia',
                'slug' => 'Neuropsicologia',
                'description' => 'A neuropsicologia é uma interface ou aplicação da psicologia e da neurologia, que estuda as relações entre o cérebro e o comportamento humano. Sua principal área de atuação, busca compreender como as lesões, as malformações, as alterações genéticas ou qualquer agravo cerebral, afetam, o sistema nervoso e causem déficits ou alterações em diversas áreas do comportamento e da cognição humana. É muito utilizada para definir as habilidades e dificuldades que podem estar interferindo no comportamento apresentado, suas relações corticiais específicas e possíveis disfunções. Tem como objetivo a diferenciação e localização dinâmica das funções alteradas, propondo terapêutica multidisciplinar no tratamento.',
                'main_banner_path' => 'neuro1.jpg',
                'secondary_banner_path' => 'neuro2.jpg',
                'icon_path' => 'neuropsicologia.png',
                'professional_type_id' => $idMedical,
                'order' => '4',
            ],
            [
                'specialty_type_id' => $idPreventiva->id,
                'name' => 'Psicologia',
                'description' => 'A psicologia é a ciência que estuda a psiquê dos processos mentais, suas funções e o comportamento dos indivíduos. Estuda todos os atos e reações observáveis, bem como os sentimentos, as emoções e as representações mentais dos processos subjetivos e inconscientes que não podem ser marcados diretamente. Também explora, examina, testa e pesquisa os conceitos da percepção, da cognição, da atenção, da inteligência, da linguagem, da memória, da fenomenologia, da motivação, da personalidade, do caráter, do comprotamento, dos relacionamentos interpessoais, da resiliência e auto-conhecimento.',
                'main_banner_path' => 'psicologia1.png',
                'secondary_banner_path' => 'psicologia2.png',
                'icon_path' => 'psicologia.png',
                'professional_type_id' => $idTherapeutic,
                'order' => '3',
            ],
            [
                'specialty_type_id' => $idPreventiva->id,
                'name' => 'Psiquiatria',
                'description' => 'Psiquiatria é uma especialidade da Medicina que lida com a prevenção, atendimento, diagnóstico, tratamento e reabilitação das diferentes formas de sofrimentos mentais, sejam elas de cunho orgânico ou funcional, com manifestações psicológicas severas. A meta principal é o alívio do sofrimento e o bem-estar psíquico. Para isso, é necessária uma avaliação completa do paciente, com perspectivas biológicas, psicológias e de ordem cultural, entre outras afins. Uma doença ou problema psíquico pode ser tratado com medicamentos ou terapêuticas diversas, como a psicoterapia, prática de maior tradição no tratamento. A avaliação envolve o exame do estado mental e a história clínica. Testes psicológicos, neuropsicológicos e exames de imagem podem ser utilizados como auxiliares na avaliação, assim como exames físicos e laboratoriais.',
                'main_banner_path' => 'psiquiatria1.jpg',
                'secondary_banner_path' => 'psiquiatria2.jpg',
                'icon_path' => 'psiquiatria.png',
                'professional_type_id' => $idMedical,
                'order' => '1',
            ],
            [
                'specialty_type_id' => $idPreventiva->id,
                'name' => 'Mastologia',
                'description' => 'A mastologia ou senologia é especialidade médica que se dedica ao estudo das glândulas mamárias. O Mastrologista é o especialista que estuda, previne, diagnostica, trata e reabilita todas as doenças da mama. No Brasil, para especializar-se em mastrologia, o médico deve realizar previamente residência médica em Mastologia tem duração de dois anos. O Brasil, neste sentido, é pioneiro, com reconhecimento internacional. A Sociedade Brasileira de Mastologia, é a entidade que representa a especialidade no Brasil. Quando estivermos diante de qualquer suspeita ou diagnóstivo de quaisquer nas mamas ou necessitarmos de respostas para dúvidas a esse respeito, devemos recorrer ao mastologista.',
                'main_banner_path' => 'masto1.jpg',
                'secondary_banner_path' => 'masto2.jpg',
                'icon_path' => 'mastologia.png',
                'professional_type_id' => $idMedical,
                'order' => '5',
            ],
            [
                'specialty_type_id' => $idPreventiva->id,
                'name' => 'Nutrição',
                'description' => 'Nutrição é um processo biológico em que os organismos, utilizando-se de alimentos, assimilam nutrientes para a realização de suas funções vitais. A Boa nutrição depende de uma dieta regular e equilibrada, ou seja, é preciso fornecer ás células do corpo não só a quantidade como também a variedade adequada de nutrientes importantes importantes para seu bom funcionamento. Nutrição clínica é a área de nutrinção pela qual são tratadas as diversas enfermidades(doenças) que acometem o ser humano, através da alimentação. A Nutrição clínica atua também prevenindo e tratando doenças através de uma alimentação saudável e equilibrada de forma terapêutica no controle de patologias.',
                'main_banner_path' => 'nutri1.jpg',
                'secondary_banner_path' => 'nutri2.jpeg',
                'icon_path' => 'nutricao.png',
                'professional_type_id' => $idTherapeutic,
                'order' => '11',
            ],
            [
                'specialty_type_id' => $idPreventiva->id,
                'name' => 'Fonoaudiologia',
                'description' => 'A Fonoaudiologia ou Terapia da fala e Audiologia, antes denominada logopedia é a ciência que tem como objetivo de estudo as funções biológicas e comportamentais envolvidas na comunicação humana. Essas funções incluem funções neurovegetativas (mastigação, deglutição e aspectos funcionais da respeiração) e neurológicas, no que se refere ao seu desenvolvimento, aperfeiçoamento, distúrbios e diferenças, em relação aos aspectos envolvidos nas funções auditiva periférica e central, na função vestibular, na função cognitiva, na linguagem oral e escrita, na fala, na fluência, na voz, nas funções estomatognáticas, orofaciais e na deglutição. O fonoaudiólogo é um profissional da saúde e atua em pesquisa, orientação, perícias, prevenção, avaliação, diagnóstico e tratamento fonoaudiológico na área da comunicação oral e escrita, voz, audição e equilíbrio, sistema nervoso e sistema estomatognático incluindo região cervicofacial.',
                'main_banner_path' => 'fono1.jpg',
                'secondary_banner_path' => 'fono2.jpg',
                'icon_path' => 'fonoaudiologia.png',
                'professional_type_id' => $idTherapeutic,
                'order' => '8',
            ],
            [
                'specialty_type_id' => $idPreventiva->id,
                'name' => 'Pediatria',
                'description' => 'A pediatria é a especialidade médica assistencial preventiva e curativa à criança e ao adolescente. Tem como coadjuvante o médico pediatra, profissional habilitado para orientar e acompanhar estes cuidados, ocupando hoje em dia cerca de 40% das atividades nas clínicas. Na prevenção, as ações médicas variam entre: Aleitamento Materno. Imunizações (vacinas). Prevenção de Acidentes. Acompanhamento e orientação para um crescimento e desenvolvimento saudável (puericultura). Nos curativos, as atividades médicas correspondem aos diversos procedimentos e tratamentos de doenças que a criança e o adolescente pode apresentar. A puericultura, é uma subespecialidade da pediatria que se dedica ao acompanhamento e ao estudo do desenvolvimento infantil, envolvendo às ações pré-natais, a pré-concepção dedicada à prevenção de enfermidades e anormalidades que se desenvolvem no feto e afetam a vida do futuro recém-nascido.',
                'main_banner_path' => 'pediatra1.jpg',
                'secondary_banner_path' => 'pediatra2.jpg',
                'icon_path' => 'pediatria.png',
                'professional_type_id' => $idMedical,
                'order' => '6',
            ],
            [
                'specialty_type_id' => $idIntegrativa->id,
                'name' => 'Acupuntura',
                'description' => 'É uma técnica extremamente sofisticada, e quando utilizada para vários tipos de doença, age como um poderoso ativador das funções de cura do próprio organismo. É um tratamento teratêutico indicado para qualquer tipo de pessoa. O caráter da acupuntuda na Medicina Tradicional Chinesa (MTC) é prioritariamente preventivo, auxiliando as pessoas na manutenção e equilíbrio da saúde. ',
                'main_banner_path' => 'acupuntura1.jpg',
                'secondary_banner_path' => 'acupuntura2.png',
                'icon_path' => 'acupuntura.png',
                'professional_type_id' => $idTherapeutic,
                'order' => '999',
            ],
            [
                'specialty_type_id' => $idIntegrativa->id,
                'name' => 'Floralterapia',
                'description' => 'O objetivo da terapia floral é de auxiliar sutilmente no equilíbrio das emoções. Essa terapia é uma ferramenta complementar que se utiliza de compostos energéticos extraídos das flores, chamados essências florais. Essas essências compõem uma terapia alternativa que foi inspirada na homeopatia. Cada essência é indicada para trabalhar emoções específicas ou conjuntos de emoções. A relação dos aspectos individuais a serem trabalhados, são provenientes das características afins os aspectos energéticos da essência floral e da persona do indivíduo.',
                'main_banner_path' => 'floral1.jpeg',
                'secondary_banner_path' => 'floral2.jpg',
                'icon_path' => 'floralterapia.png',
                'professional_type_id' => $idTherapeutic,
                'order' => '999',
            ],
            [
                'specialty_type_id' => $idIntegrativa->id,
                'name' => 'Cromoterapia',
                'description' => 'Cromoterapia é uma técnica complementar em saúde, reconhecida pela OMS desde 1976, em utilizar a irradiação de cores, com o objetivo de harmonizar a mente-corpo do indivíduo. Atualmente a Fotobiologia, que é o termo para o estudo científico contemporâneo do efeito da luz sobre os humanos, tem substituído o uso da palavra cromoterapia, para Fototerapia, que é uma abordagem de tratamento específica na utilização das luzes de alta intensidade, para tratar desordens específicas de humor, sono e pele.',
                'main_banner_path' => 'cromo1.jpg',
                'secondary_banner_path' => 'cromo2.png',
                'icon_path' => 'cromoterapia.png',
                'professional_type_id' => $idTherapeutic,
                'order' => '999',
            ],
            [
                'specialty_type_id' => $idIntegrativa->id,
                'name' => 'Aromaterapia',
                'description' => 'Aromaterapia é um ramo da fitoterapia, que atualmente, enquanto técnica, vem sendo considerada complementar ou integratica aos cuidados da saúde, funcionando como um instrumento terapêutico auxiliar, explorando o uso dos óleos essenciais extraídos das plantas e suas partes. Os efeitos de seus aromas ao sistema sensorial humano, tem mostrado bons resultados com diversos benefícios psicoemocionais, capazes de provocar o acesso a diversos tipos de memórias, sensações etc.',
                'main_banner_path' => 'aroma1.jpg',
                'secondary_banner_path' => 'aroma2.jpg',
                'icon_path' => 'aromaterapia.png',
                'professional_type_id' => $idTherapeutic,
                'order' => '999',
            ],
            [
                'specialty_type_id' => $idPreventiva->id,
                'name' => 'Neurologia',
                'description' => 'Teste neurologia',
                'main_banner_path' => 'teste.png',
                'secondary_banner_path' => 'teste.png',
                'icon_path' => 'neurologia.jpeg',
                'professional_type_id' => $idTherapeutic,
                'order' => '2',
            ],
            [
                'specialty_type_id' => $idPreventiva->id,
                'name' => 'Ginecologia',
                'description' => 'Teste Ginecologia',
                'main_banner_path' => 'teste.png',
                'secondary_banner_path' => 'teste.png',
                'icon_path' => 'ginecologia.jpeg',
                'professional_type_id' => $idTherapeutic,
                'order' => '7',
            ],
            [
                'specialty_type_id' => $idPreventiva->id,
                'name' => 'Terapia Ocupacional',
                'description' => 'Teste Terapia Ocupacional',
                'main_banner_path' => 'teste.png',
                'secondary_banner_path' => 'teste.png',
                'icon_path' => 'terapia-ocupacional.jpeg',
                'professional_type_id' => $idTherapeutic,
                'order' => '9',
            ],
        ];

        foreach ($pages as $page) {
            Specialization::create($page);
        }

    }
}
