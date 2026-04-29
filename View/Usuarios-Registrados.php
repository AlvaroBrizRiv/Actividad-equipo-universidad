<?php
// 1. FORZAMOS A PHP A MOSTRAR ERRORES FATALES
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 2. Traemos el modelo usando ruta absoluta segura
require_once __DIR__ . '/../Model/usuario.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios Registrados - El Faro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.4/css/bulma.min.css">
</head>
<body class="has-background-light">
    
    <nav class="navbar is-dark has-shadow">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item has-text-weight-bold" href="index.php">
                    ⬅ VOLVER A EL FARO
                </a>
            </div>
        </div>
    </nav>

    <section class="section">
        <div class="container is-max-desktop">
            <div class="box">
                <h1 class="title is-3 has-text-centered has-text-link">Panel de Usuarios Registrados</h1>
                <p class="subtitle is-6 has-text-centered mb-5">Listado histórico de lectores suscritos a la plataforma.</p>
                
                <div class="table-container">
                    <table class="table is-striped is-hoverable is-fullwidth">
                        <thead class="has-background-link-light">
                            <tr>
                                <th>ID</th>
                                <th>Nombre Completo</th>
                                <th>Correo Electrónico</th>
                                <th>Fecha de Registro</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // 3. Consultamos la base de datos
                            $usuarios = Usuario::obtenerTodos();

                            if (count($usuarios) > 0):
                                foreach ($usuarios as $user):
                            ?>
                                <tr>
                                    <td><strong>#<?php echo htmlspecialchars($user['id']); ?></strong></td>
                                    <td><?php echo htmlspecialchars($user['nombre'] . ' ' . $user['apellido']); ?></td>
                                    <td><a href="mailto:<?php echo htmlspecialchars($user['email']); ?>"><?php echo htmlspecialchars($user['email']); ?></a></td>
                                    <td><?php echo htmlspecialchars($user['fecha_registro']); ?></td>
                                </tr>
                            <?php 
                                endforeach;
                            else: 
                            ?>
                                <tr>
                                    <td colspan="4" class="has-text-centered has-text-grey">No hay usuarios registrados todavía.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </section>
</body>
</html>