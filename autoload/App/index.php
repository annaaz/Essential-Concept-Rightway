<?php

require_once 'init.php';

$komik1 = new Komik('Naruto','Masusi Natsumoto',80000, 100, 0 );
$game1 = new Game('GTC','San Andreas',80000, 0, 90 );

$listProduct = new PrintInfoProduct();
$listProduct->addProduct($komik1);
$listProduct->addProduct($game1);

echo $listProduct->doPrint();

new AutoLoadTest();
