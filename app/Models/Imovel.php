<?php

namespace contatoRapid\Models;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    protected $fillable = [
        'nome',
        'tipo_venda',
        'tipo_imovel',
        'quartos',
        'metro_quadrado',
        'vagas_garagem',
        'condominio'
    ];
}
