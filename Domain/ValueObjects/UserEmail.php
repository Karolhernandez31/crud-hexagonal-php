<?php

namespace Domain\ValueObjects;

use Domain\Exceptions\InvalidUserEmailException;

class UserEmail
{
    public function __construct(
        private string $value
    ) {

        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {

            throw new InvalidUserEmailException(
                'Email inválido'
            );
        }
    }

    public function value(): string
    {
        return $this->value;
    }
}
