<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionalProfileSpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Professionals
        $id1 = DB::table('professional_profiles')->select('id')->where('name', 'Me. João Felipe de Souza Pegado')->first()->id;
        $id2 = DB::table('professional_profiles')->select('id')->where('name', 'Ma. Michelle Cristine Mazzetto Betti')->first()->id;
        $id3 = DB::table('professional_profiles')->select('id')->where('name', 'Esp. Guilherme Cardoso Sanz')->first()->id;
        $id4 = DB::table('professional_profiles')->select('id')->where('name', 'Ma. Kadidja Suelen de Lucena Santos')->first()->id;
        $id5 = DB::table('professional_profiles')->select('id')->where('name', 'Esp. Margallyza Martins Viana')->first()->id;
        $id6 = DB::table('professional_profiles')->select('id')->where('name', 'Esp. Marianna Rocha')->first()->id;
        $id7 = DB::table('professional_profiles')->select('id')->where('name', 'Esp. Roberta Montenegro Varella Dutra')->first()->id;
        $id8 = DB::table('professional_profiles')->select('id')->where('name', 'Esp. Ana Cristina Pinheiro')->first()->id;
        $id9 = DB::table('professional_profiles')->select('id')->where('name', 'Esp. Maria Valdilene de Oliveira')->first()->id;
        $id10 = DB::table('professional_profiles')->select('id')->where('name', 'Esp. Ana Aline Damasceno de Freitas Lizárraga')->first()->id;
        $id11 = DB::table('professional_profiles')->select('id')->where('name', 'Fabiana dos Santos Cunha Dantas Demétrio')->first()->id;
        $id12 = DB::table('professional_profiles')->select('id')->where('name', 'Esp. Gabriela Bonazza Ventura Carneiro')->first()->id;
        $id13 = DB::table('professional_profiles')->select('id')->where('name', 'Camila Meire Salvador do Nascimento')->first()->id;
        $id14 = DB::table('professional_profiles')->select('id')->where('name', 'Kalígia')->first()->id;
        $id15 = DB::table('professional_profiles')->select('id')->where('name', 'Maria do Socorro Maciel Lins (Lilian Lins)')->first()->id;
        $id16 = DB::table('professional_profiles')->select('id')->where('name', 'Arethusa de Souza Perazzo Avelino')->first()->id;
        $id17 = DB::table('professional_profiles')->select('id')->where('name', 'Esp. Marratima Dayanna da Silva Bezerra')->first()->id;
        $id18 = DB::table('professional_profiles')->select('id')->where('name', 'Esp. Elineide Ribeiro Rosa')->first()->id;
        $id19 = DB::table('professional_profiles')->select('id')->where('name', 'Esp. Joseni José de Araújo')->first()->id;
        $id20 = DB::table('professional_profiles')->select('id')->where('name', 'Esp. Francimara de Souza')->first()->id;
        $id21 = DB::table('professional_profiles')->select('id')->where('name', 'Esp. Thaís Morais do Nascimento')->first()->id;
        $id22 = DB::table('professional_profiles')->select('id')->where('name', 'Esp. Maria Isabel Barbosa da Silva')->first()->id;
        $id23 = DB::table('professional_profiles')->select('id')->where('name', ' Esp. Vanessa do Nascimento Araújo')->first()->id;
        $id24 = DB::table('professional_profiles')->select('id')->where('name', 'Esp. Milena Priscila Paiva Salviano')->first()->id;
        $id25 = DB::table('professional_profiles')->select('id')->where('name', 'Iana Dutra Passos Sales')->first()->id;
        $id26 = DB::table('professional_profiles')->select('id')->where('name', 'Terezinha Fabricio Toscano de Brito')->first()->id;
        $id27 = DB::table('professional_profiles')->select('id')->where('name', 'Esp. Keyvillane Melo da Cunha')->first()->id;
        $id28 = DB::table('professional_profiles')->select('id')->where('name', 'Márcia Barbosa BEzerra Franco')->first()->id;
        $id29 = DB::table('professional_profiles')->select('id')->where('name', 'Esp. Ilana Costa de Azevedo')->first()->id;
        $id30 = DB::table('professional_profiles')->select('id')->where('name', 'Esp. Francisca Suely Inácio da Silva Alves')->first()->id;
        $id31 = DB::table('professional_profiles')->select('id')->where('name', 'Esp. Ligia Cristina Borges Tinoco')->first()->id;
        $id32 = DB::table('professional_profiles')->select('id')->where('name', 'Jacqueline Falcão Wanderley')->first()->id;
        $id33 = DB::table('professional_profiles')->select('id')->where('name', 'Renata Íris de Albuquerque Lima')->first()->id;
        $id34 = DB::table('professional_profiles')->select('id')->where('name', 'Elizabeth Crepaldi')->first()->id;
        $id35 = DB::table('professional_profiles')->select('id')->where('name', 'Deuseli Tomé de Souza')->first()->id;
        $id36 = DB::table('professional_profiles')->select('id')->where('name', 'Dr. Juarez e Silva Chagas')->first()->id;
        $id37 = DB::table('professional_profiles')->select('id')->where('name', 'Dr. Eliel de Souza')->first()->id;
        $id38 = DB::table('professional_profiles')->select('id')->where('name', 'Dr. Victor Adib Feitosa')->first()->id;
        $id39 = DB::table('professional_profiles')->select('id')->where('name', 'Dr. Marco Túlio Ferreira Neves de Almeida')->first()->id;
        $id40 = DB::table('professional_profiles')->select('id')->where('name', 'Dra. Delianne Azevedo Barbosa')->first()->id;
        $id41 = DB::table('professional_profiles')->select('id')->where('name', 'Dr. Alvarez Kelly Araújo da Cunha')->first()->id;

        // Specializations
        $specializationId1 = DB::table('specializations')->select('id')->where('slug', 'neuropsicologia')->first()->id;
        $specializationId2 = DB::table('specializations')->select('id')->where('slug', 'psicologia')->first()->id;
        $specializationId3 = DB::table('specializations')->select('id')->where('slug', 'psiquiatria')->first()->id;
        $specializationId4 = DB::table('specializations')->select('id')->where('slug', 'mastologia')->first()->id;
        $specializationId5 = DB::table('specializations')->select('id')->where('slug', 'nutricao')->first()->id;
        $specializationId6 = DB::table('specializations')->select('id')->where('slug', 'fonoaudiologia')->first()->id;
        $specializationId7 = DB::table('specializations')->select('id')->where('slug', 'pediatria')->first()->id;
        $specializationId8 = DB::table('specializations')->select('id')->where('slug', 'acupuntura')->first()->id;
        $specializationId9 = DB::table('specializations')->select('id')->where('slug', 'floralterapia')->first()->id;
        $specializationId10 = DB::table('specializations')->select('id')->where('slug', 'cromoterapia')->first()->id;
        $specializationId11 = DB::table('specializations')->select('id')->where('slug', 'aromaterapia')->first()->id;

        DB::table('professional_profile_specialization')->insert([
            [
                'professional_profile_id' => $id1,
                'specialization_id' =>  $specializationId1,
            ],
            [
                'professional_profile_id' => $id2,
                'specialization_id' =>  $specializationId1,
            ],
            [
                'professional_profile_id' => $id3,
                'specialization_id' =>  $specializationId2,
            ],
            [
                'professional_profile_id' => $id4,
                'specialization_id' =>  $specializationId2,
            ],
            [
                'professional_profile_id' => $id5,
                'specialization_id' =>  $specializationId2,
            ],
            [
                'professional_profile_id' => $id6,
                'specialization_id' =>  $specializationId2,
            ],
            [
                'professional_profile_id' => $id7,
                'specialization_id' =>  $specializationId1,
            ],
            [
                'professional_profile_id' => $id8,
                'specialization_id' =>  $specializationId1,
            ],
            [
                'professional_profile_id' => $id9,
                'specialization_id' =>  $specializationId1,
            ],
            [
                'professional_profile_id' => $id10,
                'specialization_id' =>  $specializationId2,
            ],
            [
                'professional_profile_id' => $id11,
                'specialization_id' =>  $specializationId2,
            ],
            [
                'professional_profile_id' => $id12,
                'specialization_id' =>  $specializationId2,
            ],
            [
                'professional_profile_id' => $id13,
                'specialization_id' =>  $specializationId2,
            ],
            [
                'professional_profile_id' => $id14,
                'specialization_id' =>  $specializationId2,
            ],
            [
                'professional_profile_id' => $id15,
                'specialization_id' =>  $specializationId2,
            ],
            [
                'professional_profile_id' => $id16,
                'specialization_id' =>  $specializationId2,
            ],
            [
                'professional_profile_id' => $id17,
                'specialization_id' =>  $specializationId1,
            ],
            [
                'professional_profile_id' => $id18,
                'specialization_id' =>  $specializationId2,
            ],
            [
                'professional_profile_id' => $id19,
                'specialization_id' =>  $specializationId2,
            ],
            [
                'professional_profile_id' => $id20,
                'specialization_id' =>  $specializationId2,
            ],
            [
                'professional_profile_id' => $id21,
                'specialization_id' =>  $specializationId2,
            ],
            [
                'professional_profile_id' => $id22,
                'specialization_id' =>  $specializationId2,
            ],
            [
                'professional_profile_id' => $id23,
                'specialization_id' =>  $specializationId2,
            ],
            [
                'professional_profile_id' => $id24,
                'specialization_id' =>  $specializationId2,
            ],
            [
                'professional_profile_id' => $id25,
                'specialization_id' =>  $specializationId2,
            ],
            [
                'professional_profile_id' => $id26,
                'specialization_id' =>  $specializationId6,
            ],
            [
                'professional_profile_id' => $id27,
                'specialization_id' =>  $specializationId6,
            ],
            [
                'professional_profile_id' => $id28,
                'specialization_id' =>  $specializationId5,
            ],
            [
                'professional_profile_id' => $id29,
                'specialization_id' =>  $specializationId5,
            ],
            [
                'professional_profile_id' => $id30,
                'specialization_id' =>  $specializationId5,
            ],
            [
                'professional_profile_id' => $id31,
                'specialization_id' =>  $specializationId1,
            ],
            [
                'professional_profile_id' => $id32,
                'specialization_id' =>  $specializationId2,
            ],
            [
                'professional_profile_id' => $id33,
                'specialization_id' =>  $specializationId5,
            ],
            [
                'professional_profile_id' => $id34,
                'specialization_id' =>  $specializationId5,
            ],
            [
                'professional_profile_id' => $id35,
                'specialization_id' =>  $specializationId2,
            ],
            [
                'professional_profile_id' => $id36,
                'specialization_id' =>  $specializationId2,
            ],
            [
                'professional_profile_id' => $id37,
                'specialization_id' =>  $specializationId4,
            ],
            [
                'professional_profile_id' => $id38,
                'specialization_id' =>  $specializationId3,
            ],
            [
                'professional_profile_id' => $id39,
                'specialization_id' =>  $specializationId3,
            ],
            [
                'professional_profile_id' => $id40,
                'specialization_id' =>  $specializationId3,
            ],
            [
                'professional_profile_id' => $id41,
                'specialization_id' =>  $specializationId7,
            ],
        ]);
    }
}
