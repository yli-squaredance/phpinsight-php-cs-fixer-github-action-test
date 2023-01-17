<?php

declare(strict_types=1);

namespace model;

class Company
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}
