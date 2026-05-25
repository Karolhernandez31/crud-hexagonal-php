<?php

namespace Application\Services;

use Application\Ports\In\GetAllUsersUseCase;
use Infrastructure\Adapters\Persistence\MySQL\Repository\UserRepositoryMySQL;

class GetAllUsersService implements GetAllUsersUseCase
{
    public function __construct(
        private UserRepositoryMySQL $repository
    ) {}

    public function execute(): array
    {
        return $this->repository->findAll();
    }
}