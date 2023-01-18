<?php
include 'vendor/autoload.php';

/**
 * @param string $className
 * @return void
 */
$autoload = function (string $className): void {
    $spr = DIRECTORY_SEPARATOR;
    $arraySeparation = explode('\\', $className);
    $arraySeparation[0] = 'src';
    $impl = implode($spr, $arraySeparation);
    $path = $impl . '.php';
    include($path);
};

//spl_autoload_register($autoload);


$myObject = new \MyApplication\User('Neo');
echo $myObject . PHP_EOL;
$test = new \MyApplication\Test\UserTest('TestNeo');
echo $test . PHP_EOL;



$client = new \GuzzleHttp\Client();
$response = $client->request('GET', 'https://api.github.com/repos/guzzle/guzzle');

echo $response->getStatusCode();
