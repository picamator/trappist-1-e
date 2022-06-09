<?php

namespace Picamator\Trappist1e\OptimizedSolution;

interface OptimizedSolutionInterface
{
    /**
     * @param int $limit
     *
     * @throws \Picamator\Trappist1e\Exception\InvalidLimitException;
     *
     * @return iterable|string[]
     */
    public function runOptimizedSolution(int $limit): iterable;
}
