<!-- ======= Main Js ============= -->

<script src="<?= ASSETS ?>/js/main.js"></script>
<script src="<?= ASSETS ?>/js/navbar.js"></script>

<!-- ============= Controller Specific js ============= -->
<?php
$path = ASSETS . "/js/" . strtolower(get_class($this)) . ".js";
echo '<script src=' . $path . '></script>';
?>


</body>

</html>