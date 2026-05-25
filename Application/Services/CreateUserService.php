<?php

namespace Application\Services;

use Application\Ports\In\CreateUserUseCase;
use Infrastructure\Adapters\Persistence\MySQL\Repository\UserRepositoryMySQL;
use Domain\Models\UserModel;

class CreateUserService implements CreateUserUseCase
{
    public function __construct(
        private UserRepositoryMySQL $repository
    ) {}

    public function execute(array $data): bool
    {
        $user = new UserModel(
            null,
            $data['name'],
            $data['email'],
            $data['password'],
            $data['role'],
            $data['status']
        );

        return $this->repository->create($user);
    }
}   