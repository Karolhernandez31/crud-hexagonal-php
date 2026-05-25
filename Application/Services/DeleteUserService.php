<?php

namespace Application\Services;

use Application\Ports\In\DeleteUserUseCase;
use Infrastructure\Adapters\Persistence\MySQL\Repository\UserRepositoryMySQL;

class DeleteUserService implements DeleteUserUseCase
{
    public function __construct(
        private UserRepositoryMySQL $repository
    ) {}

    public function execute(int $id): bool
    {
        return $this->repository->delete($id);
    }
}