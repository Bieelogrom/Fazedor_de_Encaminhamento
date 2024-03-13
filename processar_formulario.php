<?php
require 'vendor/autoload.php';
require 'busca_cep.php';

use PhpOffice\PhpWord\TemplateProcessor;

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $Nome_Funcionario = strtoupper($_POST['Nome_Funcionario']);
    $CPF_Funcionario = $_POST['CPF_Funcionario'];
    $Idade_Funcionario = $_POST['Idade_Funcionario'];
    $RG_Funcionario = $_POST['RG_Funcionario'];
    $Contato_Funcionario = $_POST['Contato_Funcionario'];
    $CEP_Funcionario = $_POST['CEP_Funcionario'];
    $Numero_Funcionario = $_POST['Numero_End'];
    $Cargo_Funcionario = $_POST['Cargo_Funcionario'];
    $Data_Admissão = $_POST['Data_Admissao'];

    $Endereço_min = buscarCep($CEP_Funcionario, $Numero_Funcionario);
    $Endereco_man = strtoupper($Endereço_min);
    

    $Data_Hoje_form_um = date('d');
    $Data_hoje_form_dois = date('d/m/y');

    // // // echo $Data_hoje_form_dois;

    $pastaDestino = 'Documentos/';


    // // // echo "$Nome_Funcionario & $CPF_Funcionario & $Idade_Funcionario";

    try{
        $template1 = new TemplateProcessor('form_1.docx');
        $template1->setValue('nome', $Nome_Funcionario);
        $template1->setValue('cpf', $CPF_Funcionario);
        $template1->setValue('idade', $Idade_Funcionario);
        $template1->setValue('rg', $RG_Funcionario);
        $template1->setValue('contato', $Contato_Funcionario);
        $template1->setValue('cep', $CEP_Funcionario);
        $template1->setValue('hoje', $Data_Hoje_form_um);
        $template1->setValue('ender', $Endereco_man);
        $template1->saveAs($pastaDestino . "$Nome_Funcionario.docx");

        $template2 = new TemplateProcessor('form_2.docx');
        $template2->setValue('nome', $Nome_Funcionario);
        $template2->setValue('cpf', $CPF_Funcionario);
        $template2->setValue('idade', $Idade_Funcionario);
        $template2->setValue('rg', $RG_Funcionario);
        $template2->setValue('cargo', $Cargo_Funcionario);
        $template2->setValue('admissao', $Data_Admissão);
        $template2->setValue('hoje', $Data_hoje_form_dois);
        $template2->saveAs($pastaDestino . "$Nome_Funcionario.D.docx");

        // echo 'Documentos salvos com sucesso!' . PHP_EOL;
        // echo "$Nome_Funcionario & $CPF_Funcionario & $Idade_Funcionario";

        header("Location: index.php?doc=salvo");
    }catch(Exception $e){
        echo ''. $e->getMessage() .'';

    }

}
