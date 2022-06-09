<?php

namespace Picamator\Trappist1e;

interface Trappist1eFacadeInterface
{
    /**
     * Specification:
     * - Execute quick solution providing number of iterator's elements
     * - Parameter limit should be more or equal 1
     *
     * @param int $limit
     *
     * @return iterable|string[]
     */
    public function runQuickSolution(int $limit): iterable;

    /**
     * Specification:
     * - Execute optimized solution providing number of iterator's elements
     * - Parameter limit should be more or equal 1
     *
     * @param int $limit
     *
     * @return iterable|string[]
     */
    public function runOptimizedSolution(int $limit): iterable;
}
