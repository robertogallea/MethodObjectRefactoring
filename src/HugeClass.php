<?php


namespace App;


class HugeClass
{
    public function firstAction(): string
    {
        return (new FirstAction($this))->execute();
    }

    public function secondAction(): string
    {
        return (new SecondAction($this))->execute();
    }
}