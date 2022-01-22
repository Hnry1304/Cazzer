<div class="paginacion">
    <?php if($pagina == 0 || $pagina == 1):?>
        <a href="/Views/viewProduct&pagina=<?=$pagina -1 ?>&producto=<?=$producto ?>"class="disiable"><</a>
    <?php else:?>
        <a href="/Views/viewProduct&pagina=<?= $pagina -1 ?>&producto=<?=$producto ?>"><</a>
    <?php endif ?>

    <?php if($pagina <6):?>

        <?php for($i=0; $i<5; $i++): ?>
            <?php if($pagina == $i+1):?>
                <a href="/Views/viewProduct&pagina=<?=$i+1 ?>&producto=<?=$producto ?>" class="posicion">
                    <?= $i+1 ?>
                </a>
            <?php else: ?>
                <a href="/Views/viewProduct&pagina=<?=$i+1 ?>&producto=<?=$producto ?>">
                    <?= $i+1 ?>
                </a>
            <?php endif ?>

        <?php endfor ?>
    
    <?php else:?>
        <?php for($i=5; $i<$numero_paginacion; $i++): ?>
            <?php if($pagina == $i+1):?>
                <a href="/Views/viewProduct&pagina=<?=$i+1 ?>&producto=<?=$producto ?>" class="posicion">
                    <?= $i+1 ?>
                </a>
            <?php else: ?>
                <a href="/Views/viewProduct&pagina=<?=$i+1 ?>&producto=<?=$producto ?>">
                    <?= $i+1 ?>
                </a>
            <?php endif ?>

        <?php endfor ?>
    <?php endif ?>
    

    <?php if($pagina == $numero_paginacion):?>
        <a href="/Views/viewProduct&pagina=<?=$pagina?>&producto=<?=$producto ?>" class="disiable">></a>
    <?php else:?>
        <a href="/Views/viewProduct&pagina=<?=$pagina +1 ?>&producto=<?=$producto ?>">></a>
    <?php endif?>
</div>