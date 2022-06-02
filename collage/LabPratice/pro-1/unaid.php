<html>
    <head>
    </head>
    <body>
        <?php
    $con = mysqli_connect("localhost","root","root","webdb");
        echo "<h1> Unaided Course </h1>";
        echo "<h1> UG Course </h1>";
        $sql = "select * from ugunaid";
        $res = mysqli_query($con,$sql);
        if(mysqli_num_rows($res) > 0){
            echo "<ul>";
            while ($row = mysqli_fetch_array($res)){
                echo "<li> $row[course]</li>";
            }
            echo "</ul>";
        }
        echo "<h1> PG Course </h1>";
        $sql = "select * from pgunaid";
        $res = mysqli_query($con,$sql);
        if(mysqli_num_rows($res) > 0){
            echo "<ul>";
            while ($row = mysqli_fetch_array($res)){
                echo "<li> $row[course]</li>";
            }
            echo "</ul>";
        }
        ?>
    </body>
</html>