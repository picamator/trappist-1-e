<?php declare(strict_types=1);

namespace Picamator\Trappist1e\Tests;

use Iterator;
use MultipleIterator;
use PHPUnit\Framework\TestCase;
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
        $actual = $this->facade->handleQuickSolution($limit);
        $this->assertOutput($actual, $expected);
    }

    /**
     * @dataProvider emptyDataProvider
     *
     * @param int $limit
     *
     * @return void
     */
    public function testEmptyQuickSolution(int $limit): void
    {
        $expected = [];

        $actual = $this->facade->handleQuickSolution($limit);
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
        $actual = $this->facade->handleOptimizedSolution($limit);
        $this->assertOutput($actual, $expected);
    }

    /**
     * @dataProvider emptyDataProvider
     *
     * @param int $limit
     *
     * @return void
     */
    public function testEmptyOptimizedSolution(int $limit): void
    {
        $expected = [];

        $actual = $this->facade->handleOptimizedSolution($limit);
        $this->assertOutput($actual, $expected);
    }

    /**
     * @return void
     */
    public function testCompareQuickWithOptimizedSolutions()
    {
        $limit = 100;

        $quickSolution = $this->facade->handleQuickSolution($limit);
        $optimizedSolution = $this->facade->handleOptimizedSolution($limit);

        $this->assertSameSolutions($quickSolution, $optimizedSolution);
    }

    /**
     * @dataProvider emptyDataProvider
     *
     * @param int $limit
     *
     * @return void
     */
    public function testEmptyCreativeSolution(int $limit): void
    {
        $expected = [];

        $actual = $this->facade->handleCreativeSolution($limit);
        $this->assertOutput($actual, $expected);
    }

    /**
     * @return void
     */
    public function testCompareQuickWithCreativeSolutions()
    {
        $limit = 100;

        $quickSolution = $this->facade->handleQuickSolution($limit);
        $creativeSolution = $this->facade->handleCreativeSolution($limit);

        $this->assertSameSolutions($quickSolution, $creativeSolution);
    }

    /**
     * @param Iterator $solutionA
     * @param Iterator $solutionB
     *
     * @return void
     */
    private function assertSameSolutions(Iterator $solutionA, Iterator $solutionB): void
    {
        $multipleIterator = new MultipleIterator(MultipleIterator::MIT_NEED_ALL|MultipleIterator::MIT_KEYS_ASSOC);

        $multipleIterator->attachIterator($solutionA, 'solutionA');
        $multipleIterator->attachIterator($solutionB, 'solutionB');

        foreach ($multipleIterator as $item) {
            $this->assertSame($item['solutionA'], $item['solutionB']);
        }
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
     * @return \int[][]
     */
    public function emptyDataProvider(): array
    {
        return [
            [
                -1,
            ], [
                0,
            ]
        ];
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
