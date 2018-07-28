<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Militar extends Model
{
    // especifica a tabela do banco de dados ao qual essa model representa
    protected $table = 'militares';
    
    // converte o campo data_nascimento para objeto data do tipo Carbon
    protected $dates = ['data_nascimento'];
    
    // converte o campo servico_militar_obrigatorio(tipo 1/0) para booleano(true/false)
    protected $casts = [
        'servico_militar_obrigatorio' => 'boolean'  
    ];
    
    const patentes = ['Soldado', 'Cabo', 'Sargento', 'Subtenente', 'Tenente', 'Capitão', 'General'];
    
    // Mutator que automaticamente converte o campo nome para maiúsculas ao setá-lo 
    public function setNomeAttribute($value)
    {
        $this->attributes['nome'] = mb_strtoupper($value, 'UTF-8');
    }
    
    // Accessor que automaticamente converte o campo nome para maiúsculas ao recuperá-lo
    public function getNomeAttribute($value)
    {
        return mb_strtoupper($value, 'UTF-8');
    }
    
    // Accessor que automaticamente converte o campo nome para maiúsculas ao recuperá-lo
    public function getServicoMilitarObrigatorioAttribute($value)
    {
        return $value == 1 ? 'Sim' : 'Não';
    }
}
