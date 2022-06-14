<?php declare(strict_types=1);

namespace Picamator\Trappist1e;

use Iterator;

interface Trappist1eFacadeInterface
{
    /**
     * Specification:
     * - Execute quick solution providing number of iterators elements
     * - Parameter limit should be more or equal 1
     *
     * @param int $limit
     *
     * @return Iterator
     */
    public function handleQuickSolution(int $limit): Iterator;

    /**
     * Specification:
     * - Execute optimized solution providing number of iterators elements
     * - Parameter limit should be more or equal 1
     *
     * @param int $limit
     *
     * @return Iterator
     */
    public function handleOptimizedSolution(int $limit): Iterator;

    /**
     * Specification:
     * - Execute creative solution providing number of iterators elements
     * - Parameter limit should be more or equal 1
     *
     * @param int $limit
     *
     * @return Iterator
     */
    public function handleCreativeSolution(int $limit): Iterator;
}
