<?php declare(strict_types=1);

namespace Picamator\Trappist1e\Solution\CreativeSolution;

use ArrayIterator;
use InfiniteIterator;
use Iterator;
use Picamator\Trappist1e\Solution\SolutionConstants;
use Picamator\Trappist1e\Solution\SolutionInterface;

class CreativeSolution implements SolutionInterface
{
    private const TEMPLATE = [
        null,
        null,
        SolutionConstants::VALUE_FIZZ, // 3
        null,
        SolutionConstants::VALUE_BUZZ, // 5
        SolutionConstants::VALUE_FIZZ, // 6
        null,
        null,
        SolutionConstants::VALUE_FIZZ, // 9
        SolutionConstants::VALUE_BUZZ, // 10
        null,
        SolutionConstants::VALUE_FIZZ, // 12
        null,
        null,
        SolutionConstants::VALUE_FIZZ_BUZZ, // 15
    ];

    /**
     * @inheritDoc
     */
    public function handleSolution(int $limit): Iterator
    {
        $iterator = new InfiniteIterator(new ArrayIterator(self::TEMPLATE));

        for ($i = 1; $i <= $limit; $i++) {
            $item = $iterator->current() ?? (string)$i;
            $iterator->next();

            yield $item;
        }
    }
}
