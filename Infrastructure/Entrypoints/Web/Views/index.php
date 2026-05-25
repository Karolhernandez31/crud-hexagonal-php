<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">

    <title>Usuarios</title>

    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

<div class="container">

    <div class="card">

        <div class="header">

            <h1>Gestión de Usuarios</h1>

            <a href="index.php?action=create" class="btn">
                Nuevo Usuario
            </a>

        </div>

        <table>

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Status</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>

            <?php foreach ($users as $user): ?>

                <tr>

                    <td><?= $user->getId() ?></td>

                    <td><?= $user->getName() ?></td>

                    <td><?= $user->getEmail() ?></td>

                    <td><?= $user->getRole() ?></td>

                    <td><?= $user->getStatus() ?></td>

                    <td>

                        <a class="edit"
                           href="index.php?action=edit&id=<?= $user->getId() ?>">
                            Editar
                        </a>

                        <a class="delete"
                           onclick="return confirm('¿Eliminar usuario?')"
                           href="index.php?action=delete&id=<?= $user->getId() ?>">
                            Eliminar
                        </a>

                    </td>

                </tr>

            <?php endforeach; ?>

            </tbody>

        </table>

    </div>

</div>

</body>
</html>