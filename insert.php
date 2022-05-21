<?php
 $conectar = mysqli_connect('localhost','root','12345','Pagina');

 if(!$conectar){
     echo "No conectado";
 }

 $Nombre = $_POST['Nombre'];
 $Apellido = $_POST['Apellido'];
 $Celular = $_POST['Celular'];
 $Pais = $_POST['Pais'];

 $sql = "INSERT INTO registro(Nombre, Apellido, Celular, Pais) VALUES ('$Nombre', '$Apellido','$Celular','$Pais')";

 $ejecutar = mysqli_query($conectar, $sql);

 if(!$ejecutar){
     echo "Hay algun error";
 }else{
     echo "Datos almacenados correctamente";
 }
?>