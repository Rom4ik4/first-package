<?php

namespace app;

class HelloWorld
{
    public function print(): void
    {
        echo "Hello World!🙂 Сегодня : " . date("m.d.Y");
    }
}