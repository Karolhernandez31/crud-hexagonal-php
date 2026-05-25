<?php

namespace Application\Ports\Out;

use Domain\Models\UserModel;

interface SaveUserPort
{
    public function create(UserModel $user): bool;

    public function update(UserModel $user): bool;
}