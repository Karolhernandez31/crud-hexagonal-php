<?php

namespace Application\Ports\In;

interface CreateUserUseCase
{
    public function execute(array $data): bool;
}