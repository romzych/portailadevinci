<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="base/css/style.css">
    <link rel="stylesheet" href="base/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  </head>


  <body>

    <header>

      <style type="text/css">

      .float {
       float: left;
       padding-left: 200px;
       padding-top: 10px;
       }

      .carre {
        background-color: red;
        width:110px;
        height:140px;
      }
      
      </style>

      <!-- Logo -->

      <body>
        <div class="float">
          <div class="carre"></div>
        </div>


      <!-- Bouton Contacts -->
      <a href="#" class="btn btn-secondary" type="button" name="Contacts" id="dropdownMenuButton">Contacts</a>

      <!-- Bouton Vie étudiante -->
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">Vie étudiante</button>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Mon EDT</a>
          <a class="dropdown-item" href="#">Mes absences</a>
          <a class="dropdown-item" href="#">Mes notes</a>
          <a class="dropdown-item" href="#">Mes cours</a>
          <a class="dropdown-item" href="#">Inscription Sport</a>
          <a class="dropdown-item" href="#">Finances</a>
        </div>
      </div>

      <!-- Bouton Vie de l'école -->
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">Vie de l'école</button>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Promotion école</a>
          <a class="dropdown-item" href="#">Occupation des salles</a>
          <a class="dropdown-item" href="#">Ressources info</a>
          <a class="dropdown-item" href="#">Learning Center</a>
          <a class="dropdown-item" href="#">Internationnal</a>
          <a class="dropdown-item" href="#">Rendu pédagogique</a>
        </div>
      </div>

      <!-- Bouton Contacts -->
      <a href="#" class="btn btn-secondary" type="button" name="Contacts" id="dropdownMenuButton"></a>


    </header>

  </body>

</html>
