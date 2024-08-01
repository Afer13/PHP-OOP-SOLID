<?php

interface IComunicatable{
    public function speak() : string;
}
class Cat implements IComunicatable
{
    public function speak(): string
    {
        return "Miav Miav";
    }
}
class Dog implements IComunicatable{
    public function speak(): string
    {
        return "Hav Hav";
    }
}
class Communication
{
    public function communicate(IComunicatable $iComunicatable): string
    {
        return $iComunicatable->speak();
    }
}


function start()
{
    $communication = new Communication();
    $text = $communication->communicate(new Dog());
    $text2 = $communication->communicate(new Cat());
    echo $text2;
}
start();
