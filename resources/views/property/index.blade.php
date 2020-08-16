    @extends('property.master')

    @section('content')
        <div class="container my-3">


<h1> Listagem de Imoveis - View</h1>




<?php

if(!empty($properties)){

        echo "<table class='table table-striped table-hover'>";
            echo "<thead class='bg-primary text-white'>
                    <th>Tipo do Imovel </th>
                    <th> Valor Locação</th>
                    <th> Valor Compra</th>
                    <th> Ações</th>


          </th>


                </thead>";
    foreach ($properties as $property) {
        $linkReadMode=url('imoveis/'.$property->name);
        $linkEditItem=url('imoveis/editar/'. $property->name);
        $linkDeleteItem=url('imoveis/remover/'. $property->name);
        $linkNewItem=url('/imoveis/cad');

        echo "<tr>
                <td>$property->type </td>
                <td>R$ " . number_format($property->rental_price, 2,',','.'). "</td>
                <td>R$ " . number_format($property->sale_price, 2,',','.'). "</td>
                <td><a href='{$linkReadMode} '> Ver Mais</a> | <a href='{$linkEditItem} '>Editar</a> | <a href='{$linkDeleteItem} '>Deletar</a></td>


                </tr>";


    }
    echo "</table>";
}

?>
        </div>
@endsection
