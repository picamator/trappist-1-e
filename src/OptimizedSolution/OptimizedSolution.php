<?php

namespace Picamator\Trappist1e\OptimizedSolution;

class OptimizedSolution implements OptimizedSolutionInterface
{
    /**
     * @var \Picamator\Trappist1e\OptimizedSolution\Transformer\TransformerInterface[]
     */
    private array $transformes;


    /**
     * @param \Picamator\Trappist1e\OptimizedSolution\Transformer\TransformerInterface[] $transformers
     */
    public function __construct(array $transformers)
    {
        $this->transformes = $transformers;
    }

    /**
     * @inheritDoc
     */
    public function runOptimizedSolution(int $limit): iterable
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
