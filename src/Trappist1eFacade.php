<?php declare(strict_types=1);

namespace Picamator\Trappist1e;

use Iterator;

class Trappist1eFacade implements Trappist1eFacadeInterface
{
    /**
     * @inheritDoc
     */
    public function runQuickSolution(int $limit): Iterator
    {
        return $this->createFactory()
            ->createQuickSolution()
            ->handleSolution($limit);
    }

    /**
     * @inheritDoc
     */
    public function runOptimizedSolution(int $limit): Iterator
    {
        return $this->createFactory()
            ->createOptimizedSolution()
            ->handleSolution($limit);
    }

    /**
     * @return Trappist1eFactory
     */
    private function createFactory(): Trappist1eFactory
    {
        return new Trappist1eFactory();
    }
}
