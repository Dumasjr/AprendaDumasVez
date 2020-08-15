<h1> Pagina Single</h1>

<?php
if(!empty('$property')){

    foreach ($property as $prop) {
        ?>
        <h2> Type : <?=$prop->type; ?></h2>

        <p><h2> description: <?=$prop->description; ?></h2></p>

        <p><h2> Retal :  R$ <?= number_format($prop->rental_price, 2,',','.'); ?></h2></p>

        <p><h2> Sale :  R$ <?= number_format($prop->sale_price, 2,',','.'); ?></h2></p>

        <?php

    }

}

