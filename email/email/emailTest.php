<?php
    include 'emailV2/email.php';
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $tema = $_POST['assunto']; 
    $texto = $_POST['texto'];
    $resumo = $_POST['resumo'];
    echo $tema;
    switch($tema){
        case 1: 
        $tema = 'cívil';
        break;
        case 2:
        $tema = 'Família';
        break;
        case 3: 
        $tema = 'Consumidor';
        break;
        case 4: 
        $tema = 'Trabalhista';
        break;
        case 5: 
        $tema = 'Previdenciáio';
        break;
        case 6: 
        $tema = 'Imobiliário';
        break;
        case 7: 
        $tema = 'Condomínios';
        break;
        case 8: 
        $tema = 'Extrajudicial';
        break;
        default:
        $tema = 'Outros';
        }
  
    sendEmail($nome,$telefone,$email,$bairro,$cidade,$tema,$texo,'https://passini.adv.br/img/logo-branco.png', $resumo);
  
  
  
  
  