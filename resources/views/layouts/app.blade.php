<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Ma bibliothèque</title>

    <!-- Styles -->
  <style>
   body {
     background-image: url('http://localhost/library/resources/img/biblio.jpg');
     background-repeat: no-repeat;
     background-attachment: fixed;
     background-size: cover;
   }
   </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
      <nav class="navbar navbar-dark bg-dark fixed-top navbar navbar-expand-lg">
          <a class="navbar-brand" href="/">Home</a>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
             <ul class="navbar-nav">
               <li class="nav-item">
                 <a class="nav-link" href="#">Ajouter un livre</a>
               </li>
               <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Mes Etagères
                 </a>
                 <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                   <a class="dropdown-item" href="#">A lire</a>
                   <a class="dropdown-item" href="#">Ma liste d'envie</a>
                   <a class="dropdown-item" href="#">Mes livres</a>
                 </div>
               </li>
             </ul>
          </div>
      </nav>
    </div>
    <div class="container">
      @yield('content')
    </div>


    <!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" type="text/javascript"></script>
<!-- <script src="js/app.js" type="text/javascript"></script> -->

</body>
</html>
