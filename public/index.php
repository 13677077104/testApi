<?php

/**
 * Zereri , A PHP Framework
 *
 * @verson beta
 * @author Zeffee <me@zeffee.com>
 */

ini_set('display_errors', 'On');
/*phpinfo();*/
//require some required files
require __DIR__ . '/../Zereri/load.php';


/**
 * Run
 *
 * =>get  the request
 * =>call the controller
 * =>send the response
 */
$request = Factory::newRequest();

$controller = Factory::newController();

$controller->setPostData($request->getData())->call();
function prd($data){
    echo "<pre>";
    print_r($data);
    die;
}