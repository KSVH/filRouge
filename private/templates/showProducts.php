<?php $title = "Le filRouge ShowProducts"; ?>
<?php ob_start(); ?>

<h1>showProducts !</h1>
<p>filRougeParagraph</p>



<?php $content = ob_clean();?>
<?php require('layout.php') ?>
