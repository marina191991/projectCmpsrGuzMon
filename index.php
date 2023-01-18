<?php
//include 'vendor/autoload.php';

/**
 * @param string $classPath
 * @param string $dirName
 * @return void
 */
$autoload = function (string $classPath, string $dirName = 'src'): void {
    $spr = DIRECTORY_SEPARATOR;
    $arraySeparation = explode('\\', $classPath);
    array_shift($arraySeparation);
    $arraySeparation[0] = $dirName;
    $impl = implode($spr, $arraySeparation);
    $path = $impl . '.php';
    include($path);
};

spl_autoload_register($autoload('\MyApplication\Test\UserTest'));
spl_autoload_register($autoload('\MyApplication\User'));


$myObject = new \MyApplication\User('Neo');
echo $myObject . PHP_EOL;
$test = new \MyApplication\Test\UserTest('TestNeo');
echo $test . PHP_EOL;

