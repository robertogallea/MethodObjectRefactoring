<?php


namespace App;


abstract class HugeClassAction
{
    private HugeClass $caller;

    public function __construct(HugeClass $caller)
    {
        $this->caller = $caller;
    }

    public abstract function execute(): string;
}