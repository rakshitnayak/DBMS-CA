<?php
require_once('../cowar/php/operation.php');
?>


<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
  <meta name="generator" content="Hugo 0.83.1" />
  <title>Cowar </title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/" />

  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180" />
  <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png" />
  <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png" />
  <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json" />
  <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3" />
  <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico" />
  <meta name="theme-color" content="#7952b3" />

  <!-- Custom styles for this template -->
  <link href="../cowar/css/cover.css" rel="stylesheet" />
</head>

<body class="d-flex h-100 text-center text-white bg-dark">
  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
      <div>
        <h3 class="float-md-start mb-0">Cowar</h3>
        <nav class="nav nav-masthead justify-content-center float-md-end">
          <a class="nav-link active" aria-current="page" href="../cowar/main.php">Home</a>
          <a class="nav-link" href="../cowar/hospital.php">Admin</a>
          <a class="nav-link" href="#">Contact</a>
        </nav>
      </div>
    </header>

    <main class="px-3">
      <h1>Enter the Pincode</h1>
      <p class="lead">Data is filtered based on the Pincode you enter</p>
      <form class="d-flex" action="main.php" method="post">
        <input class="form-control me-2" type="text" placeholder="Pincode" aria-label="Search" name="str">
        <input type="submit" name="submit" value="search">
      </form>
      <!-- <p class="lead">
        <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Learn more</a>
      </p> -->
    </main>
    <?php
    $con = mysqli_connect('localhost', 'root', '', 'bedmanagement');
    if (isset($_POST['submit'])) {
      $search = $_POST['str'];
      $sql = "SELECT hospitals.id, hospitals.hospital_name,hospitals.hospital_address,hospitals.contact,bed_availablity.available_beds FROM hospitals,bed_availablity WHERE hospitals.pincode LIKE '%$search%'";
      $result = mysqli_query($GLOBALS['con'], $sql);

      while ($row = mysqli_fetch_array($result)) {
        $id = $row['id'];
        $hospitalname = $row['hospital_name'];
        $hospitaladdress = $row['hospital_address'];
        // $pincode = $row['pincode'];
        $contact = $row['contact'];
        $avaialblebeds = $row['available_beds']


    ?>

        <table class="table table-dark table-striped">

          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>address</th>
              <th>Available Beds</th>
              <th>Contact No</th>
            </tr>
          </thead>

          <tbody>

            <td><?php echo $id; ?> </td>
            <td><?php echo $hospitalname; ?> </td>
            <td><?php echo $hospitaladdress; ?> </td>
            <td><?php echo $avaialblebeds; ?> </td>
            <td><?php echo $contact; ?> </td>
          </tbody>
        </table>

    <?Php }
    }  ?>







    <footer class="mt-auto text-white-50">
      <p>
        Github Link for
        <a>Project</a>,
        <a href="/" class="text-white">@link</a>.
      </p>
    </footer>
  </div>
</body>

</html>