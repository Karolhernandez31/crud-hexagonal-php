<?php

namespace Domain\ValueObjects;

use Domain\Exceptions\InvalidUserNameException;

class UserName
{
    public function __construct(
        private string $value
    ) {

        if (strlen(trim($value)) < 3) {
            throw new InvalidUserNameException(
                'El nombre debe tener mínimo 3 caracteres'
            );
        }
    }

    public function value(): string
    {
        return $this->value;
    }
}
