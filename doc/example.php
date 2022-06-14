<?php declare(strict_types=1);

use Picamator\Trappist1e\Trappist1eFacade;

include_once '../vendor/autoload.php';

$facade = new Trappist1eFacade();

echo '========================' . PHP_EOL;
echo 'Quick solution' . PHP_EOL;
echo '========================' . PHP_EOL;
foreach ($facade->handleQuickSolution(100) as $item) {
    echo $item . PHP_EOL;
}

echo '========================' . PHP_EOL;
echo 'Optimized solution' . PHP_EOL;
echo '========================' . PHP_EOL;
foreach ($facade->handleOptimizedSolution(100) as $item) {
    echo $item . PHP_EOL;
}

echo '========================' . PHP_EOL;
echo 'Creative solution' . PHP_EOL;
echo '========================' . PHP_EOL;
foreach ($facade->handleCreativeSolution(100) as $item) {
    echo $item . PHP_EOL;
}
