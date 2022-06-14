<?php declare(strict_types=1);

namespace Picamator\Trappist1e\Solution;

use Iterator;

interface SolutionInterface
{
    /**
     * @param int $limit
     *
     * @return Iterator
     */
    public function handleSolution(int $limit): Iterator;
}
