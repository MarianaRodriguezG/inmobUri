<?php
require_once "../modelo/UsuarioDAO.php";
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit;
}

$id = $_GET['id'] ?? null;
if (!$id) {
    echo "ID de usuario no proporcionado.";
    exit;
}
$usuario = UsuarioDAO::buscarPorId($id);
if (!$usuario) {
    echo "Usuario no encontrado.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="css/estilosADMIN.css">
</head>
<body>
    <header><h1>Editar Usuario</h1></header>
    <main>
        <form action="../procesar_editar_usuario.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">
            <label>Nombre:</label><input type="text" name="nombre" value="<?php echo $usuario['nombre']; ?>" required><br>
            <label>Identificador:</label><input type="text" name="identificador" value="<?php echo $usuario['identificador']; ?>" required><br>
            <label>Dirección:</label><input type="text" name="direccion" value="<?php echo $usuario['direccion']; ?>"><br>
            <label>Teléfono:</label><input type="text" name="telefono" value="<?php echo $usuario['telefono']; ?>"><br>
            <label>Correo:</label><input type="email" name="correo" value="<?php echo $usuario['correo']; ?>" required><br>
            <label>Rol:</label>
            <select name="rol">
                <option value="cliente" <?php echo $usuario['rol'] === 'cliente' ? 'selected' : ''; ?>>Cliente</option>
                <option value="admin" <?php echo $usuario['rol'] === 'admin' ? 'selected' : ''; ?>>Administrador</option>
            </select><br>
            <button type="submit">Actualizar</button>
        </form>
    </main>
</body>
</html>
