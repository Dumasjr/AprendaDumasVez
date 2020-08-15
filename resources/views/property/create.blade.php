<h1> Formulario de Cadastro de  Imoveis - CadView</h1>

<form action="<?=url('/imoveis/store')?>" method="post">
    <?= csrf_field();?>
    <label for=" ">Tipo Imovel:</label><br>
    <input type="text" id="type" name="type" value=""><br>
    <label for=" ">Descrição:</label><br>
    <textarea id="description" name="description" cols="30" rows="10"></textarea><br><br>
     <label for=" ">Valor Locação:</label><br>
    <input type="text" id="rental_price" name="rental_price" value=" "><br><br>
    <label for=" ">Valor Compra:</label><br>
    <input type="text" id="sale_price" name="sale_price" value=" "><br><br>
    <input type="submit" value="Submit">
  </form>
