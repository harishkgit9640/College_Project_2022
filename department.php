<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Faclities Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <?php include "menu.php"; ?>
    <script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
</head>

<body>
    <!-- Faclities Details section -->
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <div class="my-4 p-5 bg-primary text-white rounded text-center ">
                    <h1 class="mb-3">Faclities Details</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip
                        ex ea commodo consequat..</p>
                </div>
                <div class="add float-right mb-3">

                    <a href="Faclities/create.php" class="btn btn-success"><i class="fa fa-plus"></i> Add New Faclity</a>
                </div>

                <?php

                // Include database file
                require_once "Faclities/config.php";

                // Attempt select query execution
                $sql = "SELECT * FROM employees_info";
                if ($result = mysqli_query($link, $sql)) {
                    if (mysqli_num_rows($result) > 0) {
                        echo '<table class="table table-bordered table-striped">';
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th>Sl No.</th>";
                        echo "<th>Full Name</th>";
                        echo "<th>Address</th>";
                        echo "<th>Contact Number</th>";
                        echo "<th>E-mail</th>";
                        echo "<th>Action</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['address'] . "</td>";
                            echo "<td>" . $row['number'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>";
                            echo '<a href="Faclities/read.php?id=' . $row['id'] . '" class="mr-3 text-secondary" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                            echo '<a href="Faclities/update.php?id=' . $row['id'] . '" class="mr-3 text-primary" title="Update Record" data-toggle="tooltip"><span class="fa fa-edit"></span></a>';
                            echo '<a href="Faclities/delete.php?id=' . $row['id'] . '" class="mr-3 text-danger" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                            echo "</td>";
                            echo "</tr>";
                        }
                        echo "</tbody>";
                        echo "</table>";
                        // Free result set
                        mysqli_free_result($result);
                    } else {
                    echo '<a href="Faclities/create.php" class="btn btn-success"><i class="fa fa-plus"></i> Add New Faclity</a>';
                                           
                    }
                } else {
                    echo "Oops! Something went wrong. Please try again later.";
                }
                // Close connection
                mysqli_close($link);
                ?>
            </div>
        </div>
    </div>
    <?php include "footer.php"; ?>

</body>

</html>