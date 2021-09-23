<?php 
namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Validation\Validation;

class AlunoModel extends Model{
    protected $table='aluno';
    protected $primaryKey='id';

    protected $useAutoIncrement= true;

    protected $allowedFields=['nome','telefone','email','cpf'];
    protected $returnType='object';//Forma de retorno a partir de buscas    

    protected $validationRules =[
        'nome' => 'required|min_length[2]',
        'telefone' => 'numeric',
        'email' => 'valid_email',
        'cpf' => 'required|numeric|is_unique[aluno.cpf]',
    ];

    protected $validationMessages = [
        'nome' =>[
            'required'=>'O campo nome é necessario',
            'min_length'=>'Nome não pode ter menos de 2 caracteres',
        ],
        'telefone' =>[
            'numeric'=>'Telefone precisa ser somente numérico, digite só os números'
        ],
        'email'=>[
            'valid_email'=>'Insira um email valido'
        ],
        'cpf'=>[
            'required'=>'CPF é necessario',
            'numeric'=>'CPF precisa ser somente numérico, digite só os números',
            'is_unique'=>'Já existe um aluno com o CPF informado'
        ],
    ];
}