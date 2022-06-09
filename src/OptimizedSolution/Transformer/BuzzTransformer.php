<?php

namespace Picamator\Trappist1e\OptimizedSolution\Transformer;

class BuzzTransformer implements TransformerInterface
{
    private const TRANSFORM_VALUE = 'Buzz';
    private const DIVISION_RULE = [
        '0',
        '5',
    ];

    /**
     * Division on 5 rule
     *
     * @inheritDoc
     */
    public function isApplicable(int $item): bool
    {
        $itemLast = substr($item,-1);

        return in_array($itemLast, static::DIVISION_RULE);
    }

    /**
     * @inheritDoc
     */
    public function transformItem(int $item): string
    {
        return static::TRANSFORM_VALUE;
    }
}