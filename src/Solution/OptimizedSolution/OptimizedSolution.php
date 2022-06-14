<?php declare(strict_types=1);

namespace Picamator\Trappist1e\Solution\OptimizedSolution;

use Iterator;
use Picamator\Trappist1e\Solution\SolutionInterface;

class OptimizedSolution implements SolutionInterface
{
    /**
     * @var \Picamator\Trappist1e\Solution\OptimizedSolution\Transformer\TransformerInterface[]
     */
    private array $transformes;

    /**
     * @param \Picamator\Trappist1e\Solution\OptimizedSolution\Transformer\TransformerInterface[] $transformers
     */
    public function __construct(array $transformers)
    {
        $this->transformes = $transformers;
    }

    /**
     * @inheritDoc
     */
    public function handleSolution(int $limit): Iterator
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
        $transformedItem = null;
        foreach ($this->transformes as $transformer) {
            if ($transformer->isApplicable($item)) {
                $transformedItem .= $transformer->transformItem($item);
            }
        }

        return $transformedItem ?? (string)$item;
    }
}
