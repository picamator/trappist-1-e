<?php

namespace Picamator\Trappist1e\OptimizedSolution\Transformer;

class FizzTransformer implements TransformerInterface
{
    private const TRANSFORM_VALUE = 'Fizz';

    /**
     * Division on 3 rule
     *
     * @inheritDoc
     */
    public function isApplicable(int $item): bool
    {
        $itemSum = array_sum(str_split($item));

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