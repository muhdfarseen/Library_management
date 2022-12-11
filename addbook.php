<?php

   $conn = mysqli_connect('localhost','root','','library');

   if(isset($_POST["addbook"]))
   {
      $bnum=$_POST['bnum'];
      $bname=$_POST['bname'];
      $aname=$_POST['aname'];
      $pname=$_POST['pname'];
   

      $sql="INSERT INTO meow(bnum,bname,aname,pname)values('$bnum','$bname','$aname','$pname')";

      mysqli_query($conn,$sql);

      $conn->close();
   }

?>

<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meow Library</title>
    <link rel="stylesheet" href="addbook.css" />
</head>

<body>
    <nav>
        <label class="logo">Library</label>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="seebook.php">Books</a></li>
            <li class="login"><a href="login.html">Admin Login</a></li>
        </ul>
    </nav>

    <img src="Group.svg"alt="" srcset="" class="icon">

    <div class="msg">
        <h3>data stored in database successfully<br></h3>
        <p>Please browse your localhost php my admin<br>
           to view the updated data
        <p>
    </div>

    <div class="blurrct"></div>

    <button class="back" type="submit" onClick="formto()">Back</button>

</body>

<script>

    function formto()
    {
        window.location.href="form.html";
    }

</script>


</html>

    

    

