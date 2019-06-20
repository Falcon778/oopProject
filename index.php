<?php

require_once(__DIR__ .DIRECTORY_SEPARATOR. 'Autoload.php');
spl_autoload_register(['Autoload', 'loader']);


try {

    $asus = new \application\Asus('Intel', 8000, 2000, 1, 'Asus1');

    $asus->start();
    //$asus->shutdown();
    $asus->printParameters();

}catch (Exception $exception) {
    echo $exception->getMessage();
    echo $exception->getLine();
    echo $exception->getFile();
}
//function divideZero($a, $b){
//
//    if ($b==0){
//        throw new \mysql_xdevapi\Exception('Devide by zero');
//    }
//
//    return $a/$b;
//}
//
//try{
//
//    divideZero(4,0);
//}catch (Exception $exception){
//    echo $exception->getMessage();
//    echo $exception->getLine();
//    echo $exception->getFile();
//}