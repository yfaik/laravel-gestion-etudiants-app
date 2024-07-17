<?php include('slices/header.php')?>
<main>
    <h3>Nos étudiants</h3>
    
<?php 
include('config/connect.php');
$query="select * from etudiants";
$result=mysqli_query($connection,$query);
while($row=mysqli_fetch_assoc($result)){
    echo "<div class='etudiant'>";
    echo "<h2 class='full-name'>".$row['nom']." ".$row['prenom']."</h2>";
    echo "<img width='240' height='300' src='images/uploads/".$row['image']."'>";
    echo "<hr>";
    echo "<a href='#' class='modifier'>Modifier</a>";
    echo "<a href='#' class='supprimer'>Supprimer</a>";
    echo "</div>";
}

?>

</main>
<?php include('slices/footer.php')?>
