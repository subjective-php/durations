<?php

namespace SubjectivePHPTest\Durations;

use SubjectivePHP\Durations\Seconds;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \SubjectivePHP\Durations\Seconds
 */
final class SecondsTest extends TestCase
{
    /**
     * @test
     * @covers ::inMinutes
     */
    public function inMinutesCalculatesValue()
    {
        for ($i = 0; $i < 60; $i++) {
            $this->assertSame(60 * $i, Seconds::inMinutes($i));
        }
    }

    /**
     * @test
     * @covers ::inHours
     */
    public function inHoursCalculatesValue()
    {
        for ($i = 0; $i < 60; $i++) {
            $this->assertSame(60 * 60 * $i, Seconds::inHours($i));
        }
    }

    /**
     * @test
     * @covers ::inDays
     */
    public function inDaysCalculatesValue()
    {
        for ($i = 0; $i < 60; $i++) {
            $expected = 60 * 60 * 24 * $i;
            $this->assertSame($expected, Seconds::inDays($i));
        }
    }

    /**
     * @test
     * @covers ::inWeeks
     */
    public function inWeeksCalculatesValue()
    {
        for ($i = 0; $i < 60; $i++) {
            $expected = 60 * 60 * 24 * 7 * $i;
            $this->assertSame($expected, Seconds::inWeeks($i));
        }
    }

    /**
     * @test
     * @covers ::inMonths
     */
    public function inMonthsCalculatesValue()
    {
        for ($i = 0; $i < 60; $i++) {
            $expected = 60 * 60 * 24 * 30 * $i;
            $this->assertSame($expected, Seconds::inMonths($i));
        }
    }

    /**
     * @test
     * @covers ::inYears
     */
    public function inYearsCalculatesValue()
    {
        for ($i = 0; $i < 60; $i++) {
            $expected = 60 * 60 * 24 * 365 * $i;
            $this->assertSame($expected, Seconds::inYears($i));
        }
    }
}
