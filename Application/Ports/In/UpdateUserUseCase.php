<?php

namespace Application\Ports\In;

interface UpdateUserUseCase
{
    public function execute(array $data): bool;
}