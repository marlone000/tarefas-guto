<?php include "cabecalho.php"?>
<h2>Cadastrar uma nova tarefa</h2>
<form method="post" action="novo-salvar.php">
    <label for="titulo">Título</label>
         <input type="text" name="titulo" id="titulo" required maxlength="3">
            <label for="descricao">Descrição</label>
         <textarea name="descricao" id="descricao"></textarea>
    <button type="submit" class="btn btn-primary">Salvar uma nova tarefa</button>
</form>
<?php include "rodape.php"?>