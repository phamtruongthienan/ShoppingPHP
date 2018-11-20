<?php 
    include_once 'controller/ShoppingCartController.php';
    $c = new ShoppingCartController();
    // if(isset($_POST['idSPDelete'])){
    //     return $c->removeToCart();
    // }

    return $c->addToCart();


?>