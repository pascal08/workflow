<?php

namespace Pascal\Workflow;

abstract class IfWorker implements WorkerInterface
{
    /**
     * @var mixed
     */
    protected $value1;

    /**
     * @var mixed
     */
    protected $value2;

    /**
     * IfWorker constructor.
     *
     * @param mixed $value1
     * @param mixed $value2
     */
    public function __construct($value1, $value2)
    {
        $this->value1 = $value1;
        $this->value2 = $value2;
    }

    /**
     * @param mixed $value
     * @return mixed
     */
    protected function evaluate($value)
    {
        return $value instanceof \Closure
                ? call_user_func($value)
                : $value;
    }
}
