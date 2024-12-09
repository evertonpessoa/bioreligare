<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domain\User\Models\MentalHealthPost;
use Illuminate\Database\Eloquent\Builder;

class MentalHealthController extends Controller
{
    public function show() {
        return view('pages.institutional.mental-health', [
            'mentalHealthPosts' => MentalHealthPost::all()->toArray(),
            'quotes' => [
                [
                    'text' => 'BUSQUE O TEU AUTOCONHECIMENTO',
                    'image_path' => 'bioreligare_1_auto-conhecimento.png',
                ],
                [
                    'text' => 'TENHA DISCIPLINA E REGRAS QUE TE AUXILIEM A PLANEJAR TEU DIA',
                    'image_path' => 'bioreligare_2_rotina.png',
                ],
                [
                    'text' => 'UMA BOA NOITE DE SONO PARA RECARREGAR AS BATERIAS DO TEU ORGANISMO',
                    'image_path' => 'bioreligare_3_noite-de-sono.png',
                ],
                [
                    'text' => 'REALIZE ATIVIDADES FÍSICAS COM FREQUÊNCIA',
                    'image_path' => 'bioreligare_4_atividades_fisicas.png',
                ],
                [
                    'text' => 'TENHA MOMENTOS DE LAZER, MESMO QUE A OPÇÃO SEJA NÃO FAZER ABSOLUTAMENTE NADA',
                    'image_path' => 'bioreligare_5_lazer.png',
                ],
                [
                    'text' => 'REALIZE EXAMES DE SAÚDE PREVENTIVOS E PERIÓDICOS',
                    'image_path' => 'bioreligare_6_saude.png',
                ],
                [
                    'text' => 'MANTENHA RELAÇÕES INTERPESSOAIS COM AMIGOS E FAMILIARES',
                    'image_path' => 'bioreligare_7_socialize.png',
                ],
                [
                    'text' => 'SE ESFORCE PARA TER EQUILÍBRIO EMOCIONAL DIANTE DE FATORES ESTRESSANTES DO DIA A DIA',
                    'image_path' => 'bioreligare_8_equilibrio-emocional.png',
                ],
                [
                    'text' => 'PERMITA-SE RELAXAR E FAZER ALGO QUE LHE AGRADE E LHE DE PRAZER',
                    'image_path' => 'bioreligare_9_relaxe.png',
                ],
                [
                    'text' => 'TENHA CUIDADO COM OS ACESSOS EXCESSIVOS AOS APARELHOS ELETRÔNICOS E ÀS REDES SOCIAIS',
                    'image_path' => 'bioreligare_10_uso-excessivo-celular.png',
                ],
                [
                    'text' => 'AME, SE AME, SEJA AMADA(O), SINTA-SE AMADA(O)',
                    'image_path' => 'bioreligare_11_amor-proprio.png',
                ],
                [
                    'text' => 'SE RESPEITE, RESPEITE, SEJA E NÃO PAREÇA',
                    'image_path' => 'bioreligare_12_respeite.png',
                ],
                [
                    'text' => 'PROCURE SEMPRE AJUDA DE PROFISSIONAL ESPECIALIZADO',
                    'image_path' => 'bioreligare_13_terapia.png',
                ],
            ]
        ]);
    }
}
