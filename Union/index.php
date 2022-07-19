<?php

class Union
{
    // Union type
    public function run(int|string $input): int|string
    {
        return $input;
    }
}

$object = new Union();

// int
echo $object->run(54);

// string
echo $object->run("54");