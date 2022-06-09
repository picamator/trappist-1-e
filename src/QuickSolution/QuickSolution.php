<?php

namespace Picamator\Trappist1e\QuickSolution;

class QuickSolution implements QuickSolutionInterface
{
    private const TRANSFORMER_VALUE_FIZZ = 'Fizz';
    private const TRANSFORMER_VALUE_BUZZ = 'Buzz';
    private const TRANSFORMER_VALUE_FIZZ_BUZZ = 'FizzBuzz';

    /**
     * @inheritDoc
     */
    public function runQuickSolution(int $limit): iterable
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
