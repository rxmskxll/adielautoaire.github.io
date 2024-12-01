<!DOCTYPE html>
        <html lang="es">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="styles/MainStyle.css">
                <title>Panel Administrativo</title>
            </head>

            <body>

            <script src="/PI/scripts/AdminScript.js" async></script>
            <!-- Sidebar for the administrator page -->
                 <div class="SideBar">

                        <div class="LogoDiv" id="dashboard">
                            <img class="SidebarLogo" src="images/MiniLogos/Bell.png">
                            <p class="LogoText">Inicio</p>
                        </div>


                        <div class="LogoDiv" id="Clients">
                            <img class="SidebarLogo" src="images/MiniLogos/ClientLogo.png">
                           <p class="LogoText">Clientes</p>
                        </div>

                        <div class="LogoDiv" id="Catalogo">
                            <img class="SidebarLogo" src="images/MiniLogos/InventoryLogo.png">
                            <p class="LogoText">Catalogo</p>
                        </div>

                        <div class="LogoDiv" id="ListaSolicitudes">
                            <img class="SidebarLogo" src="images/MiniLogos/PetitionsLogo.png">
                            <p class="LogoText">Peticiones</p>
                        </div>
                        
                        <div class="LogoDiv" id="Trabajos">
                            <img class="SidebarLogo" src="images/MiniLogos/JobLogo.png">
                            <p class="LogoText">Trabajos</p>
                        </div>
                    </div>
                        <!-- This is where the main content gets inserted -->
                    <div class="MainContent" id="MainContent">

                        <?php include 'AdminCode/dashboard.php' ?>

                    </div>

                    <div id="registryForm"></div>

         </body>
<html>