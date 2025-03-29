<?php

if(isset($_POST['pw'])){
 $pw = $_POST['pw'];
 if($pw == "magic"){
    header ( "Location:newpage1.html");
 }elseif($pw=="abracadabra"){
    header("location: newpage2.html");
 }else{
    header( "Location: sorry.html");

    }
 }
?>

<html>
<head>
    <title>Ejemplo de password y header</title>
</head>

<body>
<h1> Ejemplo de password y funcion header</h1>
<form action="<?php echo $_SERVER['PHP_SELF'];?>"METHOD="POST">
<input type="text"name="pw">
<input type="submit" value="envialo">
</form>"

</body>
</html>