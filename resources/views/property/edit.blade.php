<h1> EDICAO de  Imoveis - EDITVIEW</h1>
<?php
$property=$property[0];
?>
<form action="<?=url('/imoveis/update',['id'=>$property->id])?>" method="post">
    <?= csrf_field();?>
    <?= method_field('PUT');?>
    <label for=" ">Tipo Imovel:</label><br>
    <input type="text" id="type" name="type" value="<?= $property->type;?>"><br>
    <label for=" ">Descrição:</label><br>
    <textarea id="description" name="description" cols="30" rows="10" ><?= $property->description;?></textarea><br><br>
     <label for=" ">Valor Locação:</label><br>
    <input type="text" id="rental_price" name="rental_price" value="<?= $property->rental_price;?>"><br><br>
    <label for=" ">Valor Compra:</label><br>
    <input type="text" id="sale_price" name="sale_price" value="<?= $property->sale_price;?>"><br><br>
    <input type="submit" value="Submit">
  </form>
