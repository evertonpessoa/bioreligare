<?php

namespace App\Domain\User\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    use HasFactory;

    protected $fillable = [
        'main_phone',
        'whatsapp_principal',
        'whatsapp_secundario',
        'contact_email',
        'endereco_rua_matriz',
        'endereco_numero_matriz',
        'endereco_complemento_matriz',
        'endereco_ponto_referencia_matriz',

        'filial_main_phone',
        'filial_main_whatsapp',
        'filial_secondary_whatsapp',
        'filial_contact_email',
        'endereco_rua_filial',
        'endereco_numero_filial',
        'endereco_complemento_filial',
        'endereco_ponto_referencia_filial',

        'facebook',
        'instagram',
        'linkedin',
    ];
}
