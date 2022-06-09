<?php

namespace Picamator\Trappist1e\Tests;

use PHPUnit\Framework\TestCase;
use Picamator\Trappist1e\Exception\InvalidLimitException;
use Picamator\Trappist1e\Trappist1eFacade;
use Picamator\Trappist1e\Trappist1eFacadeInterface;

class Trappist1eFacadeTest extends TestCase
{
    private Trappist1eFacadeInterface $facade;

    /**
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->facade = new Trappist1eFacade();
    }

    /**
     * @dataProvider successDataProvider
     *
     * @param int $limit
     * @param array $expected
     *
     * @return void
     */
    public function testSuccessQuickSolution(int $limit, array $expected): void
    {
        $actual = $this->facade->runQuickSolution($limit);
        $this->assertOutput($actual, $expected);
    }

    /**
     * @dataProvider successDataProvider
     *
     * @param int $limit
     * @param array $expected
     *
     * @return void
     */
    public function testSuccessOptimizedSolution(int $limit, array $expected): void
    {
        $actual = $this->facade->runOptimizedSolution($limit);
        $this->assertOutput($actual, $expected);
    }

    /**
     * @param iterable $actual
     * @param array $expected
     *
     * @return void
     */
    private function assertOutput(iterable $actual, array $expected): void
    {
        $actualData = [];
        foreach ($actual as $item) {
            $actualData[] = $item;
        }

        $this->assertSame($expected, $actualData);
    }

    /**
     * @return array
     */
    public function successDataProvider(): array
    {
        return [[
            19,
            [
                '1',
                '2',
                'Fizz',
                '4',
                'Buzz',
                'Fizz',
                '7',
                '8',
                'Fizz',
                'Buzz',
                '11',
                'Fizz',
                '13',
                '14',
                'FizzBuzz',
                '16',
                '17',
                'Fizz',
                '19',
            ]
        ]];
    }
}
