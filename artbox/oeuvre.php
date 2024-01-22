<?php include('header.php'); ?>
<?php include('oeuvres.php'); ?>
<?php
    $id = $_GET["id"];
    $oeuvre = $gallery_all [$id];
?>

<main>
    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src="<?php echo $oeuvre["img"]; ?>" alt="oeuvre">
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo $oeuvre["title"]; ?></h1>
            <p class="description"><?php echo $oeuvre["auteur"]; ?></p>
            <p class="description-complete"><?php echo $oeuvre["desc"]; ?></p>
        </div>
    </article>
</main>

<?php include('footer.php'); ?>


