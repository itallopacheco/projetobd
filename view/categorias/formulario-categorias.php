<?php include __DIR__ . '/../inicio-html.php'; ?>


<form action="/salvar-categoria<?= isset($categoria) ? '?id=' . $categoria->getId() : ''; ?> "method="post">
    <div class="form-group">

        <label for="nome">Nome</label>
        <input type="text"
               id="nome"
               name="nome"
               class="form-control"
                value="<?= isset($categoria) ? $categoria->getNome() : '' ;?>">


    </div>
    <button class="btn btn-primary">Salvar</button>
</form>

<?php include __DIR__ . '/../fim-html.php'; ?>
