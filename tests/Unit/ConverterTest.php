<?php

use PHPUnit\Framework\TestCase;

class ConverterTest extends TestCase
{
    public function testHello()
    {
        $this->assertEquals('Hello', 'Hell' . 'o');
    }

    public function testSimpleConversion()
    {
        $input = '{"key1": "value1", "key2": "value2"}';

        $output = [
            'key1' => 'value1',
            'key2' => 'value2',
        ];

        $converter = new \Codethrust\Converter\Converter();

        $this->assertEquals($output, $converter->convertString($input));
    }
}