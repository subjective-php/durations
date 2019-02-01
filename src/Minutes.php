<?php

namespace SubjectivePHP\Durations;

abstract class Minutes
{
    /**
     * @var int
     */
    const ONE_MINUTE = 1;

    /**
     * @var int
     */
    const HOUR_IN_MINUTES = self::ONE_MINUTE * 60;

    /**
     * @var int
     */
    const DAY_IN_MINUTES = self::HOUR_IN_MINUTES * 24;

    /**
     * @var int
     */
    const WEEK_IN_MINUTES = self::DAY_IN_MINUTES * 7;

    /**
     * @var int
     */
    const MONTH_IN_MINUTES = self::DAY_IN_MINUTES * 30;

    /**
     * @var int
     */
    const YEAR_IN_MINUTES = self::DAY_IN_MINUTES * 365;

    /**
     * Returns the given number of hours represented in seconds.
     *
     * @param int $hours The value to covert to seconds.
     *
     * @return int
     */
    public static function inHours(int $hours) : int
    {
        return $hours * self::HOUR_IN_MINUTES;
    }

    /**
     * Returns the given number of days represented in seconds.
     *
     * @param int $days The value to covert to seconds.
     *
     * @return int
     */
    public static function inDays(int $days) : int
    {
        return $days * self::DAY_IN_MINUTES;
    }

    /**
     * Returns the given number of weeks represented in seconds.
     *
     * @param int $weeks The value to covert to seconds.
     *
     * @return int
     */
    public static function inWeeks(int $weeks) : int
    {
        return $weeks * self::WEEK_IN_MINUTES;
    }

    /**
     * Returns the given number of months represented in seconds.
     *
     * @param int $months The value to covert to seconds.
     *
     * @return int
     */
    public static function inMonths(int $months) : int
    {
        return $months * self::MONTH_IN_MINUTES;
    }

    /**
     * Returns the given number of years represented in seconds.
     *
     * @param int $years The value to covert to seconds.
     *
     * @return int
     */
    public static function inYears(int $years) : int
    {
        return $years * self::YEAR_IN_MINUTES;
    }
}
