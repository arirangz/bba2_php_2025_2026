<?php
class Dog extends Animal
{
    public function playWithBall():void
    {
        echo "dog playing with ball";
    }

    public function makeSound(): void
    {
        echo "waf waf";
    }

    public function test(int $num): int
    {
        return $num *2;
    }
}