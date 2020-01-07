<?php


namespace App;


class HugeClass
{
    public function firstAction(): string
    {
        /** suppose this method perform a lot of instructions */
        return 'first action';
    }

    public function secondAction(): string
    {
        /** suppose this method perform a lot of instructions too */
        return 'second action';
    }
}