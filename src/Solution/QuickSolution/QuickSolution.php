<?php declare(strict_types=1);

namespace Picamator\Trappist1e\Solution\QuickSolution;

use Picamator\Trappist1e\Solution\SolutionConstants;
use Picamator\Trappist1e\Solution\SolutionInterface;

class QuickSolution implements SolutionInterface
{
    private const TRANSFORMER_VALUE_FIZZ = SolutionConstants::VALUE_FIZZ;
    private const TRANSFORMER_VALUE_BUZZ = SolutionConstants::VALUE_BUZZ;
    private const TRANSFORMER_VALUE_FIZZ_BUZZ = SolutionConstants::VALUE_FIZZ_BUZZ;

    /**
     * @inheritDoc
     */
    public function handleSolution(int $limit): iterable
    {
        for ($i = 1; $i <= $limit; $i++) {
            yield $this->transformItem($i);
        }
    }

    /**
     * @param int $item
     *
     * @return string
     */
    private function transformItem(int $item): string
    {
        switch (true) {
            case $item % 15 === 0:
                $transformedItem = static::TRANSFORMER_VALUE_FIZZ_BUZZ;
                break;
            case $item % 3 === 0:
                $transformedItem = static::TRANSFORMER_VALUE_FIZZ;
                break;
            case $item % 5 === 0:
                $transformedItem = static::TRANSFORMER_VALUE_BUZZ;
                break;
            default:
                $transformedItem = (string)$item;
        }

        return $transformedItem;
    }
}
