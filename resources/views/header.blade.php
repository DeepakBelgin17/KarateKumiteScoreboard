<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">

</head>
<body>
       <div class="container-fluid bg-primary sticky-top rounded-start">
       <nav class="navbar navbar-expand-lg ">
       <a class="navbar-brand" href="#">

        <img src="/images/logo.jpg" alt="Kumite" width="60" height="60" class="rounded-circle">
      </a>
  <a class="navbar-brand" href="#" style="color:gold;">Score Card</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav" style="color: gold;" >

    <ul class="navbar-nav ml-auto"  >
      <li class="nav-item" style="margin-left:100px;">
        <a class="nav-link nav-color" href="{{ url('register_form') }}" >Home</a>
      </li>
      <li class="nav-item" style="margin-left:100px;">
        <a class="nav-link nav-color" href="#" >About us</a>
      </li>
      <li class="nav-item" style="margin-left:100px;">


        <button type="button" class="btn btn-outline-warning" onclick="location.href='/adminpage'">Admin</button>
      </li>
    </ul>
  </div>
</div>
</div>

</nav>
</body>
</html>
