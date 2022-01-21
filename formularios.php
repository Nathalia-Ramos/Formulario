<?php
    

    //isset() -> permite verificar a existencia de uma variavel ou
    //de um objeto e tambem é uma estrutura de decisão

    //Validação se o botao foi clicado e disponibilizado na ação do GET
    if(isset($_GET['btnSalvar'])){
    
   
    // Recuperando dados via GET do formulario
    $nome = $_GET ['txtNome'];
    $cidade = $_GET ['sltCidade']; 
    $sexo = $_GET ['rdoSexo'];
    $obs  = $_GET ['txtObservação'];
    
    //Foi criados essas variaveis para resolver o problema de variavel indefinida na exibição dos dados
    $idiomaPortugues = null;
    $idiomaEspanhol = null;
    $idiomaIngles = null; 

    //tratamento para recuperar os checkbox que foram selecionados no formulario
    if(isset($_GET['chkPortugues'])) {
        $idiomaPortugues = $_GET['chkPortugues'];
    }

    if(isset($_GET['chkIngles'])){
        $idiomaIngles = $_GET['chkIngles'];
    }

    if(isset($_GET['chkEspanhol'])) {
        $idiomaEspanhol = $_GET['chkEspanhol'];
    }


    //Escrevendo o conteudo das variaveis do navegador
    //Concatenação é representado pelo ponto (.)
    echo('<b> Nome: </b> ' . $nome . '<br>');
    echo ('<b> Cidade: </b>' . $cidade . '<br>');
    echo ('<b> Sexo: </b>' . $sexo . '<br>');
    echo ('<b> Obs: </b>' . $obs . '<br>');
    echo('<b>Idiomas:</b>' . '' .  $idiomaPortugues . '' . $idiomaIngles . '' . $idiomaEspanhol);

    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /*Código para desativar o redirecionamento da textarea*/ 
        textarea{
            resize: none;
        }
    </style>
</head>
<body>
    <!-- 
        GET -> permite retirar os dados dos formulario e
         disponibilizar na URL da página

        POST -> permite retirar os dados dos formularios e 
         disponibilizar em variaveis internas, ou seja, o usuario nao vê

        action -> é utilizado para especificar em qual arquivo ou página será 
         disponibilizado os dados do form

         input type="text" - permite colocar uma caixa do tipo texto
            size-"" - permite especificar o tamanho da caixa
            maxlegth="" - permite configurar a quantidade de caracteres
            que será digitado na caixa

        select -> permite criar uma lista de opções
            option -> é através da option que podemos criar itens 
            dentro da lista
            <option value=""> a propiedade value é obrigatoria para que o formulario 
                consiga resgatar o valor do item selecionado pelo usario e 
                disponibilizar para o back end

        <input type="radio" ->  permite criar opções de escolhas.
                            OBS: para configurar o radio fazendo com que permite fazer
                            apenas uma escolha é obrigatorios todas as inputs terem os mesmo nome   
                            
        selected -> permite pré seleciona uma opção que voce deseja que o usuário sempre veja
     -->
    <form name = "frmCadastro" method="GET" action="formularios.php" > 
       Nome: <input type="text" name= "txtNome" size="50" maxlegth="30"> </br> </br>
       Cidade:
       <select name="sltCidade" >
           <option value="" selected>Selecione uma cidade</option>
           <option value="jandira">Jandira</option>
           <option value="barueri">Barueri</option>
           <option value="itapevi">Itapevi</option>
           <option value="carapicuíba">Carapicuiíba</option>
           <option value="osasco">Osasco</option>
        </select>
        <br>
        <br>

        Sexo: 
        <input type="radio" name="rdoSexo" value="F" checked> Feminino
        <input type="radio" name="rdoSexo"value="M"> Masculino
        <input type="radio" name="rdoSexo" value="O"> Outro
        <br>
        <br>

        Idioma: 
        <input type="checkbox" name="chkPortugues" value="PT" checked> Português
        <input type="checkbox" name="chkIngles" value="EN"> Inglês 
        <input type="checkbox" name="chkEspanhol" value="ES">Espanhol
        <br>

        Observação: <textarea name="txtObservação" cols="30" rows="10"></textarea> 
        <!-- o input type="submit " permite retirar os dados dos formulários
             através do própiop HTML, fazendo um submit nos dados 
            
             Se utilizar o input type="button" -> somente será possível retirar os dados
              do formulário através do JavaScript

              o input typw ="reset" -> permite limpar todos os elementos do formulário
            -->
        <br>
        <br>
        <input type="submit" name="btnSalvar" value="Salvar">
        <input type="reset" name="btnLimpar" value="Limpar">
            
    </form>
</body>
</html>