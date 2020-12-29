<?php
header("Content-type: text/html; charset=utf8");

$pass="";
if (isset($_POST["pass"])) {
	$pass=$_POST["pass"];
}


function validarPass($pass){
    $valido=1;

    if (strlen($pass)<8) {
    	echo "MSSG:tamaño no valido";
    	echo "<br>";
       $valido=0;
    }else if ($pass === strtoupper($pass)) {
       $valido=0;
       echo "MSSG:ingrese minuscula";
       echo "<br>";
    }else if ($pass === strtolower($pass)) {
       $valido=0;
       echo "MSSG:ingrese mayuscula";
       echo "<br>";
    }else if(!preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $pass)){
       $valido=0;
       echo "MSSG:ingrese caracteres especiales";
       echo "<br>";
    }else if(!preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $pass)){
        $valido=0;
        echo "MSSG:Ingrese numeros";
        echo "<br>";
    }
    return $valido;
}

echo "RETURN:".validarPass($pass);
echo "<br>";
echo "PASSWORD:".$pass;
?>