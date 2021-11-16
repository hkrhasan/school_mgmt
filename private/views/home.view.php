<?php
$this->view('includes/header');
$this->view('includes/navbar');
?>


<main>
    <?= Auth::getUsername() ?>
</main>
<?php $this->view('includes/footer'); ?>