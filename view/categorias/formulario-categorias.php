<?php include __DIR__ . '/../inicio-html.php'; ?>


<form action="/salvar-categoria" method="post">
    <div class="form-group">

        <label for="nome">Nome</label>
        <input type="text"
               id="nome"
               name="nome-categoria "
               class="form-control"
                value="<?= isset($categoria) ? $categoria->getNome() : '' ;?>">


    </div>
    <button class="btn btn-primary">Salvar</button>
</form>

<?php include __DIR__ . '/../fim-html.php'; ?>
