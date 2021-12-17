<?php include __DIR__ . '/../inicio-html.php'; ?>

<div class="container">
    <form action="/vincular-categoria<?= isset($produto) ? '?id=' . $produto->getId() : '';?>" method="post">

        <div class="form-group">

            <label for="idCad">id Categoria</label>
            <input type="text"
                   id="idCad"
                   name="idCad"
                   class="form-control" >

        </div>
        <button class="btn btn-primary">Salvar</button>
    </form>
</div>


<?php include __DIR__ . '/../fim-html.php'; ?>
