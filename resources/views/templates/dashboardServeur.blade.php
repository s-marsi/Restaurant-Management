<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Dashboard</title>
  @yield("style")
</head>
<body>
  

  <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-between mx-3">
    <div>
        <div class="d-flex flex-column bg-white ">
          <a class="navbar-brand mb-0" href="/dashboard" style="font-size: 15px; font-weight: 600">Mon Resto</a>
          <a class="navbar-brand" style="font-size: 15px; font-weight: 600">Serveur : {{Auth::user()->name}}</a>
        </div>
    </div>
    <div >
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Commandes</a>
          </li>
      </ul>
    </div>
    <div>
      <button class="btn btn-primary">Nouvelle Commande</button>
    </div>
  </nav>


  @yield("contenue")

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>
