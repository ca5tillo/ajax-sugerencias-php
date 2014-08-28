<?php
$nombre[]="Abril";
$nombre[]="Amelia";
$nombre[]="Africa";
$nombre[]="Adelia";
$nombre[]="Aida";
$nombre[]="Aurora";
$nombre[]="Barbara";
$nombre[]="Belen";
$nombre[]="Blanca";
$nombre[]="Camila";
$nombre[]="Carlota";
$nombre[]="Carmela";
$nombre[]="Carmen";
$nombre[]="Cecilia";
$nombre[]="Clara";
$nombre[]="Cristina";
$nombre[]="Daniela";
$nombre[]="Diana";
$nombre[]="Edurne";
$nombre[]="Esmeralda";
$nombre[]="Gabriela";
$nombre[]="Inmaculada";
$nombre[]="Judith";
$nombre[]="Macarena";
$nombre[]="Mercedes";
$nombre[]="Raquel";

$q=$_GET['q'];

if (strlen($q) > 0){
   $hint="";
   for ($i = 0; $i < count($nombre); $i++)
   {
///*
// Se añade expresion regular para que coincida el texto que se recibe 
//sin importar el lugas en el que se encuentre dentro la lista 
      if(preg_match("[.*".strtolower($q).".*]",strtolower($nombre[$i]))){
      
      if($hint==""){
            $hint=$nombre[$i];
         }else{
            $hint=$hint." , ".$nombre[$i];
         }
      }
//*/

//
/*
//coincide sono cuando se escribe el principio de la palabra 
      if(strtolower($q)==strtolower(substr($nombre[$i],0,strlen($q)))){
         if($hint==""){
            $hint=$nombre[$i];
         }else{
            $hint=$hint." , ".$nombre[$i];
         }
      }
//*/
   }
}else{
   $hint = "";
}
if ($hint == ""){
     $response="No hay coincidencias";
     //$response=$hint;
}else{
  $response=$hint;
}
echo $response;

?>
