<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionalProfilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $idTherapeutic = DB::table('professional_types')->select('id')->where('slug', 'equipe-terapeutica')->first()->id;
        $idMedical = DB::table('professional_types')->select('id')->where('slug', 'equipe-medica')->first()->id;

        DB::table('professional_profiles')->insert([
            [
                'name' => 'Me. João Felipe de Souza Pegado',
                'phone' => '1234567890',
                'photo_path' => '1-joaofelipe.jpg',
                'professional_type_id' => $idTherapeutic,
                'started_working_at' => '2021-11-10 16:53:37',
                'resumee_body' =>  'Formação em Psicologia pela Universidade do Ibirapuera (UniB-SP, 1996-2000). Graduação (Bacharelado e Licenciatura) em Psicologia pela Potiguar Laureate International Universities (UnP-RN, 2005-2006). Iniciação Científica e Apoio a Pesquisa pelo Instituto Internacional de Neurociências Edmond Lily Safra (IINNELS, 2006.2-2010). Pós-Graduação: Aluno Especial (AE) em Psicobiologia pela Universidade Federal do Rio Grande do Norte (UFRN, 2007-2008).Pós-Graduação: Mestrado em Ciências da Saúde pelo Hospital Universitário Onofre Lopes, da UFRN (PPGCSA-HUOL, 2010-2012).Pesquisador e Apoio a Pesquisa pelo Instituto do Cérebro (ICe/UFRN, 2010-2013.2).Pós-Graduação: Especialização em Neuropsicologia Clínica pela Potiguar Laureate International Universities (UnP-RN, 2016-2017.1). Conselho de Classe: CRP-RN 17/1341. Atuação Profissional: Psicologia Clínica e Hospitalar; Psicoterapia com ênfase em Terapia Cognitivo-Comportamental (TCC); Psicodiagnóstico; Avaliação Neuropsicológica; Orientação Vocacional; Abuso Sexual e Violência na Família; Dependência Química; Luto; Home Care; Acompanhamento Pré-Pós procedimento cirúrgico por Gastroplastia/Bariátrica; Pesquisador. Público-alvo: Adulto, Idoso, Casal, Família. Disponibilidade de Horário: De 3a , 4a , 5a  6a feira, das 13h às 19h. Convênio: Toda rede Amil / Med+, Unimed, Saúde Caixa, Marinha, Particular e Clínica Social. Parceiros: Associações, Sindicatos, Empresas. Nota: Fundador-Gestor-Diretor Geral da Clínica BioReligare. http://lattes.cnpq.br/1581430483113411',
            ],
            [
                'name' => 'Ma. Michelle Cristine Mazzetto Betti',
                'phone' => '1234567890',
                'photo_path' => '37-michellebetti.jpg',
                'professional_type_id' => $idTherapeutic,
                'started_working_at' => '2021-11-10 16:53:37',
                'resumee_body' => 'teste'
            ],
            [
                'name' => 'Esp. Guilherme Cardoso Sanz',
                'phone' => '1234567890',
                'photo_path' => '3-guilhermecardoso.jpg',
                'professional_type_id' => $idTherapeutic,
                'started_working_at' => '2021-11-10 16:53:37',
                'resumee_body' => 'Formação em Psicologia pela Federação das Faculdades Celso Lisboa (FEFACEL- RJ, 1990). Especialista em Psicologia Clínica pelo Conselho Federal de Psicologia (CFP, 2000). Aurículoterapeuta pelo Instituto Dr. China (2016). Aurículoterapeuta pela Associação Brasileira de Acupuntura (ABA-RN, 2017). Pós-Graduando em Acupuntura pela Associação Brasileira de Acupuntura (ABA-RN, 2016 em curso). Conselho de Classe: CRP-RN 17/2514. Atuação Profissional: Psicologia Clínica / Psicoterapia com ênfase em Terapia Humanista-Existencial, Dependência Química, Grupos Terapêuticos, Aurículoterapia. Público-alvo: Adolescentes, adultos e idosos. Disponibilidade de Horário: De 2ª à 6ª feira das 8h às 20h. Convênio: Toda rede Amil / Med+, Saúde Caixa, Cassi, Marinha, Clínica Social, Associações, Sindicatos, Empresas, Parcerias, e Particular.',
            ],
            [
                'name' => 'Ma. Kadidja Suelen de Lucena Santos',
                'phone' => '1234567890',
                'photo_path' => '4-kadidjasuelen.jpg',
                'professional_type_id' => $idTherapeutic,
                'started_working_at' => '2021-11-10 16:53:37',
                'resumee_body' => 'Graduação em Psicologia pela Universidade Federal do Rio Grande do Norte (UFRN, 2014). Pós-Graduação (Stricto Sensu) Mestrado em Psicologia pela Universidade Federal do Rio Grande do Norte (UFRN, 2018).                Atuação Profissional: Psicologia Clínica com ênfase na Abordagem Fenomenológica Existencial. Público-Alvo: Infanto-Juvenil, Adulto. Disponibilidade de Horário: De 2a feira das 8h às 11h / na 3a de 8h às 11h e de 13:30h às 17h / e nas 4as feiras das 14h às 18h. Convênio: Toda rede Amil / Med+, Unimed, Saúde Caixa, Cassi, Marinha.',
            ],
            [
                'name' => 'Esp. Margallyza Martins Viana',
                'phone' => '1234567890',
                'photo_path' => '5-margallyza.jpg',
                'professional_type_id' => $idTherapeutic,
                'started_working_at' => '2021-11-10 16:53:37',
                'resumee_body' => 'Formação em Psicologia pela Universidade Potiguar Laureate International Universities (UnP-RN, 2006). Especialização em Dança Movimento Terapia pela Universidad Caece de Buenos Aires (CAECE, 2010). Conselho de Classe: CRP-RN 17/1337. Atuação Profissional: Psicóloga Clínica / Psicoterapeuta Infanto-Juvenil com ênfase terapêutica Humanista-Existencial; Dança Terapia. Público-alvo: Criança, adolescente, adulto, família. Disponibilidade de Horário: De 2ª das 8h às 17h, de 3ª à 5ª das 8h às 13h e aos Sábados de 8h à 13h. Convênio: Toda rede Amil / Med+, Saúde Caixa, Cassi, Marinha, Clínica Social, Associações, Sindicatos, Empresas, Parcerias, e Particular.',
            ],
            [
                'name' => 'Esp. Marianna Rocha',
                'phone' => '1234567890',
                'photo_path' => '6-mariannerocha.jpg',
                'professional_type_id' => $idTherapeutic,
                'started_working_at' => '2021-11-10 16:53:37',
                'resumee_body' => 'Formação em Psicologia pela Universidade Potiguar Laureate International Universities (UnP-RN, 2006).Pós-Graduação / Especialização (Latu Sensu) em Psicologia da Saúde pela Universidade Federal do Rio Grande do Norte (UFRN, 2008).Pós-Graduação / Especialização (Latu Sensu) em Psicologia do Trânsito pela Faculdade Estácio de Sá (FES-RN, 2015). Conselho de Classe: CRP-RN 17/ 1366. Atuação Profissional: Psicóloga Clínica / do Trânsito / em Políticas Públicas e Assistência Social / Psicoterapeuta com ênfase na Abordagem Centrada na Pessoa (ACP), Humanista-Existencial. Público-alvo: Atendimentos individuais para Infanto-Juvenil, adultos e idosos.Disponibilidade de Horário: 4a feira das 14h às 16h e 5a feira das 14h às 15:30hConvênio: Toda rede Amil / Med+, Saúde Caixa, Cassi, Marinha, Clínica Social, Associações, Sindicatos, Empresas, Parcerias, e Particular.',
            ],
            [
                'name' => 'Esp. Roberta Montenegro Varella Dutra',
                'phone' => '1234567890',
                'photo_path' => '7-robertamontenegro.jpg',
                'professional_type_id' => $idTherapeutic,
                'started_working_at' => '2021-11-10 16:53:37',
                'resumee_body' => 'Formação em Psicologia pela Universidade Potiguar Laureate International Universities (UnP-RN, 2008).Pós Graduação (Latu sensu) em Neuropsicologia pela Universidade Potiguar Laureate International Universities (UnP-RN, 2018).Conselho de Classe: CRP-RN 17/1579                Atuação Profissional: Psicóloga Clínica e Hospitalar / Psicoterapeuta com ênfase em Aconselhamento (ACP) e Orientação Psicológica Centrada na Pessoa (Rogeriana).Público-alvo: Adultos e Idosos.Disponibilidade de Horário: de 2a à 6a feira das 08h às 13h.Convênio: Toda rede Amil / Med+, Saúde Caixa, Cassi, Marinha, Clínica Social, Associações, Sindicatos, Empresas, Parcerias, e Particular.',
            ],
            [
                'name' => 'Esp. Ana Cristina Pinheiro',
                'phone' => '1234567890',
                'photo_path' => '8-anacristina.jpg',
                'professional_type_id' => $idTherapeutic,
                'started_working_at' => '2021-11-10 16:53:37',
                'resumee_body' => 'Graduada em Psicologia pelo Centro Universitário do Rio Grande do Norte (UNI-RN, 2014).Pós-graduada em Psicopedagogia Institucional e Clínica pela Faculdade de Ciências Educacionais e Empresariais de Natal (FACEN, 2016 – 2018).Pós-graduada em Educação Especial pela Faculdade de Ciências Educacionais e Empresariais de Natal (FACEN, 2016 – 2018).Pós-graduanda em Neuropsicologia pela Universidade Federal do Rio Grande do Norte.Graduação (UFRN, 2018 – 2019).Conselho de classe: CRP-RN, 17/ 2873. Atuação Profissional: Psicologia Clínica; Psicoterapia com ênfase em Terapia Psicanalítica. Público-alvo: Criança, Adolescente, Adulto e Idoso.Disponibilidade de horário: 3a das 13h às 18h / 4a das 13h às 18h / 5a das 13h às 18h / 6a das 13h às 18h. Convênio: Toda rede Amil/ Med+, Saúde Caixa, Marinha, Clínica Social e Particular.',
            ],
            [
                'name' => 'Esp. Maria Valdilene de Oliveira',
                'phone' => '1234567890',
                'photo_path' => '9-mariavaldilene.jpg',
                'professional_type_id' => $idTherapeutic,
                'started_working_at' => '2021-11-10 16:53:37',
                'resumee_body' => 'Graduação em Bacharel em Psicologia pela Potiguar Laureate International Universities (UNP-RN, 2008-2012).Pós-Graduação em Neuropsicologia pela Potiguar Laureate International Universities (UNP-RN, 2017-2019).Pós-Graduação em Psicopedagogia Institucional e Clínica na área do conhecimento “Ensino Aprendizagem” pela Faculdade de Ciências Educacionais e Empresariais de Natal/RN, Brasil – (FACEN, 2016-2018).Conselho de Classe: 17/ 2361. Atuação Profissional: Psicologia Clínica e Psicoterapia infanto-juvenil, Psicopedagogia, Orientação Familiar e Institucional.Público Alvo: Crianças, Adolescentes, Pais e Professores.Disponibilidade de Horários: De 2a e 4a Feira das 08:00h às 13:00h; Nas 3as, 5as e 6as Feiras das 13:00h às 20:00h.Convênios: Toda rede Amil e Med+, Unimed, Humana Saúde, Saúde Caixa, Marinha, Particular, Clínica Social.',
            ],
            [
                'name' => 'Esp. Ana Aline Damasceno de Freitas Lizárraga',
                'phone' => '1234567890',
                'photo_path' => '10-anaaline.jpg',
                'professional_type_id' => $idTherapeutic,
                'started_working_at' => '2021-11-10 16:53:37',
                'resumee_body' => 'Graduação em Psicologia pelo Centro Universitário Facex (UNIFACEX-RN, (2012.2)Pós-Graduação em Psicologia Clínica e Psicoterapia Infantil pela Universidade Potiguar Laureate International  Universities (UNPRN, 2014-2016). Atuação Profissional: Psicologia clínica e psicoterapia infantil na abordagem Psicodinâmica e ABA (Applied Behavior Analysis); Transtornos infantis: Autismo, TDAH (Transtorno déficit de atenção), Ansiedade e Depressão na infância; Orientação-Intervenção Familiar. Público Alvo: Crianças e Adolescentes. Disponibilidade: Segunda-feira: das 08:30 às 12:30 (modalidade on-line) e Quarta-feira das  08:30 às 12:30. Terça-feira e Quinta-feira: das 08:30 às 12:30 e 14:00 às 18:00. Convênios: Toda rede Amil e Med+, Unimed, Humana Saúde, Marinha, Saúde Caixa e Particular.',
            ],
            [
                'name' => 'Fabiana dos Santos Cunha Dantas Demétrio',
                'phone' => '1234567890',
                'photo_path' => '11-fabianacunha.jpg',
                'professional_type_id' => $idTherapeutic,
                'started_working_at' => '2021-11-10 16:53:37',
                'resumee_body' => 'teste'
            ],
            [
                'name' => 'Esp. Gabriela Bonazza Ventura Carneiro',
                'phone' => '1234567890',
                'photo_path' => '12-gabrielabonazza.jpg',
                'professional_type_id' => $idTherapeutic,
                'started_working_at' => '2021-11-10 16:53:37',
                'resumee_body' => 'teste'
            ],
            [
                'name' => 'Camila Meire Salvador do Nascimento',
                'phone' => '1234567890',
                'photo_path' => '13-camilameire.jpg',
                'professional_type_id' => $idTherapeutic,
                'started_working_at' => '2021-11-10 16:53:37',
                'resumee_body' => 'teste'
            ],
            [
                'name' => 'Maria do Socorro Maciel Lins (Lilian Lins)',
                'phone' => '1234567890',
                'photo_path' => '14-mariadocarmo-lilianlins.jpeg',
                'professional_type_id' => $idTherapeutic,
                'started_working_at' => '2021-11-10 16:53:37',
                'resumee_body' => 'teste'
            ],
            [
                'name' => 'Arethusa de Souza Perazzo Avelino',
                'phone' => '1234567890',
                'photo_path' => '15-arethusaperazzo.jpg',
                'professional_type_id' => $idTherapeutic,
                'started_working_at' => '2021-11-10 16:53:37',
                'resumee_body' => 'teste'
            ],
            [
                'name' => 'Esp. Marratima Dayanna da Silva Bezerra',
                'phone' => '1234567890',
                'photo_path' => '',
                'professional_type_id' => $idTherapeutic,
                'started_working_at' => '2021-11-10 16:53:37',
                'resumee_body' => 'teste'
            ],
            [
                'name' => 'Esp. Elineide Ribeiro Rosa',
                'phone' => '1234567890',
                'photo_path' => '',
                'professional_type_id' => $idTherapeutic,
                'started_working_at' => '2021-11-10 16:53:37',
                'resumee_body' => 'teste'
            ],
            [
                'name' => 'Esp. Joseni José de Araújo',
                'phone' => '1234567890',
                'photo_path' => '18-josenijosearaujo.jpg',
                'professional_type_id' => $idTherapeutic,
                'started_working_at' => '2021-11-10 16:53:37',
                'resumee_body' => 'teste'
            ],
            [
                'name' => 'Esp. Francimara de Souza',
                'phone' => '1234567890',
                'photo_path' => '19-francimaradesouza.jpg',
                'professional_type_id' => $idTherapeutic,
                'started_working_at' => '2021-11-10 16:53:37',
                'resumee_body' => 'teste'
            ],
            [
                'name' => 'Esp. Thaís Morais do Nascimento',
                'phone' => '1234567890',
                'photo_path' => '20-thaismoraisdenascimento.jpeg',
                'professional_type_id' => $idTherapeutic,
                'started_working_at' => '2021-11-10 16:53:37',
                'resumee_body' => 'teste'
            ],
            [
                'name' => 'Esp. Maria Isabel Barbosa da Silva',
                'phone' => '1234567890',
                'photo_path' => '21-mariaisabel.jpg',
                'professional_type_id' => $idTherapeutic,
                'started_working_at' => '2021-11-10 16:53:37',
                'resumee_body' => 'teste'
            ],
            [
                'name' => ' Esp. Vanessa do Nascimento Araújo',
                'phone' => '1234567890',
                'photo_path' => '22-vanessadonascimentoaraujo.jpg',
                'professional_type_id' => $idTherapeutic,
                'started_working_at' => '2021-11-10 16:53:37',
                'resumee_body' => 'teste'
            ],
            [
                'name' => 'Esp. Milena Priscila Paiva Salviano',
                'phone' => '1234567890',
                'photo_path' => '23-milenapaivasalviano.jpg',
                'professional_type_id' => $idTherapeutic,
                'started_working_at' => '2021-11-10 16:53:37',
                'resumee_body' => 'teste'
            ],
            [
                'name' => 'Iana Dutra Passos Sales',
                'phone' => '1234567890',
                'photo_path' => '24-ianadutra.jpg',
                'professional_type_id' => $idTherapeutic,
                'started_working_at' => '2021-11-10 16:53:37',
                'resumee_body' => 'teste'
            ],
            [
                'name' => 'Terezinha Fabricio Toscano de Brito',
                'phone' => '1234567890',
                'photo_path' => '25-terezinhatoscano.jpg',
                'professional_type_id' => $idTherapeutic,
                'started_working_at' => '2021-11-10 16:53:37',
                'resumee_body' => 'teste'
            ],
            [
                'name' => 'Esp. Keyvillane Melo da Cunha',
                'phone' => '1234567890',
                'photo_path' => '26-keyvillanemelo.jpg',
                'professional_type_id' => $idTherapeutic,
                'started_working_at' => '2021-11-10 16:53:37',
                'resumee_body' => 'teste'
            ],
            [
                'name' => 'Márcia Barbosa BEzerra Franco',
                'phone' => '1234567890',
                'photo_path' => '27-marciabarbosa.jpg',
                'professional_type_id' => $idTherapeutic,
                'started_working_at' => '2021-11-10 16:53:37',
                'resumee_body' => 'teste'
            ],
            [
                'name' => 'Esp. Ilana Costa de Azevedo',
                'phone' => '1234567890',
                'photo_path' => '28-ilanacosta.jpg',
                'professional_type_id' => $idTherapeutic,
                'started_working_at' => '2021-11-10 16:53:37',
                'resumee_body' => 'teste'
            ],
            [
                'name' => 'Esp. Francisca Suely Inácio da Silva Alves',
                'phone' => '1234567890',
                'photo_path' => '29-franciscasuely.jpg',
                'professional_type_id' => $idTherapeutic,
                'started_working_at' => '2021-11-10 16:53:37',
                'resumee_body' => 'teste'
            ],
            [
                'name' => 'Esp. Ligia Cristina Borges Tinoco',
                'phone' => '1234567890',
                'photo_path' => '',
                'professional_type_id' => $idTherapeutic,
                'started_working_at' => '2021-11-10 16:53:37',
                'resumee_body' => 'teste'
            ],
            [
                'name' => 'Jacqueline Falcão Wanderley',
                'phone' => '1234567890',
                'photo_path' => '31-jacquelinefalcao.jpǵ',
                'professional_type_id' => $idTherapeutic,
                'started_working_at' => '2021-11-10 16:53:37',
                'resumee_body' => 'teste'
            ],
            [
                'name' => 'Renata Íris de Albuquerque Lima',
                'phone' => '1234567890',
                'photo_path' => '32-renatairis.jpg',
                'professional_type_id' => $idTherapeutic,
                'started_working_at' => '2021-11-10 16:53:37',
                'resumee_body' => 'teste'
            ],
            [
                'name' => 'Elizabeth Crepaldi',
                'phone' => '1234567890',
                'photo_path' => '33-elizabethcrepaldi.jpg',
                'professional_type_id' => $idTherapeutic,
                'started_working_at' => '2021-11-10 16:53:37',
                'resumee_body' => 'teste'
            ],
            [
                'name' => 'Deuseli Tomé de Souza',
                'phone' => '1234567890',
                'photo_path' => '34-deuseli.jpg',
                'professional_type_id' => $idTherapeutic,
                'started_working_at' => '2021-11-10 16:53:37',
                'resumee_body' => 'teste'
            ],
            [
                'name' => 'Dr. Juarez e Silva Chagas',
                'phone' => '1234567890',
                'photo_path' => '35-drjuarezesilva.png',
                'professional_type_id' => $idTherapeutic,
                'started_working_at' => '2021-11-10 16:53:37',
                'resumee_body' => 'teste'
            ],
            [
                'name' => 'Kalígia',
                'phone' => '1234567890',
                'photo_path' => '36-kaligia.jpg',
                'professional_type_id' => $idTherapeutic,
                'started_working_at' => '2021-11-10 16:53:37',
                'resumee_body' => 'teste'
            ],
        ]);

        // Equipe médica
        DB::table('professional_profiles')->insert([
            [
                'name' => 'Dr. Eliel de Souza',
                'phone' => '1234567890',
                'photo_path' => '1-drelieldesouza.jpg',
                'professional_type_id' => $idMedical,
                'started_working_at' => '2021-11-10 16:53:37',
                'resumee_body' => 'Graduação em Medicina pela Universidade Federal do Rio Grande do Norte (HUOL – UFRN, 1985). Residência/Especialização em Mastologia (CREMERN, 1992).Especialização pela Associação Médica Brasileira e Sociedade Brasileira de Mastologia (AMB, 1992).Conselho de Classe: CRM-RN 2119Atuação Profissional: Tem experiência médica com ênfase em oncologia mamária atuando principalmente nos temas: tratamento conservador do câncer de mama, reconstrução do complexo aréolo-papilar e harmonização das mamas, ultrassonografia e citologia mamária point of care, biopsias mamárias, marcação pré-operatória de lesões mamárias impalpáveis, marcação do sítio tumoral no tratamento neo-adjuvante do câncer de mama. Inventor do Sistema BAMSIL para identificação de margens de espécimes cirúrgicos, tubo de arrasto para biopsias de mama e protetor resiliente para transdutor de ultrassom.Público-alvo: Adolescente, Adulto e Idoso.Disponibilidade de Horário:  3ª feira a partir das 11:30h AM. Nota.: Médico Cirurgião mastologista, mestre em Ciências da Saúde. Bacharel em Comunicação Social-Jornalismo (2006) pela UFRN. Pós–graduação em citologia oncótica (em curso) e dermopigmentação (em curso).  Mastologista do Hospital Universitário Onofre Lopes (UFRN). Pesquisador ( HUOL).',
            ],
            [
                'name' => 'Dr. Victor Adib Feitosa',
                'phone' => '1234567890',
                'photo_path' => '2-drvictoradib.jpg',
                'professional_type_id' => $idMedical,
                'started_working_at' => '2021-11-10 16:53:37',
                'resumee_body' => 'Graduação em Medicina pela Universidade Federal do Rio Grande do Norte (UFRN, 2014).Residência / Especialização em Psiquiatria (CREMERN, 2017). Conselho de Classe: CRM-RN 7587. Atuação Profissional: Psiquiatria Clínica (Consultório / Ambulatório / Hospital). Público-alvo: Adulto e Idoso.Disponibilidade de Horário: Nas 3as feiras e 5as feiras, das 14h às 18h. Convênio: Toda rede Amil / Med+, Saúde Caixa, Humana Saúde, Particular.',
            ],
            [
                'name' => 'Dr. Marco Túlio Ferreira Neves de Almeida',
                'phone' => '1234567890',
                'photo_path' => '3-drmarcotulio.jpg',
                'professional_type_id' => $idMedical,
                'started_working_at' => '2021-11-10 16:53:37',
                'resumee_body' => 'Graduação em medicina pela Potiguar Laureate International Universities (UnP-RN, 2018).Residência médica R3 em psiquiatria pelo Hospital Dr. João Machado (SESAP, 2019 em curso).Conselho de Classe: CRM-RN 9758. Atuação Profissional: Clínica médica com direcionamento em Psiquiatria Clínica (Consultório / Ambulatório / Hospital).Público-alvo: Adulto e Idoso.Disponibilidade de Horário: Nas 2as feiras e 4as feiras das 14h às 18h.Convênio: Toda rede Amil / Med+, Saúde Caixa, Humana Saúde, Particular.',
            ],
            [
                'name' => 'Dra. Delianne Azevedo Barbosa',
                'phone' => '1234567890',
                'photo_path' => '4-dra.delianne.jpg',
                'professional_type_id' => $idMedical,
                'started_working_at' => '2021-11-10 16:53:37',
                'resumee_body' => 'Graduação em biomedicina pela Universidade Federal do Rio Grande do Norte (UFRN, 2012).Graduação em medicina pela Potiguar Laureate International Universities (UnP-RN, 2016).Residência médica R3 em psiquiatria pelo Hospital Dr. João Machado (SESAP, 2018 em curso).                Conselho de Classe: CRM-RN  8736.Atuação Profissional: Psiquiatria Clínica (Consultório / Ambulatório / Hospital).Público-alvo: Adolescente, Adulto e Idoso. Disponibilidade de Horário: Nas 2as feiras, das 8h às 13h.Convênio: Toda rede Amil / Med+, Saúde Caixa, Humana Saúde, Particular.',
            ],
            [
                'name' => 'Dr. Alvarez Kelly Araújo da Cunha',
                'phone' => '1234567890',
                'photo_path' => '5-dralvarez.jpg',
                'professional_type_id' => $idMedical,
                'started_working_at' => '2021-11-10 16:53:37',
                'resumee_body' => 'teste'
            ],
        ]);
    }
}
