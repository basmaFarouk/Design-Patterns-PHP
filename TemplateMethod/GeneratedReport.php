<?php

namespace TemplateMethod;

class GeneratedReport
{
    private bool $isPassed;

    public function __construct(bool $isPassed)
    {
        $this->isPassed = $isPassed;
    }

    public function isPassed(): bool
    {
        return $this->isPassed;
    }
}