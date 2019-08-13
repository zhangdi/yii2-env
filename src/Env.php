<?php
/**
 * Copyright (c) 2019. Zhang Di <zhangdi_me@163.com>
 */

namespace ZhangDi\Env;


class Env
{
    /**
     * @var array 表示 True 的值
     */
    public static $trueValues = [
        '1',
        'on',
        'true',
        'yes',
        'y',
    ];

    /**
     * @param string $name
     * @param string|null $defaultValue
     * @return array|false|string
     */
    public static function get(string $name, string $defaultValue = null)
    {
        $value = \getenv($name);
        if ($value === false) {
            return $defaultValue;
        }
        return $value;
    }

    /**
     * @param string $name
     * @param bool $defaultValue
     * @return bool
     */
    public static function getBoolean(string $name, bool $defaultValue = false): bool
    {
        $value = self::get($name);
        if ($value === null) {
            return $defaultValue;
        }
        return \in_array($value, self::$trueValues);
    }

    /**
     * @param string $name
     * @param int $defaultValue
     * @return int
     */
    public static function getInt(string $name, int $defaultValue = 0): int
    {
        $value = self::get($name);
        if ($value === null) {
            return $defaultValue;
        }
        return (int)$value;
    }
}
