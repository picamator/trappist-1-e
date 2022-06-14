<?php declare(strict_types=1);

namespace Picamator\Trappist1e\Solution\OptimizedSolution\Transformer;

use Picamator\Trappist1e\Solution\SolutionConstants;

class FizzTransformer implements TransformerInterface
{
    private const TRANSFORM_VALUE = SolutionConstants::VALUE_FIZZ;

    /**
     * Division on 3 rule
     *
     * @inheritDoc
     */
    public function isApplicable(int $item): bool
    {
        $itemSum = array_sum(str_split((string)$item));

        return $itemSum % 3 === 0;
    }

    /**
     * @inheritDoc
     */
    public function transformItem(int $item): string
    {
        return static::TRANSFORM_VALUE;
    }
}
