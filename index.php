<?php

include("db.php");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL WITH PHP</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

    <?php

    // function made to show data 
    function displayArrayAsTable($array)
    {
        echo '<div class="container mt-5"> <table class="table table-bordered">';
        foreach ($array as $row) {
            echo '<tr>';
            foreach ($row as $key => $value) {

                echo '<td>' . $key . '</td>';
            }
            break;
            echo '</tr>';
        }

        foreach ($array as $row) {
            echo '<tr>';
            foreach ($row as $key => $value) {

                echo '<td>' . $value . '</td>';
            }
        }
        echo '</tr>';
        echo '</table></div>';
    }





    ?>



    <h1 class="text-center mt-5">show data from html</h1>
    <div class="container mt-5">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>idFilm</th>
                    <th>idGenre</th>
                    <th>titre</th>
                    <th>annee</th>
                    <th>dure</th>
                    <th>resume</th>
                    <th>projection</th>
                    <th>createdDate</th>
                    <th>lastModidirdDate</th>
                </tr>

            </thead>

            <tbody>



                <?php
                foreach ($data->fetchAll(PDO::FETCH_ASSOC) as $k => $v) {
                    echo "<tr>";
                    foreach ($v as $k => $v) {
                        echo "<td>" . $v . "</td>";
                    }
                    echo "</tr>";
                }
                ?>

            </tbody>


        </table>
    </div>



    <br>

    <div class="container mt-5">
        <table class="table table-bordered"">

            <thead>
                <tr>
                    <th>idFilm</th>
                    <th>idGenre</th>
                    <th>titre</th>
                    <th>annee</th>
                    <th>dure</th>
                    <th>resume</th>
                    <th>projection</th>
                    <th>createdDate</th>
                    <th>lastModidirdDate</th>
                </tr>

            </thead>

            <tbody>



                <?php
                foreach ($data2->fetchAll(PDO::FETCH_ASSOC) as $k => $v) {
                    echo "<tr>";
                    foreach ($v as $k => $v) {
                        echo "<td>" . $v . "</td>";
                    }
                    echo "</tr>";
                }
                ?>

            </tbody>


        </table>

    </div>

    <br>


    
    <div class=" container mt-5">
            <table class="table table-bordered"">

            <thead>
                <tr>
                    <th>Titre</th>

                </tr>

            </thead>

            <tbody>



                <?php
                foreach ($data3->fetchAll(PDO::FETCH_ASSOC) as $k => $v) {
                    echo "<tr>";
                    foreach ($v as $k => $v) {
                        echo "<td>" . $v . "</td>";
                    }
                    echo "</tr>";
                }
                ?>

            </tbody>


        </table>

    </div>




    <h1 class=" text-center mt-5">show data from function PHP</h1>
                <?php
                displayArrayAsTable($data_function->fetchAll(PDO::FETCH_ASSOC));
                ?>

                <?php
                displayArrayAsTable($data_function_2->fetchAll(PDO::FETCH_ASSOC));
                ?>


                <?php
                displayArrayAsTable($data_function_3->fetchAll(PDO::FETCH_ASSOC));
                ?>






                <script src=" js/bootstrap.min.js">
                </script>
                <script src="js/bootstrap.bundle.js"></script>
</body>

</html>