<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesion - Adiel Autoaire</title>
    <link rel="stylesheet" href="styles/MainStyle.css">
</head>
<body class="registro">
    <main class="registro-container">
        <div class="login-card">
            <div class="user-icon"></div>
            <h1>Inicio de Sesión Administrador</h1>
            <?php
            include("includes/db.inc.php");
            include("includes/controlador.php");
            ?>
            <form action="includes/controlador.php" method="post" class="login-form">
                <div class="form-group">
                    <label>Correo:</label>
                    <input type="text" name="usuario" placeholder="Ingrese su correo" required>
                </div>
                <div class="form-group">
                    <label>Contraseña:</label>
                    <input type="password" name="contra" placeholder="Ingrese su contraseña" required>
                </div>
                <input type="submit" name="insert" value="Iniciar sesión" class="submitbtn">
                <a class="forgot-password" id="open-modal">¿Olvidaste tu contraseña?</a>
            </form>
        </div>
    </main>

    <!-- Modal de Recuperación de Contraseña -->
    <div class="modal" id="recovery-modal">
        <div class="modal-content">
            <h2>Recuperación de Contraseña</h2>
            <form id="recovery-form">
                <div class="form-group">
                    <label for="mascota">¿Cuál es el nombre de tu primera mascota?</label>
                    <input type="text" id="mascota" name="mascota" required>
                </div>
                <div class="form-group">
                    <label for="ciudad">¿En qué ciudad naciste?</label>
                    <input type="text" id="ciudad" name="ciudad" required>
                </div>
                <div class="form-group">
                    <label for="madre">¿Cuál es el nombre de tu madre?</label>
                    <input type="text" id="madre" name="madre" required>
                </div>
                <button type="button" class="submitbtn" id="validate-btn">Validar Respuestas</button>
                <span class="close-btn" id="close-modal">Cerrar</span>
            </form>
            <div id="success-message" class="success-message" style="display: none;">
                Su contraseña es: <strong>ola123</strong>
            </div>
        </div>
    </div>

    <script>
        const modal = document.getElementById('recovery-modal');
        const openModal = document.getElementById('open-modal');
        const closeModal = document.getElementById('close-modal');
        const validateBtn = document.getElementById('validate-btn');
        const successMessage = document.getElementById('success-message');

        openModal.addEventListener('click', (e) => {
            e.preventDefault();
            modal.style.display = 'flex';
        });

        closeModal.addEventListener('click', () => {
            modal.style.display = 'none';
            successMessage.style.display = 'none';
        });

        validateBtn.addEventListener('click', () => {
            const mascota = document.getElementById('mascota').value.trim().toLowerCase();
            const ciudad = document.getElementById('ciudad').value.trim().toLowerCase();
            const madre = document.getElementById('madre').value.trim().toLowerCase();

            if (mascota === 'galvan' && ciudad === 'rio bravo' && madre === 'maria') {
                successMessage.style.display = 'block';
            } else {
                alert('Respuestas incorrectas. Intente nuevamente.');
            }
        });

        window.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.style.display = 'none';
                successMessage.style.display = 'none';
            }
        });
    </script>
</body>
</html>