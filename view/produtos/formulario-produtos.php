<?php include __DIR__ . '/../inicio-html.php'; ?>


    <form action="/salvar-produto<?= isset($produto) ? '?id=' . $produto->getId() : '';?>" method="post">
        <div class="form-group">

            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" class="form-control" value="<?= isset($produto) ? $produto->getNome() : '';?>">

            <label for="nome">Especialização</label>
            <input type="text" id="especializacao" name="especializacao" class="form-control" value="<?= isset($produto) ? $produto->getEspecializacao() : '';?>">

            <label for="nome">Status</label>
            <select name="status" id="status" class="form-select">
                <option selected>Clique para Selecionar</option>
                <option value="Venda">Venda</option>
                <option value="Cadastro">Cadastro</option>
                <option value="Cancelado">Cancelado</option>
            </select>
        </div>
        <button class="btn btn-primary">Salvar</button>
    </form>

<?php include __DIR__ . '/../fim-html.php'; ?>
