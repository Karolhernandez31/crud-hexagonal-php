<?php

namespace Domain\ValueObjects;

class UserPassword
{
    public function __construct(
        private string $value
    ) {}

    public function value(): string
    {
        return $this->value;
    }
}