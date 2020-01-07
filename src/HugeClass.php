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
        /** suppose this method perform a lot of instructions too */
        return 'second action';
    }
}