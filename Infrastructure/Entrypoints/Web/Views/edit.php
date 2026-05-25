<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">

    <title>Editar Usuario</title>

    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

<div class="container">

    <div class="form-card">

        <h1>Editar Usuario</h1>

        <form action="index.php?action=update" method="POST">

            <input type="hidden"
                   name="id"
                   value="<?= $user->getId() ?>">

            <div class="form-group">

                <label>Nombre</label>

                <input type="text"
                       name="name"
                       value="<?= $user->getName() ?>"
                       required>

            </div>

            <div class="form-group">

                <label>Email</label>

                <input type="email"
                       name="email"
                       value="<?= $user->getEmail() ?>"
                       required>

            </div>

            <div class="form-group">

                <label>Rol</label>

                <select name="role">

                    <option value="USER"
                        <?= $user->getRole() === 'USER' ? 'selected' : '' ?>>
                        USER
                    </option>

                    <option value="ADMIN"
                        <?= $user->getRole() === 'ADMIN' ? 'selected' : '' ?>>
                        ADMIN
                    </option>

                </select>

            </div>

            <div class="form-group">

                <label>Status</label>

                <select name="status">

                    <option value="ACTIVE"
                        <?= $user->getStatus() === 'ACTIVE' ? 'selected' : '' ?>>
                        ACTIVE
                    </option>

                    <option value="INACTIVE"
                        <?= $user->getStatus() === 'INACTIVE' ? 'selected' : '' ?>>
                        INACTIVE
                    </option>

                </select>

            </div>

            <button type="submit" class="btn">
                Actualizar
            </button>

            <a href="index.php" class="back-btn">
                Volver
            </a>

        </form>

    </div>

</div>

</body>
</html>