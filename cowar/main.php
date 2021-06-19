<?php

require_once("./php/component.php");
require_once("./php/operation.php");

?>


<!doctype html>
<html lang="en" class="h-100">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.83.1">
  <title>DBMS CA</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">



  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />


  <!-- Favicons -->
  <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
  <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#7952b3">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="../cowar/css/cover.css" rel="stylesheet">
</head>

<body class="d-flex h-100 text-center text-white bg-dark">

  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
      <div>
        <h3 class="float-md-start mb-0">DBMS CA</h3>
        <nav class="nav nav-masthead justify-content-center float-md-end">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <a class="nav-link" href="../cowar/hospital.php">Admin</a>
          <a class="nav-link" href="../cowar/team.php">Group members</a>
        </nav>
      </div>
    </header>

    <main class="px-3">
      <h1>Enter Pincode</h1>
      <p class="lead">Data is filtered based on the pincode you enter</p>
      <form class="d-flex" action="" method="post" style="margin-bottom: 20px;">
        <input class="form-control me-2" type="text" placeholder="Pincode" aria-label="Search" name="str">

        <input type="submit" name="submit" value="search">

      </form>
      <div class="d-flex table-data">
        <table class="table table-dark table-striped">
          <thead>
            <tr>
              <th>Pincode</th>
              <th>Name</th>
              <th>address</th>
              <th>Available Beds</th>
              <th>Ph No</th>
            </tr>
          </thead>
          <tbody id="tbody">
            <tr>
              <?php

              if (isset($_POST['submit'])) {
                $result = getSearchData();

                if ($result) {

                  while ($row = mysqli_fetch_assoc($result)) { ?>

            <tr>
              <td><?php echo $row['pincode']; ?></td>
              <td><?php echo $row['hospital_name']; ?></td>
              <td><?php echo $row['hospital_address']; ?></td>
              <td><?php echo $row['available_beds']; ?></td>
              <td><?php echo $row['contact']; ?></td>

            </tr>

      <?php
                  }
                }
              }


      ?>
      </tr>

          </tbody>
        </table>


      </div>



    </main>









    <footer class="mt-auto text-white-50">
      <p>Github link <a href="https://twitter.com/mdo" class="text-white">@link</a>.</p>
    </footer>
  </div>



</body>

</html>


















<!-- <form class="d-flex" action="" method="post">
        <input class="form-control me-2" type="text" placeholder="Pincode" aria-label="Search" name="str">
        <input type="submit" name="submit" value="search">
      </form> -->