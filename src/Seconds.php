<?php

namespace SubjectivePHP\Durations;

abstract class Seconds
{
    /**
     * @var int
     */
    const ONE_SECOND = 1;

    /**
     * @var int
     */
    const MINUTE_IN_SECONDS = self::ONE_SECOND * 60;

    /**
     * @var int
     */
    const HOUR_IN_SECONDS = self::MINUTE_IN_SECONDS * 60;

    /**
     * @var int
     */
    const DAY_IN_SECONDS = self::HOUR_IN_SECONDS * 24;

    /**
     * @var int
     */
    const WEEK_IN_SECONDS = self::DAY_IN_SECONDS * 7;

    /**
     * @var int
     */
    const MONTH_IN_SECONDS = self::DAY_IN_SECONDS * 30;

    /**
     * @var int
     */
    const YEAR_IN_SECONDS = self::DAY_IN_SECONDS * 365;

    /**
     * Returns the given number of minutes represented in minutes.
     *
     * @param int $minutes The value to covert to minutes.
     *
     * @return int
     */
    public static function inMinutes(int $minutes) : int
    {
        return $minutes * self::MINUTE_IN_SECONDS;
    }

    /**
     * Returns the given number of hours represented in minutes.
     *
     * @param int $hours The value to covert to minutes.
     *
     * @return int
     */
    public static function inHours(int $hours) : int
    {
          return $hours * self::HOUR_IN_SECONDS;
    }

    /**
     * Returns the given number of days represented in minutes.
     *
     * @param int $days The value to covert to minutes.
     *
     * @return int
     */
    public static function inDays(int $days) : int
    {
        return $days * self::DAY_IN_SECONDS;
    }

    /**
     * Returns the given number of weeks represented in minutes.
     *
     * @param int $weeks The value to covert to minutes.
     *
     * @return int
     */
    public static function inWeeks(int $weeks) : int
    {
        return $weeks * self::WEEK_IN_SECONDS;
    }

    /**
     * Returns the given number of months represented in minutes.
     *
     * @param int $months The value to covert to minutes.
     *
     * @return int
     */
    public static function inMonths(int $months) : int
    {
        return $months * self::MONTH_IN_SECONDS;
    }

    /**
     * Returns the given number of years represented in minutes.
     *
     * @param int $years The value to covert to minutes.
     *
     * @return int
     */
    public static function inYears(int $years) : int
    {
        return $years * self::YEAR_IN_SECONDS;
    }
}
