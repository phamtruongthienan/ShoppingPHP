<?php
include_once 'controller/TypeProductController.php';
$c = new TypeProductController();
if(isset($_POST['idType'])){
    return $c->getProductMenuLeft();
}
if(isset($_POST['idPrice'])){
    return $c->getProductPriceLeft();
}
return $c->getTypePage();

?>