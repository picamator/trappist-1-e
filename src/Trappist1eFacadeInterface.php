<?php declare(strict_types=1);

namespace Picamator\Trappist1e;

use Iterator;

interface Trappist1eFacadeInterface
{
    /**
     * Specification:
     * - Execute quick solution providing number of iterator's elements
     * - Parameter limit should be more or equal 1
     *
     * @param int $limit
     *
     * @return Iterator
     */
    public function runQuickSolution(int $limit): Iterator;

    /**
     * Specification:
     * - Execute optimized solution providing number of iterator's elements
     * - Parameter limit should be more or equal 1
     *
     * @param int $limit
     *
     * @return Iterator
     */
    public function runOptimizedSolution(int $limit): Iterator;
}
