<?php include  __DIR__ . '/../inicio-html.php'; ?>



    <ul class="list-group">
        <?php foreach ($categorias as $categoria):?>
            <li class="list-group-item d-flex justify-content-between" >
                <?= $categoria->getId(); ?>
                <?= $categoria->getNome(); ?>
                <span>
                                <a href="/atualizar-categoria?id=<?= $categoria->getId(); ?>" class="btn btn-info btn-sm">
                                    Alterar
                                </a>
                                <a href="/excluir-categoria?id=<?= $categoria->getId(); ?>" class="btn btn-danger btn-sm">
                                    Excluir
                                </a>
                            </span>
            </li>
        <?php endforeach;?>
    </ul>
<a href="/nova-categoria" class="btn btn-primary mb-2">Nova Categoria</a>


<?php include __DIR__ . '/../fim-html.php'; ?>
