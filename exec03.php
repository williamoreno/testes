<?php

$anon = $_POST["DDN"];
$anoa = date ("Y");
$idade = $anoa - $anon;


if ($idade >= 16){

    echo " Segundo a sua idade que é, $idade  Anos Você  está apto a votar ";

}else{
   
    echo " Segundo a sua idade que é ,$idade  Anos  Você não está apto a votar ";
}


?>