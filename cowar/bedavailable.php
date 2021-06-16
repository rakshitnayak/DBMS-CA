<?php

require_once("./php/component.php");
require_once("./php/operation.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cowar</title>

    <!-- font awseome cdn for icons  -->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!--bootstrap for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />

    <!--local styles-->
    <link rel="stylesheet" href="../cowar/css/styles.css">
</head>

<body style="background-image: linear-gradient(180deg, #eee, #fff 100px, #fff);">
    <main>
        <div style="max-width: 960px; margin:auto; ">
            <header>
                <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
                    <a href="../cowar/main.php " class="d-flex align-items-center text-dark text-decoration-none">
                        <i class="fas fa-user-lock"></i>
                        <span class="fs-4">Home </span>
                    </a>

                    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                        <a class="me-3 py-2 text-dark text-decoration-none" href="../cowar/hospital.php">Hospital</a>
                        <a class="me-3 py-2 text-dark text-decoration-none" href="../cowar/bedavailable.php">Bed Data</a>
                        <a class="me-3 py-2 text-dark text-decoration-none" href="../cowar/oxygen.php">Oxygen</a>
                    </nav>
                </div>
            </header>

        </div>



        <div class="container text-center">

            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <i class="fas fa-3x fa-bed"></i>
                <h1 class="display-4 fw-normal">Bed Info</h1>
            </div>

            <div class="d-flex justify-content-center">
                <form action="" method="post" class="w-50">
                    <div class="pt-2">
                        <?php inputComponent("<i class='fas fa-id-badge'></i>", "Hospital_ID", "hospital_id", ""); ?>
                    </div>

                    <div class="pt-2">
                        <?php inputComponent("<i class='fas fa-bed'></i>", "Total_beds", "total_beds", ""); ?>
                    </div>


                    <div class="row pt-2">

                        <div class="col">
                            <?php inputComponent("<i class='fas fa-battery-half'></i>", "Available_Beds", "available_beds", ""); ?>
                        </div>
                        <div class="col">
                            <?php inputComponent("<i class='fas fa-battery-full'></i>", "Occupied_Beds", "occupied_beds", ""); ?>
                        </div>

                    </div>

                    <div class="d-flex justify-content-center">
                        <?php buttonElement("btn-create", "btn btn-success", "<i class='fas fa-plus'></i>", "bedcreate", "data-toggle='tooltip' data-placement='bottom' title='Create'"); ?>
                        <?php buttonElement("btn-read", "btn btn-primary", "<i class='fas fa-sync'></i>", "bedread", "data-toggle='tooltip' data-placement='bottom' title='Read'"); ?>
                        <?php buttonElement("btn-update", "btn btn-light border", "<i class='fas fa-pen-alt'></i>", "bedupdate", "data-toggle='tooltip' data-placement='bottom' title='Update'"); ?>
                        <?php buttonElement("btn-delete", "btn btn-danger", "<i class='fas fa-trash-alt'></i>", "beddelete", "data-toggle='tooltip' data-placement='bottom' title='Delete'"); ?>
                    </div>

                </form>
            </div>



            <!-- bootstrap table -->
            <div class="d-flex table-data">
                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                            <th>Hospital ID</th>
                            <th>Total Beds</th>
                            <th>Available Beds</th>
                            <th>Occupied</th>


                        </tr>
                    </thead>
                    <tbody id="tbody">
                        <tr>
                            <?php

                            if (isset($_POST['bedread'])) {
                                $result = getBedData();

                                if ($result) {

                                    while ($row = mysqli_fetch_assoc($result)) { ?>

                        <tr>
                            <td><?php echo $row['hospital_id']; ?></td>
                            <td><?php echo $row['total_beds']; ?></td>
                            <td><?php echo $row['available_beds']; ?></td>
                            <td><?php echo $row['occupied_beds']; ?></td>

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


        </div>
    </main>

    <script src=" ../cowar/php/main.js">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>