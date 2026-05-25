<?php

namespace Application\Services;

use Application\Ports\In\UpdateUserUseCase;
use Infrastructure\Adapters\Persistence\MySQL\Repository\UserRepositoryMySQL;
use Domain\Models\UserModel;

class UpdateUserService implements UpdateUserUseCase
{
    public function __construct(
        private UserRepositoryMySQL $repository
    ) {}

    public function execute(array $data): bool
    {
        $user = new UserModel(
            $data['id'],
            $data['name'],
            $data['email'],
            '',
            $data['role'],
            $data['status']
        );

        return $this->repository->update($user);
    }
}