<?php declare(strict_types=1);

namespace Picamator\Trappist1e;

use Picamator\Trappist1e\Solution\CreativeSolution\CreativeSolution;
use Picamator\Trappist1e\Solution\OptimizedSolution\OptimizedSolution;
use Picamator\Trappist1e\Solution\OptimizedSolution\Transformer\BuzzTransformer;
use Picamator\Trappist1e\Solution\OptimizedSolution\Transformer\FizzTransformer;
use Picamator\Trappist1e\Solution\OptimizedSolution\Transformer\TransformerInterface;
use Picamator\Trappist1e\Solution\QuickSolution\QuickSolution;
use Picamator\Trappist1e\Solution\SolutionInterface;

class Trappist1eFactory
{
    /**
     * @return SolutionInterface
     */
    public function createQuickSolution(): SolutionInterface
    {
        return new QuickSolution();
    }

    /**
     * @return SolutionInterface
     */
    public function createOptimizedSolution(): SolutionInterface
    {
        return new OptimizedSolution([
            $this->createFizzTransformer(),
            $this->createBuzzTransformer(),
        ]);
    }

    /**
     * @return SolutionInterface
     */
    public function createCreativeSolution(): SolutionInterface
    {
        return new CreativeSolution();
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
