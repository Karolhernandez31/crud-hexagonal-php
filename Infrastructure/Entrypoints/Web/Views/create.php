<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">

    <title>Crear Usuario</title>

    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

<div class="container">

    <div class="form-card">

        <h1>Crear Usuario</h1>

        <form action="index.php?action=store" method="POST">

            <div class="form-group">

                <label>Nombre</label>

                <input type="text"
                       name="name"
                       required>

            </div>

            <div class="form-group">

                <label>Email</label>

                <input type="email"
                       name="email"
                       required>

            </div>

            <div class="form-group">

                <label>Contraseña</label>

                <input type="password"
                       name="password"
                       required>

            </div>

            <div class="form-group">

                <label>Rol</label>

                <select name="role">

                    <option value="USER">USER</option>

                    <option value="ADMIN">ADMIN</option>

                </select>

            </div>

            <div class="form-group">

                <label>Status</label>

                <select name="status">

                    <option value="ACTIVE">ACTIVE</option>

                    <option value="INACTIVE">INACTIVE</option>

                </select>

            </div>

            <button type="submit" class="btn">
                Guardar Usuario
            </button>

            <a href="index.php" class="back-btn">
                Volver
            </a>

        </form>

    </div>

</div>

</body>
</html>