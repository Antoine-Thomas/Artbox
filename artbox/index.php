<?php include('header.php'); ?>

<?php include('oeuvres.php'); ?>

<main>
    <div id="liste-oeuvres">
    <?php foreach ($gallery_all as $key => $oeuvre) {?>
                <article class="oeuvre">
                    <a href="./oeuvre.php?id=<?php echo $oeuvre['id']; ?>">
                        <img src="<?php echo $oeuvre["img"]; ?>" alt="art-image">
                        <h2><?php echo $oeuvre["title"]; ?></h2>
                        <p class="description"><?php echo $oeuvre["auteur"]; ?></p>
                    </a>
            </article>
        

<?php } ?> 

    </div>
</main>
<?php include('footer.php'); ?>






