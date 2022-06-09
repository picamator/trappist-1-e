<?php

namespace Picamator\Trappist1e;

class Trappist1eFacade implements Trappist1eFacadeInterface
{
    /**
     * @inheritDoc
     */
    public function runQuickSolution(int $limit): iterable
    {
        return $this->createFactory()
            ->createQuickSolution()
            ->runQuickSolution($limit);
    }

    /**
     * @inheritDoc
     */
    public function runOptimizedSolution(int $limit): iterable
    {
        return $this->createFactory()
            ->createOptimizedSolution()
            ->runOptimizedSolution($limit);
    }

    /**
     * @return Trappist1eFactory
     */
    private function createFactory(): Trappist1eFactory
    {
        return new Trappist1eFactory();
    }
}
