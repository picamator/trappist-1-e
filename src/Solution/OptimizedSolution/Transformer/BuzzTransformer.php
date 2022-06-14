<?php declare(strict_types=1);

namespace Picamator\Trappist1e\Solution\OptimizedSolution\Transformer;

use Picamator\Trappist1e\Solution\SolutionConstants;

class BuzzTransformer implements TransformerInterface
{
    private const TRANSFORM_VALUE = SolutionConstants::VALUE_BUZZ;
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
        $itemLast = substr((string)$item, -1);

        return in_array($itemLast, self::DIVISION_RULE);
    }

    /**
     * @inheritDoc
     */
    public function transformItem(int $item): string
    {
        return self::TRANSFORM_VALUE;
    }
}
