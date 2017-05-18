<?php

/**
 * Controlador 'index' da aplicação.
 */

namespace Application\Controller;

use Setsis\Controller,
    Setsis\Common,
    Setsis\Session,
    Application\Model\JWT;
        
class Index extends Controller
{
    public $n_processo;
    public $origem;
    public $vara;
    public $valorcausa;
    public $partes = [];
    public $advogados = [];

// Construtor

    public function __construct()
    {
        // Executa o construtor do pai ( 'Setsis_Controller' )
        parent::__construct();

        // Carrega o modelo
//        $this->loadModel('Application\Model\Processo', 'processo');
    }

    // Método main

    public function main()
    {
        // Carrega a View index
        $this->loadView("index/index");
    }

    // Logout

    public function logout()
    {
        // Destrói a sessão
        Session::destroy();

        // Redireciona o usuário para a index
        Common::redir('index');
    }
    
    public function pesquisa(){
        
        
        $opts = array(
                      "http"=>array(
                                    "header"=>"webtoken: codigo"
                                    )
                      );
        
        $context = stream_context_create($opts);
        $processo = file_get_contents("http://localhost/api-processo/processo/consultar/1.0.0/" . $_POST['n_processo'] . "/DF",false,$context);
        $processojson = json_decode($processo);

//        var_dump($processo);exit;
        if ($processojson->Resposta->Status <> '00') {
            echo $processojson->Resposta->Conteudo;exit;
        }
        
        if (count($processojson->Resposta->Conteudo->processo) < 2){
            $processojson = $processojson->Resposta->Conteudo->processo[0];
        } else {
            $processojson = $processojson->Resposta->Conteudo->processo[0];
        }
        
//        var_dump($processojson);exit;
        $this->n_processo = $processojson->dados_proc->num_cnj;
        $this->origem = $processojson->tipo_origem;
//        echo $processojson->tipo_origem;exit;
        $this->vara = $processojson->dados_proc->cd_vara;
        $this->valorcausa = $processojson->dados_proc->valor_causa; 
        $i = 0;
//        var_dump($processojson->partes->parte[0]->advog);exit;
        foreach ($processojson->partes->parte as $parte){
            $this->partes[$i] = $parte->nome;
                    if ($parte->advog == "") {
                        $this->parte[$i]->advogados[$i] = "";
                    } else {
                        $iadv = 0;
                        foreach ($parte->advog->advogadopartes as $advogado){
                            $this->parte[$i]->advogados[$iadv] = is_object($advogado)?$advogado->advg_nm_advogado:$advogado;
                            $iadv++;
                        }
                    }
            $i++;
        }
        
        
        $this->loadView("index/index");

    }
}