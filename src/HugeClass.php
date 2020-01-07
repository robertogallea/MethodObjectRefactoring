<?php


namespace App;


class HugeClass
{
    private $actions = [
        'firstAction' => FirstAction::class,
        'secondAction' => SecondAction::class
    ];

    public function __call($method, $args)
    {
        $class = $this->actions[$method] ?? null;

        if (!$class) {
            throw new \Exception('Unsupported method');
        }

        return (new $class($this))->execute();
    }
}