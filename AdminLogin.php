<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="styles/contact/contacto.css">
</head>
<body>
    
<div class="BackgroundDiv">
    <div class="FormContainer">  

    <form action="post" class="AdminForm">

        <div class="FormRow">
            <div class="FormEntry">
                <label for="client">Cliente</label>
                <input type="text" name="Name" placeholder="Nombre" required>
            </div>

            <div class="FormEntry">
                <label for="Phone">Telefono</label>
                <input type="tel" name="Phone" placeholder="Telefono" required>
            </div>

            <div class="FormEntry">
                <label for="Email">Correo</label>
                <input type="email" name="Telefono" placeholder="Correo">
            </div> 
        
        </div>    

        <div class="FormRow">
            <div class="FormEntry">
                <label for="Address">Dirección</label>
                <input type="text" name="Address" placeholder="Direccion" style="width: 500px;" >
            </div>
        </div>

    </form>

    <?php include 'ExitAndSaveBtns.php' ?>

</div>
</div>

</body>
</html>