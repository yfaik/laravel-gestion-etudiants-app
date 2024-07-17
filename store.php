<?php
include('config/connect.php');
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$image_file=$_FILES['image'];
$image= $image_file['name'];
move_uploaded_file($image_file['tmp_name'],__DIR__."/images/uploads/".$image);
$query="insert into etudiants(nom,prenom,email,image)
 values('$nom','$prenom','$email','$image')";
 mysqli_query($connection,$query);
 header('location:index.php');
 