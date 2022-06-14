<?php declare(strict_types=1);

namespace Picamator\Trappist1e\Solution;

interface SolutionInterface
{
    /**
     * @param int $limit
     *
     * @return iterable|string[]
     */
    public function handleSolution(int $limit): iterable;
}
