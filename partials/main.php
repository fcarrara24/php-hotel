<?php
include __DIR__ . '/../Model/db.php';

?>
<main>
    <?php
    foreach ($hotels as $hotel) {
        echo 'nome: ' . $hotel['name'] . ', ->' . $hotel['description'] . '<br/>';
    }
    var_dump($hotels);
    ?>
</main>