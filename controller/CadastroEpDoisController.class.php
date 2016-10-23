<?php

require_once ('PrincipalController.class.php');
class CadastroEpDoisController extends PrincipalController
{

    public function index()
    {
        $this->setTitle('Cadastro');

        require_once PATH . "/view/includes/cabecalho.php";
        require_once PATH . "/view/cadastro-ep-dois-view.php";
        require_once PATH . "/view/includes/footer.php";
    }

    public function direciona($acao){
        if($acao == 'index'){
            $this->index();
        }else{
            $this->erroPagina();
        }
    }
}