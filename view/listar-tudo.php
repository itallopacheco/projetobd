<?php include  __DIR__ . '/inicio-html.php'; ?>


<ul class="list-group">
    <?php foreach ($produtos as $produto):?>
        <li class="list-group-item d-flex justify-content-between" >
            <?= $produto->getId(); ?>
            <?= $produto->getNome(); ?>
        </li>
    <?php endforeach;?>
</ul>

<?php include __DIR__ . '/fim-html.php'; ?>
