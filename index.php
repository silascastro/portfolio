<?php
    session_start();
    include "banco.php";

    $tem_erros = false;
    $erros_validacao = array();

    if(count($_POST)>0){
        
        $dados = array();

        if(isset($_POST['name']) && $_POST['name']!=''){
            $dados['name'] = $_POST['name'];
        }else{
            $tem_erros = true;
            $erros_validacao['name'] = "O nome é obrigatório";
        }

        if(isset($_POST['email']) && $_POST['email']!=''){
            $dados['email'] = $_POST['email'];
        }else{
            $tem_erros = true;
            $erros_validacao['email'] = "O email é obrigatório";
        }

        if(isset($_POST['text']) && $_POST['text']!=''){
            $dados['text'] = $_POST['text'];
        }else{
            $dados['text'] = '';
            $tem_erros = true;
            $erros_validacao['text'] = "O texto é obrigatório";
        }

        if(!$tem_erros){
            //echo $dados['text'];
            postMessage($conexao, $dados);
            header('Location: index.php');
            die();
        }
    }

    $dados = array(
        'id' => 0,
        'name' => (isset($_POST['name']))? $_POST['name']: '',
        'email' => (isset($_POST['email']))? $_POST['email']: '',
        'text' => (isset($_POST['text']))? $_POST['text']: '',
    );

 
 include "templates/index_template.php"
 ?>