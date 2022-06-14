<?php declare(strict_types=1);

namespace Picamator\Trappist1e;

use Picamator\Trappist1e\OptimizedSolution\OptimizedSolution;
use Picamator\Trappist1e\OptimizedSolution\OptimizedSolutionInterface;
use Picamator\Trappist1e\OptimizedSolution\Transformer\BuzzTransformer;
use Picamator\Trappist1e\OptimizedSolution\Transformer\FizzTransformer;
use Picamator\Trappist1e\OptimizedSolution\Transformer\TransformerInterface;
use Picamator\Trappist1e\QuickSolution\QuickSolution;
use Picamator\Trappist1e\QuickSolution\QuickSolutionInterface;

class Trappist1eFactory
{
    /**
     * @return QuickSolutionInterface
     */
    public function createQuickSolution(): QuickSolutionInterface
    {
        return new QuickSolution();
    }

    /**
     * @return OptimizedSolutionInterface
     */
    public function createOptimizedSolution(): OptimizedSolutionInterface
    {
        return new OptimizedSolution([
            $this->createFizzTransformer(),
            $this->createBuzzTransformer(),
        ]);
    }

    /**
     * @return TransformerInterface
     */
    private function createBuzzTransformer(): TransformerInterface
    {
        return new BuzzTransformer();
    }

    /**
     * @return TransformerInterface
     */
    private function createFizzTransformer(): TransformerInterface
    {
        return new FizzTransformer();
    }
}
