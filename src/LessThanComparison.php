<?php

namespace Pascal\Workflow;

class LessThanComparison extends IfWorker
{

    /**
     * @return bool
     */
    public function execute()
    {
        return $this->evaluate($this->value1) < $this->evaluate($this->value2);
    }
}
