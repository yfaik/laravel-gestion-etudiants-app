<?php include('slices/header.php')?>
<main>
<h3>Nouvel étudiant</h3>
<form action="store.php" method="post" enctype="multipart/form-data">
    <p>
        <input type="text" name="nom" placeholder="Nom...">
    </p>
    <p>
        <input type="text" name="prenom" placeholder="Prénom...">
    </p>
    <p>
        <input type="email" name="email" placeholder="Email...">
    </p>
    <p>
        <input type="file" name="image">
    </p>
    <p>
        <button type="submit">Enregistrer</button>
    </p>
</form>
</main>
<?php include('slices/footer.php')?>
