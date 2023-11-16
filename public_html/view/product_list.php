<!-- <div class="container">

    <h1><?php echo $tittle; ?></h1>
    <div class="row">
        <ul>
            <?php foreach ($products as $product): ?>
                <li class="col">
                    <a 
                        href="index.php?action=detalle_producte&product_id=<?php echo
                            $product['id'] ?>"
                    >
                        <?php echo $product['title'] ?> - <?php echo $product['author'] ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
/</div> -->

<!-- // views/llistar_categories.php -->
<ul>
<?php foreach ($categories as $categoria): ?>
    <li>
        <h3><?php echo $categoria['nom'] ?> </h3>
        <p><?php echo $categoria['descripcio'] ?> </p>
    </li>
<?php endforeach; ?>
</ul>
