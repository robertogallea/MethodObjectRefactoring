<?php


namespace App;


class FirstAction
{
    private HugeClass $caller;

    public function __construct(HugeClass $caller)
    {
        $this->caller = $caller;
    }

    public function execute(): string
    {
        return 'first action';
    }
}