@extends('property.master')

@section('content')
<div class="container my-3">

<h1> EDICAO de  Imoveis - EDITVIEW</h1>
<?php
$property=$property[0];
?>
<form action="<?=url('/imoveis/update',['id'=>$property->id])?>" method="post">
    <?= csrf_field();?>
    <?= method_field('PUT');?>
    <div class="form-group">
        <label for=" ">Tipo Imovel:</label><br>
        <input type="text" class="form-control" id="type" name="type" value="<?= $property->type;?>"><br>
    </div>
    <div class="form-group">
            <label for=" ">Descrição:</label><br>
            <textarea id="description" class="form-control" name="description" cols="30" rows="10" ><?= $property->description;?></textarea><br><br>
    </div>
    <div class="form-group">
         <label for=" ">Valor Locação:</label><br>
        <input type="text" class="form-control" id="rental_price" name="rental_price" value="<?= $property->rental_price;?>"><br><br>
    </div>
    <div class="form-group">
        <label for=" ">Valor Compra:</label><br>
        <input type="text" class="form-control" id="sale_price" name="sale_price" value="<?= $property->sale_price;?>"><br><br>
    </div>
    <button type="submit" class="btn btn-primary ">Editar Imóvel </button>
  </form>
</div>
@endsection
