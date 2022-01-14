<?php 
    while ($Hero->getHealth() > 0){
        $Hero->attacked($Orc->attack());
    ?>
    <p><?=$Hero->getHealth(); ?></p>
    <?php } ?>