<?php declare(strict_types=1);

namespace Picamator\Trappist1e\OptimizedSolution;

interface OptimizedSolutionInterface
{
    /**
     * @param int $limit
     *
     * @return iterable|string[]
     */
    public function runOptimizedSolution(int $limit): iterable;
}
