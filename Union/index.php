<?php

class Union
{
    // Union type
    public function test(int|float $input): int|float
    {
        return $input;
    }
}

$object = new Union();

echo $object->test(54);