<?php
namespace Sources\Classes;
use Sources\Interfaces\FormatterInterface;

/**
 * Created by PhpStorm.
 * User: sasa
 * Date: 11.2.19.
 * Time: 20.55
 */

final class StaticFactory
{
    /**
     * @return FormatterInterface
     */
    public static function factory(string $type):FormatterInterface
    {
        if ($type == 'number') {
            return new FormatNumber();
        }

        if ($type == 'string') {
            return new FormatString();
        }

        throw new \InvalidArgumentException('Unknown format given');

    }
}