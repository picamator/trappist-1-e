<?php

namespace Picamator\Trappist1e\QuickSolution;

interface QuickSolutionInterface
{
    /**
     * @param int $limit
     *
     * @return iterable|string[]
     */
    public function runQuickSolution(int $limit): iterable;
}
