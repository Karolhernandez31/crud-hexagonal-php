<?php

require_once '../Infrastructure/Adapters/Persistence/MySQL/Config/Connection.php';
require_once '../Domain/Models/UserModel.php';
require_once '../Infrastructure/Adapters/Persistence/MySQL/Repository/UserRepositoryMySQL.php';
require_once '../Infrastructure/Entrypoints/Web/Controllers/UserController.php';

use Infrastructure\Entrypoints\Web\Controllers\UserController;

$controller = new UserController();

$action = $_GET['action'] ?? 'index';

switch ($action) {

    case 'create':
        $controller->create();
        break;

    case 'store':
        $controller->store();
        break;

    case 'edit':
        $controller->edit();
        break;

    case 'update':
        $controller->update();
        break;

    case 'delete':
        $controller->delete();
        break;

    default:
        $controller->index();
        break;
}