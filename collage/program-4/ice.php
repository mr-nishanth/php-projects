<html>
<head>
    <title>Super Market</title>

</head>
<body>
        <?php
          $conn = mysqli_connect("localhost","root","root","bakery");

          if (!$conn) {
              echo "DataBase doesn't Connected Yet";
              die(mysqli_error($conn));
          }else{
            $sql = "SELECT * FROM ice";
            $res = mysqli_query($conn,$sql);

            if(mysqli_num_rows($res) != 0){
                echo " <center>  <h1> Cool-Hot Bakery </h1>";
                echo " <center>  <h2> Ice Cream Items </h2>";
                echo "
                <table border=2 bgcolor=skyblue collspacing=10 collpadding=10>  <tr> <th> Fruits </th> <th> Price </th>  </tr>
                ";

                while($row = mysqli_fetch_array($res)){
                    echo "<tr><td>$row[name]</td>";
                    echo "<td>$row[price]</td></tr>";
                }
                echo "</table></center>";
            }else{
                echo "<br><h2>Record not Available</h2>";
            }

          }

        ?>
</body>
</html>