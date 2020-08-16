@extends('property.master')

@section('content')
<div class="container my-3">
<h1> Formulario de Cadastro de  Imoveis - CadView</h1>

<form action="<?=url('/imoveis/store')?>" method="post">
    <?= csrf_field();?>
    <div class="form-group">
        <label for=" ">Tipo Imovel:</label><br>
        <input type="text" id="type" name="type" value="" required  class="form-control">
    </div>
    <div class="form-group">
         <label for=" ">Descrição:</label><br>
         <textarea id="description" name="description" cols="30" rows="10" required  class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for=" ">Valor Locação:</label><br>
         <input type="text" id="rental_price" name="rental_price" value=" " required  class="form-control">
    </div>
    <div class="form-group">
         <label for=" ">Valor Compra:</label><br>
        <input type="text" id="sale_price" name="sale_price" value=" " required  class="form-control">
    </div>
    <button type="submit" class="btn btn-primary ">Cadastrar Imóvel </button>
  </form>

</div>
@endsection

