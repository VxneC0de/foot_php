<?php

    require "class.php";

    extract($_POST);
    $guardarComi=new Categoria;
$guardarComi->guardarcomidas($name, $price, $categoria);

?>