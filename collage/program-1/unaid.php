<html>
    <head>
        <title>College website</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body >

            <?php
            // SYNTAX:-  $variable = mysqli_connect(server,user,password,database);   NOTE: PHP version  > 5.x.x
            $con = mysqli_connect("localhost","root","root","webdb");
            if (!$con) {
                echo "DataBase doesn't Connected Yet";
                die(mysqli_error($con));
            } else {
                echo "<h2> UNAIDED COURSES </h2>";

                // Retrieve UG Unaided Data
                $sql = "SELECT * FROM ugunaid";
                $res = mysqli_query($con,$sql);
                echo "<h3> <b> UG COURSES </b> </h3>";
                echo "<ul>";
                while($row = mysqli_fetch_array($res)){
                    echo "<li>$row[course]</li>";
                }
                echo "</ul>";

                // Retrieve PG unaided Data
                $sql = "SELECT * FROM pgunaid";
                $res = mysqli_query($con,$sql);
                echo "<h3> <b> PG COURSES </b> </h3>";
                echo "<ul>";
                while($row = mysqli_fetch_array($res)){
                    echo "<li>$row[course]</li>";
                }
                echo "</ul>";
            }

            ?>

    </body>
</html>