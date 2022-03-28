<html>
<head>
    <title>Super Market</title>
    <style>
        h2{
            color: red;
            font-size:40px;
        }
        th{
            background-color: lightgrey;
            font-size:20px;
        }
    </style>
</head>
<body bgcolor="lightgrey">
        <?php
          $conn = mysqli_connect("localhost","root","root","marketdb");

          if (!$conn) {
              echo "DataBase doesn't Connected Yet";
              die(mysqli_error($conn));
          }else{
            $sql = "SELECT * FROM fruits";
            $res = mysqli_query($conn,$sql);

            if(mysqli_num_rows($res) != 0){
                echo " <center>  <h2?> Fresh Fruits </h2>";
                echo "

                <table border=2 bgcolor=skyblue collspacing=10 collpadding=10>  <tr> <th> Fruits </th> <th> Price </th> <th> Offer </th>  </tr>

                ";

                while($row = mysqli_fetch_array($res)){
                    echo "<tr><td>$row[name]</td>";
                    echo "<td>$row[price]</td>";
                    echo "<td>$row[offer]</td></tr>";
                }
                echo "</table></center>";
            }else{
                echo "<br><h2>Record not Available</h2>";
            }
            echo "<center><table><tr><td><a href=index.php><input type=button value=HOME></input></a></td></tr></table><center>";
          }

        ?>
</body>
</html>