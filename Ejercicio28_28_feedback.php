<html>
<head>
<title>un pequeño mailer para recopilar la opinion</title>
<meta https-equiv="content-type"content="text/html;chartset=ISO-8859-1">

</head>
<body>
<h1>Feedback-Mailer</h1>
<p>!Enviame un e-mail!</p>
<form action="<?php echo $_SERVER['PHP_SELF'];?>"method="post">
tu direccion de e-mail<br>
<input type="text" name="Mail"><br>
tu comentario<br>
<textarea name="message" cols="50" rows="5">

</textarea><br>
<input type ="submit"value="Enviar">


</form>
<?php
$receiverMail="tudireccion@tudominio.es";//escribe aqui tu direccion
if(isset($_POST['mail'])&& $_POST['mail'] !=""){
    if(mail($receivermail,"tienes correo nuevo",$_POST['message'],"from$_POST[Mail]")){
        echo"<p>Gracias por enviarme tu opinion.</p>|n";
    }
}
?>

</body>
</html>