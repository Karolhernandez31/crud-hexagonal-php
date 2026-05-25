<?php

namespace Domain\ValueObjects;

class UserId
{
    public function __construct(
        private int $value
    ) {}

    public function value(): int
    {
        return $this->value;
    }
}