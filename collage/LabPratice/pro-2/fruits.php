<html>
    <head>
        <title>Super Market</title>
    </head>
    <body>
        <?php
        $con = mysqli_connect("localhost","root","root","marketdb");
        echo "<center><h1> Black Super Market </h1></center>";
        $sql = "select * from fruits";
        $res = mysqli_query($con,$sql);
        if(mysqli_num_rows($res)>0){
            echo "
            <center> <table bgcolor=red cellpadding=5 cellspacing=5 border=2 >
            ";
                echo "
                <tr>
                    <th> Name </th>
                    <th> Price </th>
                    <th> Offer </th>
                </tr>
                ";
                while ($row = mysqli_fetch_array($res)){
                    echo "
                    <tr>
                        <td> $row[name]</td>
                        <td> $row[price] </td>
                        <td> $row[offer]</td>
                    </tr>
                    ";
                }
            echo "</table> </center>";
        }
        ?>
    </body>
</html>