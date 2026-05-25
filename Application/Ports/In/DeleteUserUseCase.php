<?php

namespace Application\Ports\In;

interface DeleteUserUseCase
{
    public function execute(int $id): bool;
}