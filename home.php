<?php
session_start();
include_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) {
 header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM z7_users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();


if (isset($_POST['send'])) {



}



$DBcon->close();

?>



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>

<div class="signin-form">

 <div class="container">
     
        
       <form class="form-signin" method="post" id="select-form">
      
        <h2 class="form-signin-heading">Welcome !</h2><hr />
        

      <hr />
        


      <hr />

<br>
<a href="logout.php?logout">Logout</a><br><br>
      </form>

    </div>
    
</div>

</body>
</html>