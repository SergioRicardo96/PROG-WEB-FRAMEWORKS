<!DOCTYPE html>
<html>
   <head>
      <title>Nava</title>
      <meta charset="utf-8">
      <meta name="description" content="Traveling HTML5 Template" />
      <meta name="author" content="Design Hooks" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Raleway:400,700" rel="stylesheet" />
      <link href="img/favicon.png" type="image/x-icon" rel="shortcut icon" />
      <link href="css/screen.css" rel="stylesheet" />
      <link rel="stylesheet" href="estilos.css">
   </head>

   <body class="home" id="page">
      <!-- Header -->
      <header class="main-header">
         <div class="container">
            <div class="header-content">
               <a href="#">
                  <img src="img/site-identity.png" alt="site identity" />
               </a>

               <nav class="site-nav">
                  <ul class="clean-list site-links">
                     <li>
                        <a href="index.php">Home</a>
                     </li>
                     <li>
                        <a href="contacto.php">Contact</a>
                     </li>
                     <li>
                        <a href="QueEs.php">Whats</a>
                     </li>
                  </ul>
                  <a href="#openmodal" class="open">LOGIN</a>
                  <section id="openmodal" class="modalDialog">
                     <section class="modal">
                        <a href="#close" class="close"> X </a>
                        <h2>Inicio de sesion</h2>
                        <div id="login">
         <form action= "usuario.php" method="GET">
            <label>Usuario: </label>
            <input type="text" name="user"/>
            <label>Contrase&ntilde;a: </label>
            <input type="password" name="password"/>
            <input type="submit" value="Enviar"/>
         </form>
      </div>
                        </div>
                     </section>
                  </section>
               </nav>
            </div>
         </div>
      </header>