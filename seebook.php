<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meow Library</title>
    <link rel="stylesheet" href="seebook.css" />
</head>

<body>
    <nav>
        <label class="logo">Library</label>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li class="home"><a href="seebook.php">Books</a></li>
            <li><a href="login.html">Admin Login</a></li>
        </ul>
    </nav>    

<div class="cen">

<table>
    <tr>
        <th>BOOK NUMBER</th>
        <th>BOOK NAME</th>
        <th>AUTHER</th>
        <th>PUBLISHER</th>
    </tr>

    <?php
        $conn = mysqli_connect('localhost','root','','library');
        $sql="SELECT `bnum`, `bname`, `aname`, `pname` FROM `meow`";
        $result= mysqli_query($conn,$sql);
        
                while($row = mysqli_fetch_assoc($result))
                {
                    echo
                    "<tr>
                        <td>".$row["bnum"]."</td>
                        <td>".$row["bname"]."</td>
                        <td>".$row["aname"]."</td>
                        <td>".$row["pname"]."</td>
                    </tr>";  
                }

        echo"</table>";
        $conn-> close();
    ?>
</div>

</body>
</html>