<?php
    include "conexao.inc";
   
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="estiloPagPrincipal.css">
</head>
<body>

<div class="titulo">
        <h1>Gerenciador de tarefas</h1>
    </div>
    
    <div class="conteudo">
        <div class="topo">
            <input type="text" 
                id="inputNovaTarefa"
                placeholder="Adicione uma nova tarefa"
                >
            <button id="btnAddTarefa">
                <i class="fa fa-plus"></i>
            </button>
        </div>

        <ul id="listaTarefas">
        </ul>
    </div>   

    <div id="janelaEdicao">
        <button id="janelaEdicaoBtnFechar">
            <i class="fa fa-remove fa-2x"></i>
        </button>
        <h2 id="idTarefaEdicao">#1021</h2>
        <hr>
        <form>
            <div class="frm-linha">
                <label for="nome">Tarefa</label>
                <input type="text" id="inputTarefaNomeEdicao">
            </div>
            <div class="frm-linha">
                <button id="btnAtualizarTarefa">Salvar</button>
            </div>
        </form>
    </div>
    <div id="janelaEdicaoFundo"></div>
    
    <script src="teste.js"></script>
</body>
</html>