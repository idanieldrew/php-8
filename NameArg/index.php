<?php

class NameArg
{
    public function __construct(
        private string  $foo,
        private ?string $bar = null,
    )
    {
    }

    public function run(): string
    {
        return $this->foo . $this->bar;
    }

}

$nameArg = new NameArg(foo: "title one");
echo $nameArg->run();