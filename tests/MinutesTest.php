<?php

namespace SubjectivePHPTest\Durations;

use SubjectivePHP\Durations\Minutes;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \SubjectivePHP\Durations\Minutes
 */
final class MinutesTest extends TestCase
{
    /**
     * @test
     * @covers ::inHours
     */
    public function inHoursCalculatesValue()
    {
        for ($i = 0; $i < 60; $i++) {
            $this->assertSame(60 * $i, Minutes::inHours($i));
        }
    }

    /**
     * @test
     * @covers ::inDays
     */
    public function inDaysCalculatesValue()
    {
        for ($i = 0; $i < 60; $i++) {
            $expected = 60 * 24 * $i;
            $this->assertSame($expected, Minutes::inDays($i));
        }
    }

    /**
     * @test
     * @covers ::inWeeks
     */
    public function inWeeksCalculatesValue()
    {
        for ($i = 0; $i < 60; $i++) {
            $expected = 60 * 24 * 7 * $i;
            $this->assertSame($expected, Minutes::inWeeks($i));
        }
    }

    /**
     * @test
     * @covers ::inMonths
     */
    public function inMonthsCalculatesValue()
    {
        for ($i = 0; $i < 60; $i++) {
            $expected = 60 * 24 * 30 * $i;
            $this->assertSame($expected, Minutes::inMonths($i));
        }
    }

    /**
     * @test
     * @covers ::inYears
     */
    public function inYearsCalculatesValue()
    {
        for ($i = 0; $i < 60; $i++) {
            $expected = 60 * 24 * 365 * $i;
            $this->assertSame($expected, Minutes::inYears($i));
        }
    }
}
