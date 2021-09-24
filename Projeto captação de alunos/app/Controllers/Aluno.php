<?php
namespace App\Controllers;

use App\Models\AlunoModel;

class Aluno extends BaseController{

    public function index(){
        $alunoModel = new \App\Models\AlunoModel();
        $session=session();

        $data['alunos']=$alunoModel->find();
        $data['titulo']='Listando todos os alunos';
        $data['msg']=$this->session->getFlashdata('msg');
        
        $data['aluno']='';
        if($this->request->getMethod()=='post'){
            $aluno=$this->request->getPost(['id_aluno']);
        
            if(empty($aluno['id_aluno']) || is_null($alunoModel->find($aluno['id_aluno']))){
                echo view('aluno_select', $data);
            }else{
                $data['aluno']=$alunoModel->find($aluno['id_aluno']);
                echo view('aluno_search',$data);
            }
            die();
        }

        echo view('aluno_select', $data);
    }

    public function cadastrar(){
        $data['titulo']='Cadastrar Aluno';
        $data['acao']='Cadastrar';
        $data['msg']='';
        $data['erros']='';

        if($this->request->getMethod()=='post'){
            $alunoModel = new \App\Models\AlunoModel();
            $dadosAluno = $this->request->getPost();

            if($alunoModel->insert($dadosAluno)){
                $data['msg'] = 'Aluno inserido com sucesso';
            }else{
                $data['msg'] = 'Erro ao inserir aluno';
                $data['erros'] = $alunoModel->errors();
            }
        }
        echo view('aluno_forms', $data);
    }

    public function atualizar($id){
        $alunoModel = new \App\Models\AlunoModel();
        
        $data['titulo']='Atualizar Cadastro';
        $data['acao']='Atualizar';
        $data['msg']='';
        $data['erros']='';
        
        $aluno = $alunoModel->find($id);
        if($this->request->getMethod()=='post'){

            $dadosAluno = $this->request->getPost();

            if($alunoModel->update($id,$dadosAluno)){
                $data['msg']='Dados alterados com sucesso';
                
            }else{
                $data['msg'] = 'Erro ao atualizar o cadastro';
                $data['erros'] = $alunoModel->errors();
            }
        }
       $data['aluno']=$aluno;
       echo view('aluno_forms', $data);
    }

    public function deletar($id = null){
        $alunoModel = new \App\Models\AlunoModel();
        if(is_null($id)){
            $this->session->setFlashdata('msg', 'Aluno não encontrado');
            return redirect()->to(base_url('/public/'));
        }else{
            if($alunoModel->delete($id)){
                $this->session->setFlashdata('msg', 'Aluno com ID '.$id.' excluido com sucesso');
            }else{
                $this->session->setFlashdata('msg', 'Falha ao excluir aluno com ID '.$id);
            }
            return redirect()->to(base_url('/public/Aluno/index'));
        }
    }
}