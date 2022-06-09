<?php

namespace Picamator\Trappist1e\OptimizedSolution\Transformer;

interface TransformerInterface
{
    /**
     * @param int $item
     *
     * @return bool
     */
    public function isApplicable(int $item): bool;

    /**
     * @param int $item
     *
     * @return string
     */
    public function transformItem(int $item): string;
}