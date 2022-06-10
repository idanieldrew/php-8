<?php

class NameArg
{
      public function __construct(
            private string $foo,
            private ?string  $bar,
      ) {}

      public function test()
      {
            return $this->foo . $this->bar;
      }
}

$nameArg = new NameArg(
      foo: "title one",
);