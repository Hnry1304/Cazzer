<div class="paginacion">
    <?php if($pagina == 0 || $pagina == 1):?>
        <a href="?class=Views&function=vistaHomePage&pagina=<?=$pagina -1 ?>"class="disiable"><</a>
    <?php else:?>
        <a href="?class=Views&function=vistaHomePage&pagina=<?= $pagina -1 ?>"><</a>
    <?php endif ?>

    <?php if($pagina <6):?>

        <?php for($i=0; $i<5; $i++): ?>
            <?php if($pagina == $i+1):?>
                <a href="?class=Views&function=vistaHomePage&pagina=<?=$i+1 ?>" class="posicion">
                    <?= $i+1 ?>
                </a>
            <?php else: ?>
                <a href="?class=Views&function=vistaHomePage&pagina=<?=$i+1 ?>">
                    <?= $i+1 ?>
                </a>
            <?php endif ?>

        <?php endfor ?>
    
    <?php else:?>
        <?php for($i=5; $i<$numero_paginacion; $i++): ?>
            <?php if($pagina == $i+1):?>
                <a href="?class=Views&function=vistaHomePage&pagina=<?=$i+1 ?>" class="posicion">
                    <?= $i+1 ?>
                </a>
            <?php else: ?>
                <a href="?class=Views&function=vistaHomePage&pagina=<?=$i+1 ?>">
                    <?= $i+1 ?>
                </a>
            <?php endif ?>

        <?php endfor ?>
    <?php endif ?>
    

    <?php if($pagina == $numero_paginacion):?>
        <a href="?class=Views&function=vistaHomePage&pagina=<?=$pagina?>" class="disiable">></a>
    <?php else:?>
        <a href="?class=Views&function=vistaHomePage&pagina=<?=$pagina +1 ?>">></a>
    <?php endif?>
</div>