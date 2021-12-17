<?php include  __DIR__ . '/../inicio-html.php'; ?>



            <ul class="list-group">
                <?php foreach ($produtos as $produto):?>
                    <li class="list-group-item d-flex justify-content-between" >
                        <?= $produto->getNome(); ?>

                        <span>
                            <a href="/atualizar-produto?id=<?= $produto->getId();?>"  class="btn btn-info btn-sm">
                                Atualizar
                            </a>
                            <a href="/excluir-produto?id=<?= $produto->getId();?>"  class="btn btn-danger btn-sm">
                                Excluir
                            </a>
                        </span>
                    </li>
                <?php endforeach;?>
            </ul>
    <a href="/novo-produto" class="btn btn-primary mb-2">Novo Produto</a>


<?php include __DIR__ . '/../fim-html.php'; ?>
