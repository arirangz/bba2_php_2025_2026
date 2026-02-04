<?php

abstract class Animal
{
    protected string $color;

    public abstract function makeSound():void;
    public abstract function test(int $num):int;

}