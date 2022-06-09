<?php

include_once '../vendor/autoload.php';

$facade = new \Picamator\Trappist1e\Trappist1eFacade();

echo '========================' . PHP_EOL;
echo 'Quick solution' . PHP_EOL;
echo '========================' . PHP_EOL;
foreach ($facade->runQuickSolution(100) as $item) {
    echo $item . PHP_EOL;
}

echo '========================' . PHP_EOL;
echo 'Optimized solution' . PHP_EOL;
echo '========================' . PHP_EOL;
foreach ($facade->runOptimizedSolution(100) as $item) {
    echo $item . PHP_EOL;
}
