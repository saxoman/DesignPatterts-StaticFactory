<?php
namespace Sources\Tests;
use PHPUnit\Framework\TestCase;
use Sources\Classes\FormatNumber;
use Sources\Classes\FormatString;
use Sources\Classes\StaticFactory;

/**
 * Created by PhpStorm.
 * User: sasa
 * Date: 11.2.19.
 * Time: 21.00
 */
class StaticFactoryTest extends TestCase
{
    public function testCanCreateNumberFormatter()
    {
        $this->assertInstanceOf(FormatNumber::class, StaticFactory::factory("number"));
    }
    public function testCanCreateStringFormatter()
    {
        $this->assertInstanceOf(FormatString::class, StaticFactory::factory("string"));
    }
}