<?php

namespace Infrastructure\Entrypoints\Web\Controllers;

use Infrastructure\Adapters\Persistence\MySQL\Repository\UserRepositoryMySQL;
use Domain\Models\UserModel;

class UserController
{
    private UserRepositoryMySQL $repository;

    public function __construct()
    {
        $this->repository = new UserRepositoryMySQL();
    }

    public function index()
    {
        $users = $this->repository->findAll();

        require '../Infrastructure/Entrypoints/Web/Views/index.php';
    }

    public function create()
    {
        require '../Infrastructure/Entrypoints/Web/Views/create.php';
    }

    public function store()
    {
        if (
            empty($_POST['name']) ||
            empty($_POST['email']) ||
            empty($_POST['password'])
        ) {
            die('Todos los campos son obligatorios');
        }

        $user = new UserModel(
            null,
            $_POST['name'],
            $_POST['email'],
            $_POST['password'],
            $_POST['role'],
            $_POST['status']
        );

        $this->repository->create($user);

        header('Location: index.php');
    }

    public function edit()
    {
        $user = $this->repository->findById($_GET['id']);

        require '../Infrastructure/Entrypoints/Web/Views/edit.php';
    }

    public function update()
    {
        $user = new UserModel(
            $_POST['id'],
            $_POST['name'],
            $_POST['email'],
            '',
            $_POST['role'],
            $_POST['status']
        );

        $this->repository->update($user);

        header('Location: index.php');
    }

    public function delete()
    {
        $this->repository->delete($_GET['id']);

        header('Location: index.php');
    }
}