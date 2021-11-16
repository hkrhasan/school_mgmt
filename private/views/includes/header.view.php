<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--========== BOX ICONS ==========-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!--========== CSS ==========-->
    <link rel="stylesheet" href="<?= ASSETS ?>/css/style.css">

    <!-- ============= Controller Specific CSS ============= -->
    <?php
    $path = ASSETS . "/css/" . strtolower(get_class($this)) . ".style.css";
    echo '<link rel="stylesheet" href=' . $path . '>';
    ?>