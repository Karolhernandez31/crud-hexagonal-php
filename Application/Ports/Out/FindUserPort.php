<?php

namespace Application\Ports\Out;

interface FindUserPort
{
    public function findAll(): array;

    public function findById(int $id);
}